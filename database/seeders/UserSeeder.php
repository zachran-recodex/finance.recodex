<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat user Admin jika belum ada
        User::firstOrCreate(
            ['email' => 'admin@mail.com'],
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'password' => bcrypt('admin123'),
                'phone_number' => '123456789',
                'address' => 'Admin Street',
                'country' => 'Indonesia',
                'state' => 'Jakarta',
                'city' => 'Jakarta',
                'zip_code' => '12345',
                'office_phone' => '021123456',
                'organization' => 'AdminCorp',
                'profile_picture' => 'admin.jpg',
            ]
        );
    }
}
