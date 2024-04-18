<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;

class RentController extends Controller
{
    public function getRents(){
        $rents = Rent::all();

        return response()->json(["message" => "OK", "data" => $rents], 200);
    }

    public function addRent(Request $request){
        $input = $request->all();

        $rent =new Rent;
        $rent->writer = $input["writer"];
        $rent->type = $input["type"];
        $rent->title = $input["title"];
        $rent->renter_id = $input["renter_id"];

        $rent->save();
        return response()->json(["message" => "Sikeres kiirás", "data" => $rent], 200);
    }

    public function getRent($id){

        $rent = Rent::find($id);

        return response()->json(["message" => "OK", "data" => $rent], 200);
    }

    public function modifyRent(Request $request){
        $input = $request->all();

        $rent = Rent::find($input["id"]);
        $rent->writer = $input["writer"];
        $rent->type = $input["type"];
        $rent->title = $input["title"];
        $rent->renter_id = $input["renter_id"];

        $rent->save();
        return response()->json(["message" => "Sikeres kmódositó", "data" => $rent], 200);
    }

    public function delRent($id){
        $rent=Rent::find($id);

        $rent->delete();
        return response()->json(["message"=> "Sikeres törlés", "data"=>$rent], 200);
    }
}
