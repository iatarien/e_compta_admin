<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $bloc;

    
    
    public function __construct() 
    {

        $link ="https://ecompta.sis-chocolate.com";
        $link ="http://localhost:8089";
        $link1 ="https://admin.sis-chocolate.com";
        $link1 ="http://localhost:8000";
        $this->link = $link;
        $this->link1 = $link1;
        View::share('link', $this->link);
        View::share('link1', $this->link1);


    }
}
