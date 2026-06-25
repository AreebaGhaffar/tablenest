<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;

class MenuController extends Controller
{
    public function index()
    {
        $starters = MenuItem::where('category', 'starters')->where('active', true)->get();
        $mains = MenuItem::where('category', 'mains')->where('active', true)->get();
        $desserts = MenuItem::where('category', 'desserts')->where('active', true)->get();
        $drinks = MenuItem::where('category', 'drinks')->where('active', true)->get();

        return view('menu', compact('starters', 'mains', 'desserts', 'drinks'));
    }
}