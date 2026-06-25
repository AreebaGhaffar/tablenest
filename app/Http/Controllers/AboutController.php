<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;

class AboutController extends Controller
{
    public function index()
    {
        $about = AboutContent::first();
        return view('about', compact('about'));
    }
}