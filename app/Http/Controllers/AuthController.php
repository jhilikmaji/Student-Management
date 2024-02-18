<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Login;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        // dd($request->all());
        $credential = $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);
        $input =$request->all();

        echo "<pre>";
        print_r($input);
        // $users = DB::select('SELECT * FROM login');
        $user_name = $input['user_name'];
        $password= $input['password'];
        $activeUsers = DB::table('login')
                            ->where('user_name', $user_name)
                            ->where('password',$password)
                            ->get()
                            ->toArray();
        $count_user = count($activeUsers);
        // print_r($activeUsers);
        // die;
        if($count_user == 1){
            session(
                [
                    'stack_level' => $activeUsers[0]->stack_lavel,
                    'user_name' => $activeUsers[0]->user_name
                ]
            );
            // $value = session('stack_level');
            // print_r($value);
            // die;
            return redirect('/layout');
        }
        else{
            return redirect('/')->with('flash_message','Login Field!');
        }
        // echo "<pre>";
        print_r($activeUsers);
        die;

        // if(\Auth::attempt($request->only('user_name','password'))){
        //     return redirect('layout');
        // }

    }
public function layout(){
    if (session()->has('user_name')){
    return view('layout');
    }
    else{
        return redirect('/');
    }
}
}
