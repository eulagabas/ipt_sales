<?php

namespace App\Http\Controllers;
use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index(){
        $merch = Merchandise::orderby('product_name')->get();

        return view('merchandises.index',['merchandises'=>$merch]);
    }

}
