<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Actor;

class Movie extends Model
{
    protected $fillable = [

        'title',
        'rating',
    ];

    public function actors() {

        return $this -> belongsToMany(Actor::class);
    }
}
