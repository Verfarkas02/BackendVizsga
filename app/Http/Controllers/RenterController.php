<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Renter;

class RenterController extends Controller
{
    public function getRenters(){
        $renters = Renter::with("rent")->get();

        return response()->json(["message" => "OK", "data" => $renters], 200);
    }

    public function getRenter($id){
        $renter = Renter::with("rent")->find($id);

        return response()->json(["message" => "OK", "data" => $renter], 200);
    }
}
