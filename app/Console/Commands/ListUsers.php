<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ListUsers extends Command
{
    protected $signature = 'users:list';
    protected $description = 'Liste tous les utilisateurs';

    public function handle()
    {
        $users = User::select('id', 'nom','type', 'email', 'created_at')->get();

        if ($users->isEmpty()) {
            $this->info('Aucun utilisateur trouvé.');
            return;
        }

        $this->table(['ID', 'Nom', 'Email', 'Créé le'], $users);
    }
}

