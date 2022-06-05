<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roster extends Model
{
    protected $table = 'roster';
    use HasFactory;

    public function player_total()
    {
        return $this->hasOne(player_totals::class,'player_id','id');
    }
}
