<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(RoleSeeder::class);

        User::factory()->create([
            'name' => 'Kepala Sekolah',
            'email' => 'kepsek@gmail.com',
            'password' => Hash::make('12345678'),
        ])->assignRole('kepalasekolah');

        User::factory()->create([
            'name' => 'Admin Tata Usaha',
            'email' => 'tatausaha@gmail.com',
            'password' => Hash::make('12345678'),
        ])->assignRole('admin');
    }
}
