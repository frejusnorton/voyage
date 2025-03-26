<?php

use Tests\TestCase;
use App\Models\Trajet;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TrajetReservableTest extends TestCase
{
    use RefreshDatabase; // Réinitialise la base à chaque test

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(); 
    }

    /** @test */
    public function trajet_est_reservable_si_plus_dune_heure()
    {
        $trajet = Trajet::first(); 
        $trajet->date_depart = Carbon::now()->addHours(2)->toDateString();
        $trajet->heure_depart = Carbon::now()->addHours(2)->format('H:i:s');
        $trajet->save();

        $this->assertTrue($trajet->isReservable());
    }

    /** @test */
    public function trajet_nest_pas_reservable_si_moins_dune_heure()
    {
        $trajet = Trajet::first(); 
        $trajet->date_depart = Carbon::now()->toDateString();
        $trajet->heure_depart = Carbon::now()->addMinutes(30)->format('H:i:s');
        $trajet->save();

        $this->assertFalse($trajet->isReservable());
    }
}
