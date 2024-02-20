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
        $data_array = json_decode($data, true);
        return view('home.dashboard')->with('data', $data_array);
    }
}
