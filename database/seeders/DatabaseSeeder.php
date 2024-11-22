<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         User::factory()->create([
             'first_name' => 'Kurbon',
             'last_name' => 'Ismoilov',
             'email' => 'test@example.com',
         ]);
         $this->call(PostSeeder::class);
    }
}
