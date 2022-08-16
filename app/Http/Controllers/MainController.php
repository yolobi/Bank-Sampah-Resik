<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index (){
        return view('index');
    }

    public function about (){
        return view('about');
    }

    public function contact (){
        return view('contact');
    }

    public function dashboard(){
        $user = Auth::user();
        // dd($user);
        return view('user.index', compact('user'));
    }
}
