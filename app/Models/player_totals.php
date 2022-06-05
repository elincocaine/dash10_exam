<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player_totals extends Model
{
    protected $table = 'player_totals';
    use HasFactory;
    protected $appends =
            ['total_rebounds',
             'free_throws_pct',
             'total_points',
                'field_goals_pct',
                'three_points_pct',
                'two_points_pct'];

    public function getTotalReboundsAttribute(){

        return intval($this->offensive_rebounds) + intval($this->defensive_rebounds);
    }

    public function getFreeThrowsPctAttribute(){

        return intval($this->free_throws_attempted) ? (round(intval($this->free_throws) / intval($this->free_throws_attempted), 2) * 100) . '%' : 0;
    }

    public function getTotalPointsAttribute(){

        return (intval($this->three_pts) * 3) + (intval($this->two_pts) * 2) + intval($this->free_throws);
    }

    public function getFieldGoalsPctAttribute(){

    return intval($this->field_goals_attempted) ? (round(intval($this->field_goals) / intval($this->field_goals_attempted), 2) * 100) . '%' : 0;
    }

    public function getThreePointsPctAttribute(){

        return intval($this->three_pts_attempted) ? (round(intval($this->three_pts) / intval($this->three_pts_attempted), 2) * 100) . '%' : 0;
    }

    public function getTwoPointsPctAttribute(){

        return intval($this->two_pts_attempted) ? (round(intval($this->two_pts) / intval($this->two_pts_attempted), 2) * 100) . '%' : 0;
    }

}
