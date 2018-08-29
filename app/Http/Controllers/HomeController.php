<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use App\Wallet;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'sites_list']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if (Auth::check()) {
        return redirect('/home');
      }
        return view('pages.landing');
    }
    public function user()
    {
      $user_id = auth()->user()->id;
      $sites = User::find($user_id);
      return view('pages.home')->with('sites', $sites->usersites);
    }
    public function sites_list($user){
       $check = DB::table('users')->where('name', $user)->exists();
      if($check === false){
        return view('pages.sites')->with('error', 'sorry');
      }else{
        $find = DB::table('users')->where('name', $user)->value('id');
        $sites = User::findOrFail($find)->usersites;
        return view('pages.sites')->with('sites', $sites);
      }
    }
}
