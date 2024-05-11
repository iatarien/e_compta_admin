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
        return view('detail',['user'=>$user,"client"=>$client]);
    }
    public function traiter_demande($id){
        $user = Auth::user();
        $demande = DB::table('demandes')->where('id_demande',$id)->first();
        $client = DB::table('users')->where("id",$demande->id_user)->first();
        return view('traiter_demande',['user'=>$user,"client"=>$client,"demande"=>$demande]);
    }
    public function demandes($type){
        $user = Auth::user();
        if($type ==="not"){
            $demandes = DB::table('demandes')->join('users','users.id',"=","demandes.id_user")->whereNull('state')->get();
        }else{
            $demandes = DB::table('demandes')->join('users','users.id',"=","demandes.id_user")->where('state',$type)->get();
        }
       
        return view('demandes',['user'=>$user,"demandes"=>$demandes,"type"=>$type]);
    }

    public function save_traitement(Request $request){
        $id = $request['id'];
        $montant = $request['montant'];
        $file = $request['doc'];
        $destination0 = public_path().'\files';
        $destination1 = public_path().'/files';
        $destination = $this->link1.'/files/';
        $name= $destination.$id.$file->getClientOriginalName();
        $file->move($destination0,$name);

        $state = "treated";
        DB::table('demandes')->where('id_demande', $id)->update(['montant'=>$montant,'state'=>$state,"file"=>$name]);
        return redirect("/demandes/not");
    }


    
}
