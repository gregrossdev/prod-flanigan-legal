<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function show(Practice $practice)
    {
        return view('practice', compact('practice'));
    }
}
