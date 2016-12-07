<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;

    protected $fillable = [
	'comment','idUser', 'idNota'
	];

   public function users(){
    	return $this->belongsTo(User::class);
    }

    public function products(){
    	return $this->belongsTo(Product::class);
    }
	
}
