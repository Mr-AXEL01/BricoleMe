<?php

namespace Database\Seeders;

use App\Models\Artisan;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class ArtisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => fake()->name(),
            'username' => fake()->userName(),
            'email' => 'artisan@user.fr',
            'city' => fake()->city(),
            'phone' => fake()->phoneNumber(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        Artisan::create([
            'user_id' => $user->id,
            'availability' => true,
            'description' => 'new description for artisan',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $role = Role::firstOrCreate(['name' => 'artisan']);
        $user->assignRole($role);
    }


}
