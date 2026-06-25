<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::orderBy('order')->get();
        return view('staff', compact('staff'));
    }
}