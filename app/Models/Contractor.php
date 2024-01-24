<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    use HasFactory;

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
