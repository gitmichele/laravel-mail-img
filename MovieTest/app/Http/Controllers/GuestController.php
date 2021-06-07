<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GuestController extends Controller
{
    public function welcome() {

        $movies = Movie::all() -> reverse();

        return view('welcome', compact('movies'));
    }
}
