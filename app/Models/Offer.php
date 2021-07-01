<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['id', 'name_ar','name_en', 'price', 'quality'];
    protected $hidden = ['created_at', 'updated_at'];

}
