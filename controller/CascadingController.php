<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Arr;

class CascadingController extends Controller
{
    
    public function index()
    {
        $divisions = DB::table('divisions')->get();

        return view('cascading-bd', ['divisions' => $divisions]);
    }


    public function getDistrict(Request $request)
    {
        $division_id = $request->division_id;
        
        $districts = DB::table('districts')
                    ->where('division_id', "{$division_id}")
                    ->get();
        return $districts;

    }


    public function getUpazila(Request $request)
    {
        $district_id = $request->district_id;

        $upazilas = DB::table('upazilas')
                    ->where('district_id', "{$district_id}")
                    ->get();
        return $upazilas;
    }
}

