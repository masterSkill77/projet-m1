<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
use App\Models\Information;
use App\Models\Media;
use App\Models\Offre;
use App\Models\Partenaire;
use Database\Factories\EventFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        EventType::factory()
            ->count(4)
            ->create();
        Event::factory()->count(3)->create();
        Partenaire::factory(4)->create();
        Offre::factory(10)->create();
        Information::factory(5)->create();
        Media::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
