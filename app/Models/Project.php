<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function projectOwner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contractors()
    {
        return $this->belongsToMany(Contractor::class);
    }

    public function suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
