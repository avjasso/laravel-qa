<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    public function user()
    {
    	$protected $fillable = ['title', 'body'];

    	return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug'] = Str::slug($value);
    }
}
