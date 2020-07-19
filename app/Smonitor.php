<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smonitor extends Model
{
    protected $fillable = [
        'client', 'client_ip', 'clienr_referer', 'site', 'date',
    ];
}
