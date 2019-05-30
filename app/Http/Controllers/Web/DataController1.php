<?php
$categories = DB::table('categories')
			->LeftJoin('categories_description', 'categories_description.categories_id', '=', 'categories.categories_id')
			->select('categories.categories_id as id',
				 'categories.categories_image as image',
				 'categories.categories_icon as icon',
				 'categories.sort_order as order',				 
				 'categories.categories_slug as slug',
				 'categories.parent_id',
				 'categories.group_id',
				 'categories_description.categories_name as name'
				 )
			->where('categories_description.language_id','=', Session::get('language_id'))
			->where('group_id','1')
			->get();
		
		$index = 0;
		foreach($categories as $categories_data){
			$categories_id = $categories_data->id;
			
			$products = DB::table('categories')
					->LeftJoin('categories as sub_categories', 'sub_categories.parent_id', '=', 'categories.categories_id')
					->LeftJoin('products_to_categories', 'products_to_categories.categories_id', '=', 'sub_categories.categories_id')
					->LeftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
					->select('categories.categories_id', DB::raw('COUNT(DISTINCT products.products_id) as total_products'))
					->where('categories.categories_id','=', $categories_id)
					->get();
			
			$categories_data->total_products = $products[0]->total_products;
			array_push($result,$categories_data);						
			
			$sub_categories = DB::table('categories')
				->LeftJoin('categories_description', 'categories_description.categories_id', '=', 'categories.categories_id')
				->select('categories.categories_id as sub_id',
					 'categories.categories_image as sub_image',
					 'categories.categories_icon as sub_icon',
					 'categories.sort_order as sub_order',				 
				 	'categories.categories_slug as sub_slug',
					 'categories.parent_id',
					 'categories_description.categories_name as sub_name'
					 )
				->where('categories_description.language_id','=', Session::get('language_id'))
				->where('parent_id',$categories_id)
				->get();
			
			$data = array();
			$index2 = 0; 
			foreach($sub_categories as $sub_categories_data){
				$sub_categories_id = $sub_categories_data->sub_id;
								
				$individual_products = DB::table('products_to_categories')
					->LeftJoin('products', 'products.products_id', '=', 'products_to_categories.products_id')
					->select('products_to_categories.categories_id', DB::raw('COUNT(DISTINCT products.products_id) as total_products'))
					->where('products_to_categories.categories_id','=', $sub_categories_id)
					->get();
			
				$sub_categories_data->total_products = $individual_products[0]->total_products;
				$data[$index2++] = $sub_categories_data;				
			
			}
			
			$result[$index++]->sub_categories = $data;
			
		}		