<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Category_1 extends Model
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

        static::addGlobalScope('category_1', function (Builder $builder) {
            $builder->where('group_id', '=', 1);
        });
    }



    /**
     * Get the direct child category of this Category
     */
    public function Category_2()
    {
        return $this->hasMany('App\Category_2', 'parent_id', 'categories_id');
    }
    

    /**
     * Get the direct parent of this category
     */
    public function Category_0()
    {
        return $this->belongsTo('App\Category_0','parent_id','categories_id');
    }

    /**
     * Get the description for this category
     */
    public function Categories_Description()
    {
        return $this->hasOne('App\Categories_Description', 'categories_id', 'categories_id');
    }

}
