<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   
    public function mainhome()
    {
        return view('User.index.index');
    }
    public function about()
    {
        return view('User.about.about');
    }
    public function service()
    {
        return view('User.service.service');
    }
    public function contact()
    {
        return view('User.contact.contact');
    }
}
