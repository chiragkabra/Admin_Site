<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;


class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $city=City::all();
        return view('Admin.ViewCity',compact('city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.AddCity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

        $city = new City();
        if($req->input('submit'))
        {
            $req->validate([
                'name'=>'required|alpha|unique:cities,city_name'
            ]);

            $city->city_name=$req->input('name');
            $city->save();
            return redirect()->route('city.index')->with('success','city inserted');
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
           $city=City::find($id);
         return view('Admin.AddCity',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $city = new City();
        if($req->input('submit'))
        {
            $req->validate([
                'name'=>'required|alpha|unique:cities,city_name'
            ]);

            $city->city_name=$req->input('name');
            $city->update();
            return redirect()->route('city.index')->with('success','city updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        City::find($id)->delete();
        return redirect()->route('city.index')->with('delete','City deleted');
    }
}
