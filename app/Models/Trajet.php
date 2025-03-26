<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use function Laravel\Prompts\table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trajet extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    public function villeDepart()
    {
        return $this->belongsTo(Ville::class, 'ville_depart_id');
    }

    public function villeArrive()
    {
        return $this->belongsTo(Ville::class, 'ville_arrive_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($trajet) {
            if (!$trajet->id) {
                $trajet->id = (string) Str::uuid();
            }
        });
    }
    public function conducteur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function filter($search)
    {
        return self::when($search, function ($query) use ($search) {
            $search = strtolower($search);

            $query->whereRaw('LOWER(description) LIKE ?', ['%' . $search . '%'])
                ->orWhere('user_id', 'like', '%' . $search . '%')
                ->orWhereRaw('LOWER(prix::text) LIKE ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(nombre_personnes::text) LIKE ?', ['%' . $search . '%'])
                ->orWhereRaw('LOWER(statut) LIKE ?', ['%' . $search . '%'])

                ->orWhereHas('villeDepart', function ($query) use ($search) {
                    $query->whereRaw('LOWER(nom) LIKE ?', ['%' . $search . '%']);
                })
                ->orWhereHas('villeArrive', function ($query) use ($search) {
                    $query->whereRaw('LOWER(nom) LIKE ?', ['%' . $search . '%']);
                })

                ->orWhereHas('user', function ($query) use ($search) {
                    $query->whereRaw('LOWER(nom) LIKE ?', ['%' . $search . '%'])
                        ->orWhereRaw('LOWER(prenom) LIKE ?', ['%' . $search . '%']);
                });
        });
    }

    public function isReservable(): bool
    {
        $dateString = $this->date_depart . ' ' . $this->heure_depart;
        $heureDepart = Carbon::createFromFormat('Y-m-d H:i:s', $dateString);
        return Carbon::now()->addHour()->lessThan($heureDepart);
    }
}
