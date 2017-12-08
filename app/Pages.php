<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
	protected $fillable = [
        'site_id', 'title', 'slug', 'html', 'meta_title', 'meta_description', 'meta_keywords', 'custom_css'
    ];
}
