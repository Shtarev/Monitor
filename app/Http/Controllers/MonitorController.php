<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor\Monitor;

class MonitorController extends Controller
{

    public function start(){
		$monitor = new Monitor;
		$output = $monitor->Back()->output;
		return view('admin.monitor', $output);
	}

    public function client(Request $request) {
        $monitor = new Monitor;
		$monitor->Front();
    }
}
