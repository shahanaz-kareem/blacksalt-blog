<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {

        $data = Registration::all();
        
        return view('adminHome',compact('data'));
    }
    public function terms()
    {
       
        return view('admin.terms');
    }
    public function profile(Request $request)
    {
        $data = Auth::user();
       // dd($data);
        return view('admin.profile',compact('data'));
    }
    public function destory($id){
   
        Registration::find($id)->delete($id);
      return redirect()->back()->with('delete','deleted successfully');;
        // return response()->json([
        //     'success' => 'Record deleted successfully!'
        // ]);
    }
    public function EditProdile($id){
   
        $data = Auth::user()->find($id);
        
        if($data)
        {

        }
      return redirect()->back()->with('delete','deleted successfully');;
        
    }
}
