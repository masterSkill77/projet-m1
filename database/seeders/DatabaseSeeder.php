<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
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
        // \App\Models\User::factory(10)->create();
    }
}
