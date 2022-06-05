<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player_totals as PT;
use App\Models\Roster as R;
use Exception;

class PlayerTotalsController extends Controller {

    public function ExportByTeam($team){

        try {
            $data = R::select('name', 'dob', 'pt.*')
                ->join('player_totals as pt', 'pt.player_id', 'roster.id')
                ->where('team_code', $team)->get();
            $data->makeHidden(['dob', 'player_id', 'created_at', 'updated_at']);
            return response()
                ->json([
                    "payload" => $data
                ], 200);
        } catch (Exception $e) {
            return response()
                ->json([
                    "message" => $e->getMessage()
                ], 500);

        }
    }

    public function ExportByPlayer($playerName){

        try {
            $data = R::select('name', 'dob', 'pt.*')
                ->join('player_totals as pt', 'pt.player_id', 'roster.id')
                ->where('name', $playerName)->get();
            $data->makeHidden(['dob', 'player_id', 'created_at', 'updated_at']);
            return response()
                ->json([
                    "payload" => $data
                ], 200);
        } catch (Exception $e) {
            return response()
                ->json([
                    "message" => $e->getMessage()
                ], 500);

        }
    }

    public function ExportByPosition($position){

        try {
            $data = R::select('name', 'dob', 'pt.*')
                ->join('player_totals as pt', 'pt.player_id', 'roster.id')
                ->where('pos', $position)->get();
            $data->makeHidden(['dob', 'player_id', 'created_at', 'updated_at']);
            return response()
                ->json([
                    "payload" => $data
                ], 200);
        } catch (Exception $e) {
            return response()
                ->json([
                    "message" => $e->getMessage()
                ], 500);

        }
    }
}
