<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => '$2b$10$Uxjo7R8WylfrHB52KVaab.BuReHrQDNavOu1TU32Th7Ee6ksraR96'
        ]);
    }
}
