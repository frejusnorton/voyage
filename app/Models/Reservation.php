<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trajet_id',
        'status',
    ];
    protected $keyType = 'string';
    public $incrementing = false;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($reservation) {
            if (!$reservation->id) {
                $reservation->id = (string) Str::uuid();
            }
        });
    }
    public function trajet()
    {
        return $this->belongsTo(Trajet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
