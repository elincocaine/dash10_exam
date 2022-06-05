<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player_totals as PT;
use App\Models\Roster as R;

class PlayerTotalsController extends Controller
{
    public function export($team){

    /*return PT::with(['roster' => function($query) use($team) {
            $query->select('id','name');
            $query->where('team_code', $team);
        }])->first();*/
        $data = R::select('name','dob')->whereHas('player_totals')->get();
        $data->makeHidden(['dob']);
        return $data;
    }
}
