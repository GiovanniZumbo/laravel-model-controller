<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view("movies.index", compact("movies"));
    }
}
