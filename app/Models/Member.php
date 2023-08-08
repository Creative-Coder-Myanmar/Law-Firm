<?php

namespace App\Models;

use App\Traits\MediaCaster;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory, MediaCaster;
    protected $fillable = [
        'profile',
        'name',
        'position',
        'about'
    ];

    protected function profile(): Attribute
    {
        return $this->cast();
    }
}
