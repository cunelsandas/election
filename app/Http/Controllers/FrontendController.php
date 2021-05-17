<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Systemsetting;
use App\Customerinfo;
use App\Constituency;
use App\Department;
use App\Division;
use App\Country;
use App\City;
use App\State;
use App\Salary;
use App\Admin;
use Carbon\Carbon;
use DB;

class FrontendController extends Controller
{
    /**
     * Show Dashboard View
     *
     * @return View
     *
     */


    public function index(){

        $employees = Employee::get();

        $head_executive_new = Employee::where('division_id','=',7)->orderBy('totalpoint','DESC')->get();
        $ssh1d1_new = Employee::where('division_id','=',1)->orderBy('totalpoint','DESC')->get();
        $ssh1d2_new = Employee::where('division_id','=',2)->orderBy('totalpoint','DESC')->get();

        $head_executive = Employee::where('division_id','=',7)->get();
        $head_executive_count_row = Employee::where('division_id','=',7)->count();

        $constituencies_total = Constituency::first();

        $constituencies_use_total = Employee::where('division_id','=',7)->sum('totalpoint');

        //dd($constituencies_use_total);

//        $ssh1d1 = Employee::where('head_number','=',1)->where('division_id','=',1)->orderBy('number','ASC')->get();
//        $ssh1d2 = Employee::where('head_number','=',1)->where('division_id','=',2)->orderBy('number','ASC')->get();
//        $ssh1d3 = Employee::where('head_number','=',1)->where('division_id','=',3)->orderBy('number','ASC')->get();
//
//        $ssh2d1 = Employee::where('head_number','=',2)->where('division_id','=',1)->orderBy('number','ASC')->get();
//        $ssh2d2 = Employee::where('head_number','=',2)->where('division_id','=',2)->orderBy('number','ASC')->get();
//        $ssh2d3 = Employee::where('head_number','=',2)->where('division_id','=',3)->orderBy('number','ASC')->get();
//
//
//        $ssh3d1 = Employee::where('head_number','=',3)->where('division_id','=',1)->orderBy('number','ASC')->get();
//        $ssh3d2 = Employee::where('head_number','=',3)->where('division_id','=',2)->orderBy('number','ASC')->get();
//        $ssh3d3 = Employee::where('head_number','=',3)->where('division_id','=',3)->orderBy('number','ASC')->get();

        $ssh1d1 = Employee::where('head_number','=',1)->where('division_id','=',1)->orderBy('totalpoint','DESC')->get();
        $ssh1d2 = Employee::where('head_number','=',1)->where('division_id','=',2)->orderBy('totalpoint','DESC')->get();
        $ssh1d3 = Employee::where('head_number','=',1)->where('division_id','=',3)->orderBy('totalpoint','DESC')->get();

        $ssh2d1 = Employee::where('head_number','=',2)->where('division_id','=',1)->orderBy('totalpoint','DESC')->get();
        $ssh2d2 = Employee::where('head_number','=',2)->where('division_id','=',2)->orderBy('totalpoint','DESC')->get();
        $ssh2d3 = Employee::where('head_number','=',2)->where('division_id','=',3)->orderBy('totalpoint','DESC')->get();


        $ssh3d1 = Employee::where('head_number','=',3)->where('division_id','=',1)->orderBy('totalpoint','DESC')->get();
        $ssh3d2 = Employee::where('head_number','=',3)->where('division_id','=',2)->orderBy('totalpoint','DESC')->get();
        $ssh3d3 = Employee::where('head_number','=',3)->where('division_id','=',3)->orderBy('totalpoint','DESC')->get();
        //dd($ssh1d1);

        $facebook_link = Systemsetting::first();

        $customer_name = Customerinfo::first();

        $getUpdateTime = Employee::select('*')->orderBy('updated_at','DESC')->first();



        return view('frontend.index',['head_executive'=>$head_executive,
            'head_executive_count_row'=>$head_executive_count_row,
            'ssh1d1'=>$ssh1d1,'ssh1d2'=>$ssh1d2,'ssh1d3'=>$ssh1d3,
            'ssh2d1'=>$ssh2d1,'ssh2d2'=>$ssh2d2,'ssh2d3'=>$ssh2d3,
            'ssh3d1'=>$ssh3d1,'ssh3d2'=>$ssh3d2,'ssh3d3'=>$ssh3d3,
            'getUpdateTime'=>$getUpdateTime,
            'facebook_link'=>$facebook_link,'customer_name'=>$customer_name,
            'constituencies_total'=>$constituencies_total,'constituencies_use_total'=>$constituencies_use_total,
            'head_executive_new'=>$head_executive_new,
            'ssh1d1_new'=>$ssh1d1_new,
            'ssh1d2_new'=>$ssh1d2_new])
            ->with('employees',$employees);

    }
}
