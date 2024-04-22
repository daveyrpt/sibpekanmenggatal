<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserProfile;
use Faker\Factory as Faker;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $users = User::all();

        foreach ($users as $user) {

            if (!UserProfile::where('user_id', $user->id)->exists()) {
                UserProfile::create([
                    'user_id' => $user->id,
                    'fullname' => $faker->name,
                    'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'address' => $faker->address,
                    'city' => $faker->city,
                    'state' => $faker->state,
                    'zip' => $faker->postcode,
                    'phone' => $faker->phoneNumber,
                    'gender' => $faker->randomElement(['male', 'female']),
                    'occupation' => $faker->jobTitle,
                    'member_type' => $faker->randomElement(['bersekutu', 'tetap']),
                ]);
            }
        }
    }
}
