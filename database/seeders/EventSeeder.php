<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Models\User;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        for($i = 0; $i < 200; $i++) {
            $user = $users->random();

            Event::factory()->create([
                'user_id' => $user->id,
            ]);
            // $user->events()->create([
            //     'name' => fake()->unique()->sentence(3),
            //     'description' => fake()->text(),
            //     'start_date' => fake()->dateTimeBetween('now', '+1 month'),
            //     'end_date' => fake()->dateTimeBetween('+1 month', '+2 months'),
            // ]);
        }
    }
}
