<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\table;

class Trajet extends Model
{
    use HasFactory;



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
}
