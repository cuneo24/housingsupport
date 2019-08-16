<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;

class DirectorController extends Controller
{
    function showDirectors(){
        $directors = Director::get();
        return view('directors')->with(['directors' => $directors]);
    }
}
