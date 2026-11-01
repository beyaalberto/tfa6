<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'Ana Cruz',
                'email' => 'ana@example.com',
                'phone' => '09170000001',
            ],
            [
                'full_name' => 'Ben Santos',
                'email' => 'ben@example.com',
                'phone' => '09170000002',
            ],
            [
                'full_name' => 'Carla Reyes',
                'email' => 'carla@example.com',
                'phone' => '09170000003',
            ],
            [
                'full_name' => 'Daniel Lim',
                'email' => 'daniel@example.com',
                'phone' => '09170000004',
            ],
            [
                'full_name' => 'Ella Garcia',
                'email' => 'ella@example.com',
                'phone' => '09170000005',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }

        $users = [
            ['username' => 'alex', 'full_name' => 'Alex Mendoza'],
            ['username' => 'bea', 'full_name' => 'Bea Ramos'],
            ['username' => 'chris', 'full_name' => 'Chris Flores'],
            ['username' => 'diana', 'full_name' => 'Diana Torres'],
            ['username' => 'enzo', 'full_name' => 'Enzo Rivera'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                $user
            );
        }
    }
}