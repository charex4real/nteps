<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category_2 extends Model
{
    //
     protected $table = 'categories';
      protected $primaryKey = "categories_id ";

    protected $guarded = [];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('category_2', function (Builder $builder) {
            $builder->where('group_id', '=', 2);
        });
    }


    /**
     * Get the direct parent of this category
     */
    public function Category_1()
    {
        return $this->belongsTo('App\Category_1','parent_id','categories_id');
    }


    /**
     * Get the description for this category
     */
    public function Categories_Description()
    {
        return $this->hasOne('App\Categories_Description', 'categories_id', 'categories_id');
    }
    

}
