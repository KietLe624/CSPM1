<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciesController extends Controller
{

    public function index()
    {
        //
        return view('page.exercises');
    }


    public function short_story()
    {
        //
        return view('page.short_story');
    }

}
