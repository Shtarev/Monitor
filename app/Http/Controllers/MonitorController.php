<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor\Monitor;

class MonitorController extends Controller
{
    // monitorig for back
    public function start(){
		$monitor = new Monitor;
		$output = $monitor->Back()->output;
		return view('admin.monitor', $output);
	}
    // monitorig for front
    public function client(Request $request) {
        $monitor = new Monitor;
		$monitor->Front();
    }
}