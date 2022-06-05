<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roster as R;
use Illuminate\Support\Facades\Validator;
use Exception;

class RosterController extends Controller {

    public function ExportByTeam($team){

    try {
            $data = R::where('team_code', $team)->get();
            $data->makeHidden(['id', 'created_at', 'updated_at']);

            return response()
                ->json([
                        "payload" => $data
                ], 200);
        }catch (Exception $e){
            return response()
                ->json([
                        "message" => $e->getMessage()
                ], 500);

        }
    }
    public function ExportByPlayer($playerName){

        try {
            $data = R::where('name', $playerName)->get();
            $data->makeHidden(['id', 'created_at', 'updated_at']);

            return response()
                ->json([
                    "payload" => $data
                ], 200);
        }catch (Exception $e){
            return response()
                ->json([
                    "message" => $e->getMessage()
                ], 500);

        }
    }
}
