<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }
}
//file php che viene richiamato dalla filoe web.php su route