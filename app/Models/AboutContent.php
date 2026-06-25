<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    protected $table = 'about_content';
    protected $fillable = ['story', 'chef_name', 'chef_bio', 'chef_photo', 'values'];
}