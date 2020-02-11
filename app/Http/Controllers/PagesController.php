<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to laravel';
        return view('pages/index', compact("title"));
    }

    public function about(){
        $title = 'About laravel';
        return view('pages/about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Web development', 'Programming', 'SEOs']
    );
        return view('pages/services') -> with($data);
    }
}

