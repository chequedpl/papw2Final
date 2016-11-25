<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'price', 'photo1', 'idUser'
    ];


    public function users(){
    	return $this->belongsTo(User::class);
    }

    public function comments(){
    	return $this->hasMany(Comment::class);
    }

}
