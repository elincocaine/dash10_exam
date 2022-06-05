<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table = 'team';

    use HasFactory;

    public function roster()
    {
        return $this->hasMany(
            roster::class,
            'team_code',
            'code'
        );
    }
    
}
