<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        $unt = Unit::orderBy('unit_type')->get();
    
        return view('units.index',['units'=>$unt]);
       }
}
