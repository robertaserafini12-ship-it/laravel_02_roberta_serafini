<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function about() {
        return view('about'); // Oppure 'about-us' a seconda di come hai chiamato la vista
    }

    public function services() {
        return view('services');
    }
}