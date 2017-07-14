<?php

namespace App\Http\Controllers;

//load required library by use
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//load authorization library
use Auth;
use View;
use App\Dailysummary;
use App\Project;
use App\User;
//load session & other useful library
use Session;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Facades\Datatables;

/**
 * Photos
 * @package    DashboardController
 * @subpackage Controller
 * @author     Jigs Virani <jignesh@creolestudios.com>
 */
class CreatetaskController extends BaseController {

    public $layout = 'layouts.master';

    public function __construct() {
        //..     
    }

    ## Jigs Virani
    ## To get the index

    public function index() {

        ## get the available country list.
        $ResponseData = Dailysummary::all();
        return $this->layout = View::make('pages.home')->with('data', array());
    
    }

    // to get the all the daily summary.
    public function allsummary(){

            $getAllSummary  = Dailysummary::select('daily_summary.id',
                                            'pp.project_name', 
                                            DB::raw("CONCAT(u.first_name, '', u.last_name) as name"), 
                                             'daily_summary.start_time',
                                              'daily_summary.end_time')
                                            ->Dailysummary()
                                            ->orderBy('daily_summary.id', 'desc');

           return Datatables::of($getAllSummary)
                           // ->edit_column('job_title', ' <a class="disable_link"  href="manage/jobinformation/{{base64_encode($job_id)}} ">{{$job_title}}</a>')
                           ->make(true);
           //return Datatables::queryBuilder(DB::table('users'))->make(true);
    }

    public function createentry(){


         return $this->layout = View::make('pages.create')->with('data', array());
    }

}