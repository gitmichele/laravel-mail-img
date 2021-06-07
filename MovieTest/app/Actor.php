<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Actor extends Model
{
    protected $fillable = [

        'firstname',
        'lastname'
    ];

    public function movie() {

        return $this -> belongsToMany(Movie::class);
    }
}
