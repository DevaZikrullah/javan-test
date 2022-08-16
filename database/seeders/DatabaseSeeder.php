<?php

namespace Database\Seeders;

use App\Models\Child;
use App\Models\GrandChild;
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
        // \App\Models\User::factory(10)->create();

        Child::factory()->create([
            'id' => 1,
            'name' => 'dedi',
            'gender' => 'M'
        ]);

        Child::factory()->create([
            'id' => 2,
            'name' => 'dodi',
            'gender' => 'M'
        ]);

        Child::factory()->create([
            'id' => 3,
            'name' => 'dede',
            'gender' => 'M'
        ]);

        Child::factory()->create([
            'id' => 4,
            'name' => 'dewi',
            'gender' => 'F'
        ]);

        GrandChild::factory()->create([
            'child_id' => 1,
            'name' => 'feri',
            'gender' => 'M'
        ]);

        GrandChild::factory()->create([
            'child_id' => 1,
            'name' => 'farrah',
            'gender' => 'F'
        ]);

        GrandChild::factory()->create([
            'child_id' => 2,
            'name' => 'gugus',
            'gender' => 'M'
        ]);

        GrandChild::factory()->create([
            'child_id' => 2,
            'name' => 'gandhi',
            'gender' => 'M'
        ]);

        GrandChild::factory()->create([
            'child_id' => 3,
            'name' => 'hanni',
            'gender' => 'F'
        ]);
        GrandChild::factory()->create([
            'child_id' => 3,
            'name' => 'hannah',
            'gender' => 'F'
        ]);
    }
}
