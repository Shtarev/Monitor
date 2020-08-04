<?php

namespace App\Monitor;

use Illuminate\Http\Request;
use App\Smonitor;
use App\Monitor\Front;
use App\Monitor\Back;
use App\Monitor\Locale;
use Lang;

class Monitor
{
    public $Smonitor;
    public $locale = array();
    
    public function __construct() {
        $this->Smonitor = new Smonitor;
        $locale = new Locale(trans()->locale());
        $this->locale = $locale->locale;
    }
    
    public function Front()
    {
        return new Front;
    }
    
    public function Back()
    {
        return new Back;
        
    }
    
    public function otkuda()
	{
		$result = request()->server('HTTP_REFERER');
		return $result;
	}
}
