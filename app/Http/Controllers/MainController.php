<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        $reviews = Review::all();
        //dd($reviews);
        return view('index',['reviews'=>$reviews]);
    }
}
