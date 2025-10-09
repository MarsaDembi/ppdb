<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
    public function index()
    {
        return view('cms.pages.school-year.index');
    }
}
