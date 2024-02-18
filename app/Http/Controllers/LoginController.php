<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $input =$request->all();
        print_r($input);
        die("1");

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        die("2");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input =$request->all();
        $validated = $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);
        $user_name = $input['user_name'];
        $password= $input['password'];
        echo $user_name;
        print_r($input);
        die("3");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        die("4");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        die("5");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        die("6");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        die("7");
    }
}
