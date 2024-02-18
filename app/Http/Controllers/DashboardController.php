<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //

    public function index() {
        $data = DB::table('students')
                ->select('gender')
                ->get();
                // ->toArray();
        // echo '<pre>';
        $data_array = json_decode($data, true);
        // print_r($data); //die;
        // print_r($data_array); die;
        return view('dashboard.dashboard')->with('data', $data_array);;
    }
}
