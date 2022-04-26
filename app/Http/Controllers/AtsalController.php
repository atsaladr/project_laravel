<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtsalController extends Controller
{
    public function index()
    {
        return view('ATSAL.index');
    }
    public function index_next()
    {
        return view('ATSAL.index_next');
    }
}
