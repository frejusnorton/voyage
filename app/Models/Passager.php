<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Passager extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($passager) {
            if (!$passager->id) {
                $passager->id = (string) Str::uuid();
            }
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
