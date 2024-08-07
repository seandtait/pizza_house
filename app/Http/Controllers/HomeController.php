<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function deals()
    {
        return view('home.deals');
    }

    public function community()
    {
        return view('home.community');
    }



}
