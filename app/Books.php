<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//using typebooks model
//use App\TypeBooks;

class Books extends Model
{
    protected $table = 'books'; //table name books
    protected $fillable = ['title', 'price', 'typebooks_id'];

    // public function typebooks() {
    //     return $this->hasMany(TypeBooks::class, 'id', 'typebooks_id');
    // }

    public function typebooks()
    {
        return $this->hasOne('App\TypeBooks', 'id', 'typebooks_id');
    }
}
