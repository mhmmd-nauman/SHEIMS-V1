<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    //
    public function index(){
        $cities = City::all()->to_array();
        return reverse_array($cities);
    }
    public function add(Request $request)
    {
        City::create($request->all());
        /*
        $city = new City([
            'country' => $request->input('country'),
            'region' => $request->input('region'),
            'title' => $request->input('title'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'is_division' => $request->input('is_division'),
            'is_district' => $request->input('is_district'),
            'is_tehsil' => $request->input('is_tehsil'),
            'district_id' => $request->input('district_id'),
            'division_id' => $request->input('division_id')
        ]);
        $city->save();
        */
        //return response()->json('city successfully added');
    }
    public function edit($id)
    {
        $city = City::find($id);
        return response()->json($city);
    }
  
    // update post
    public function update($id, Request $request)
    {
        $city = City::find($id);
        $city->update($request->all());
  
        return response()->json('city successfully updated');
    }
  
    // delete post
    public function delete($id)
    {
        $city = City::find($id);
        $city->delete();
  
        return response()->json('city successfully deleted');
    }
}