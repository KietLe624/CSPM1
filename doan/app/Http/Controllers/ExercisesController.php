<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Exercises extends Controller
{
    public function index()
    {
        return view('page.exercises');
    }
}
