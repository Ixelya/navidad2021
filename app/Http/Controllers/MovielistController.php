<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovielistController extends Controller
{
    //
    public function index(){
        $titleName = "HomePage";
        return view('peliculas.movielist',compact('titleName'));
    }
}
