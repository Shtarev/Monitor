<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor\Monitor;

class IndexController extends Controller
{

    public function index(){
    	
		$monitor = new Monitor;
		$otkuda = $monitor->otkuda();
		
        return view('index', [
        'otkuda'=>$otkuda
        ]);
    }
}
