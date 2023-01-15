<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        // $students = student::get();
        // return view('home.index', compact('students'));

        return view('home.index');
    }
}
