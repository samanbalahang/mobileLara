<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyersController extends Controller
{
    public function index()
    {
        return view('Buyers.index');
    }
}
