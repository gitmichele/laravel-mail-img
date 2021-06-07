<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Mail\MovieCreated;

use App\Movie;
use App\Actor;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movie::all() -> reverse();

        return view('home', compact('movies'));
    }

    public function create() {

        $actors = Actor::all();

        return view('create-movie', compact('actors'));
    }

    public function store(Request $request) {
        
        // data validation
        $validate = $request -> validate([
            'title' => 'required|string|max:128',
            'rating' => 'required|integer'
        ]);

        //  handle img
        $poster = $request -> file('poster');
        $posterExt = $poster -> getClientOriginalExtension();
        $posterNewName = time() . rand(1,100) . '.' . $posterExt;
        $posterFolder = '/posters';

        $posterFile = $poster -> storeAs($posterFolder, $posterNewName, 'public');
        
        // create movie and attach to selected actors
        $movie = Movie::create($validate);
        $movie -> poster = $posterNewName;
        $movie -> actors() ->  attach($request -> actors_id);
        $movie -> save();

        // get user mail
        $user_mail = Auth::user() -> email;

        // send mail movie added
        Mail::to($user_mail)
            ->send(new MovieCreated($movie));

        return redirect() -> route('home');

    }
}
