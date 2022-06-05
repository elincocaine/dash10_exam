<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player_totals extends Model
{
    protected $table = 'player_totals';
    use HasFactory;
    public function roster(){

        return $this->belongsTo(roster::class,'player_id','id');

    }
}
