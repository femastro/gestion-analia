<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $posts = DB::table('posts')->get();
        $states = DB::table('provincias')->get();
        return view('home', compact('posts'), compact('states'));
    }
    public function edit($id){
        $post = DB::table('posts')->where('id',$id)->get();
        $states = DB::table('provincias')->get();
        return view('editForm', compact('post'), compact('states'));
    }
}
