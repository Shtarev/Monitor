<?php
namespace App\Monitor;

use Illuminate\Http\Request;

class Back  extends Monitor
{
    public $date;
    public $all;
    public $dateArr = array();
    public $output;

    public function __construct() 
	{
		parent::__construct();
        
		if(request()->del)
        {
            $arr=[];
            for($i=1; $i<32; $i++){
                if($i<10){
                    $arr[$i]='0'.$i.'.'.request()->del;
                }
                else{
                    $arr[$i]=$i.'.'.request()->del;
                }
            }
            $res = $this->Smonitor->whereIn('date', $arr)->delete();
        }
        $this->date = date("d.m.y");
        $this->all = $this->all();
        $this->dateArr();
        $this->output();
	}
    
    public function all()
    {
        return $this->Smonitor->count();
    }

    public function dateArr()
    {
        $allDate =  $this->Smonitor->distinct()->pluck('date');
        $key = '';
        $i = 0;
        foreach($allDate as $value){
            $test = substr($value, 3);
            if($key == $test) {
                $this->dateArr[$key][$i] = $value;
                $i++;
            }
            else {
                $key = $test;
                $i = 0;
                $this->dateArr[$key][$i] = $value;
                $i++;
            }
        }
    }

    public function output()
    {
        if(request()->date)
        {
            $date = request()->date;
        }
        else
        {
            $date = $this->date;
        }

        $dateClients = $this->Smonitor->where('date', $date)->get();
        $self = route('monitor');
        $count = $dateClients->count();

        $this->output = [
        	'all'=>$this->all,
            'dateArr'=>$this->dateArr,
            'self'=>$self,
            'date'=>$date,
            'count'=>$count,
            'dateClients'=>$dateClients,
			'locale2'=>$this->locale[2],
            'locale8'=>$this->locale[8],
            'locale9'=>$this->locale[9],
            'locale10'=>$this->locale[10],
            'locale11'=>$this->locale[11],
            'locale12'=>$this->locale[12],
            'locale13'=>$this->locale[13],
            'locale14'=>$this->locale[14]
        ];
    }
}
