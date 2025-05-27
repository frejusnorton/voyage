<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = ['nom','ville_depart',''];

    public function trajetsDepart()
    {
        return $this->hasMany(Trajet::class, 'ville_depart_id');
    }

    public function trajetsArrive()
    {
        return $this->hasMany(Trajet::class, 'ville_arrive_id');
    }
}
