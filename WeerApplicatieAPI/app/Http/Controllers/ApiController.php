<?php

namespace App\Http\Controllers;

use App\Models\ArduinoData;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    //get user
    public function getUser($id) {

            if (User::where('id', $id)->exists()) {
                $user = User::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
                return response($user, 200);
            } else {
                return response()->json([
                    "message" => "User not found"
                ], 404);
            }
        }

    //update user
    public function updateUser(Request $request, $id) {
        if (User::where('id', $id)->exists()) {
            $user = User::find($id);
            $user->name = is_null($request->name) ? $user->name : $request->name;
            $user->stationname = is_null($request->stationname) ? $user->stationname : $request->stationname;
            $user->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "User not found"
            ], 404);

        }
    }

    //get arduinodata
    public function getAllArduinoData() {
        $arduinodata = ArduinoData::get()->toJson(JSON_PRETTY_PRINT);
        return response($arduinodata, 200);
    }
    //create arduinodata
    public function createArduinoData(Request $request) {
        $arduinodata = new ArduinoData;
        $arduinodata->datatype = $request->datatype;
        $arduinodata->value = $request->value;
        $arduinodata->valuedatetime = $request->valuedatetime;
        $arduinodata->save();

        return response()->json([
            "message" => "Arduino record created"
        ], 201);
    }


}
