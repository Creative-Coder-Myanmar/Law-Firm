<?php

namespace App\Models;

use App\Traits\MediaCaster;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory, MediaCaster;

    protected $fillable = [
        'image',
        'title',
        'slug',
        'description',
        'authors'
    ];

    protected function image(): Attribute
    {
        return $this->cast();
    }
}
