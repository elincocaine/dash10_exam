<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Roster extends Model
{
    protected $table = 'roster';
    use HasFactory;

    protected $appends = ['age','status'];
    public function player_totals()
    {
        return $this->hasOne('App\Models\Player_totals', 'player_id', 'id');
    }

    public function getAgeAttribute(){

        return Carbon::parse($this->dob)->age;

    }
    public function getStatusAttribute(){

        return $this->hasOne('App\Models\Player_totals', 'player_id', 'id');

    }




}
