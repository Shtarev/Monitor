<?php

namespace App\Monitor;

use Illuminate\Http\Request;
use Session;

class Front extends Monitor
{
	public $date;
	public $time;
	public $site;
	public $clientIp;
	public $client;
	public $referer;
	public $thisClient;

	public function __construct() 
	{
		parent::__construct();

		$this->date = date("d.m.y");
		$this->time = date("H:i:s");
        $this->site = request()->server('HTTP_REFERER');
		$this->clientIp = $this->clientIp();
		$this->client = $this->client();
		$this->referer =  $this->referer();
		$this->thisClient =  $this->thisClient();
		$this->indb();
	}
	
	public function clientIp()
	{
		$client  = @$_SERVER['HTTP_CLIENT_IP'];  
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];  
		$remote  = @$_SERVER['REMOTE_ADDR'];  

		if(filter_var($client, FILTER_VALIDATE_IP)) {  
			$ip = $this->locale[0].$client.$this->locale[1];  
		}  
		elseif(filter_var($forward, FILTER_VALIDATE_IP)) {  
			$ip = $this->locale[0].$forward.$this->locale[2];  
		}  
		elseif(filter_var($remote, FILTER_VALIDATE_IP)) {  
			$ip = $this->locale[0].$remote.$this->locale[2];  
		}  
		else {  
			$ip = $this->locale[3];  
		}  
		return $ip;
	}
	
	public function client() 
	{ 
		if(session()->has('client'))
		{
			return session('client');
		}
		else
		{
			session()->put(['client'=>rand(1, 10000000)]);
			session()->save();
			return session('client');
		}
	}

	public function referer()
	{
		$referer = request()->otkuda;
		
		$result = ($referer) ? $this->locale[4].$referer : $this->locale[5];
		return $result;
	}
	
	public function thisClient()
	{
		return $this->Smonitor->select('site')->where('client', $this->client)->get();
	}
	
	public function indb() 
	{
		if($this->thisClient->count())
		{
			$sites = $this->thisClient[0]->site.$this->locale[6].$this->site.$this->locale[7].$this->time."<br>";
			$this->Smonitor->where('client', $this->client)->update(['site' => $sites]);
		}
		else
		{
			$sites = $this->locale[6].$this->site.$this->locale[7].$this->time."<br>";
			$this->Smonitor->insert([
				'client'=>$this->client,
				'client_ip'=>$this->clientIp,
				'clienr_referer'=>$this->referer,
				'site'=>$sites,
				'date'=>$this->date
			]);
		}
	}
}
