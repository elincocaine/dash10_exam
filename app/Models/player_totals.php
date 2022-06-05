<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player_totals extends Model
{
    protected $table = 'player_totals';
    use HasFactory;
    protected $with = ['roster'];
    public function roster(){
        return $this->belongsTo('App\Models\Roster','player_id','id');

    }
    public function getTotalReboundsAttribute(){

        return $this->player_totals()->total_rebounds;

    }
}
