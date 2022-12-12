<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use DB;

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
    public function ConditionsPolicy()
    {
        return view('User.terms.terms');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        Registration::create($request->all());
        return redirect()->back()->with('store','registered successfully');
    }
}
