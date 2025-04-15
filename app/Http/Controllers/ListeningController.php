<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListeningController extends Controller
{
    public function index() {
        return view('layout.listening.index'); 
    }

    public function a1() {
        return view('layout.listening.a1');
    }

    public function a2() {
        return view('layout.listening.a2');
    }

    public function b1() {
        return view('layout.listening.b1');
    }

    public function b2() {
        return view('layout.listening.b2');
    }

    public function c1() {
        return view('layout.listening.c1');
    }
}
