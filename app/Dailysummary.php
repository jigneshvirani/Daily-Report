<?php

namespace App;
use Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dailysummary extends Eloquent 
{
	protected $table = 'daily_summary';
   
    // Jigs Virani 
    // @29 Jul 2017
    // To get the all drivers device .
    public function scopeDailysummary($query){
         return $query->leftjoin("user as u", "u.id", "=", "daily_summary.user_id")
                     ->leftjoin("project as pp", "pp.id", "=", "daily_summary.project_id");
    }
}