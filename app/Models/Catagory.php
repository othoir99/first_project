<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    protected $table = 'catagories';
    protected $fillable = [
        'name',
        'image_url'
    ];
}
