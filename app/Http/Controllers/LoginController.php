<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        if($req->input('submit'))
        {
            // $req->validate([
            //     'email'=>'required|ends_with:@gmail.com,@yahoo.com',
            //     'password'=>'required',
            // ]);
            $email=$req->input('email');
            $password=$req->input('password');
            $log=User::where('email',$email)->first();
            if(!empty($log))
                {
                //     if(Hash::check($password, $log->password))
                // {


                    if($log->role_id==1)
                    {
                         $req->session()->put('admin',$log);
                         return redirect()->route('admin.index');
                    }

                }
                // else
                // {
                //     return redirect()->route('login.index')->with('error','passwords does not match');
                // }
            //}
                else
                {
                    return redirect()->route('login.index')->with('error','User does not exists');

                }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
