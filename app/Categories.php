<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'categories_id';

    const CREATED_AT = 'date_added';
    const UPDATED_AT = 'last_modified';
}
