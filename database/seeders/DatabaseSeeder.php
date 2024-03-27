<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(categoryTableSeeder::class);
        $this->call(productTableSeeder::class);
        $this->call(courseTableSeeder::class);
        $this->call(menuTableSeeder::class);
        $this->call(seatTableSeeder::class);
        $this->call(storeTableSeeder::class);
    }
}
