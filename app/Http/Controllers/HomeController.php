<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;
use Auth;
use Bcrypt;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


   
    public function index(){
        $user = Auth::user();
        $clients = DB::table('users')->whereNull('role')->get();
        return view('index',['user'=>$user,"clients"=>$clients]);
    }

    public function detail($id){
        $user = Auth::user();
        $client = DB::table('users')->where("id",$id)->first();
        $docs = DB::table('documents')->where('id_user',$id)->first();
        return view('detail',['user'=>$user,"client"=>$client,"docs"=>$docs]);
    }

    
}
