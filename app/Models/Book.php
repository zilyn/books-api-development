<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'isbn', 'authors', 'number_of_pages', 'publisher', 'country', 'release_date'
    ];

    protected $dates = ['deleted_at'];

    public static $searchable_fields = [
        'name', 'isbn', 'publisher', 'country', 'release_date'
    ];

}
