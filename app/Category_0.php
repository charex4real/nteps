<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category_0 extends Model
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

        static::addGlobalScope('category_0', function (Builder $builder) {
            $builder->where('group_id', '=', 0);
        });
    }


    /**
     * Get the direct child category of this Category
     */
    public function Category_1()
    {
        return $this->hasMany('App\Category_1', 'parent_id', 'categories_id');
    }


    /**
     * Get the description for this category
     */
    public function Categories_Description()
    {
        return $this->hasOne('App\Categories_Description', 'categories_id', 'categories_id');
    }
    

}
