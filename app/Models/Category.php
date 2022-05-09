<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    /**
     * The attributes that are translateable.
     *
     * @var array<string>
     */
    public $translatable = [
        'name',
        'slug',
    ];

    public $timestamps = false;
}
