<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('homepage', compact($movies));
    }
}
//file php che viene richiamato dalla file web.php su route