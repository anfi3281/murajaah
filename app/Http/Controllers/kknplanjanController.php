<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kknplanjanController extends Controller
{
    public function index(){
        return view("kknplanjan.index");
    }
}
