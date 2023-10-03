<?php

namespace App\Http\Controllers;

use App\Models\Airlines;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    public function index(){
        return Airlines::all();
    }
    public function show($airline_id){
        return Airlines::find($airline_id);
    }

    public function destroy($airline_id){
        Airlines::find($airline_id)->delete();
        return redirect('/airline/list');
    }

    public function update(Request $request, $airline_id){
        $airline = Airlines::find($airline_id);
        $airline->name = $request->name;
        $airline->country = $request->country;
        $airline->save();
        return redirect('/airline/list');
    }

    public function store(Request $request){
        $airline = new Airlines();
        $airline->name = $request->name;
        $airline->country = $request->country;
        $airline->save();
        return redirect('/airline/list');
    }

    public function listView(){
        $airlines = Airlines::all();
        return view('airline.list', ['airlines' => $airlines]);
    }

    public function destroyView(){
        $airlines = Airlines::all();
        return view('airline.list', ['airlines' => $airlines]);
    }
}
