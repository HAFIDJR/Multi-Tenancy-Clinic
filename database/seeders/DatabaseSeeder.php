<?php

namespace Database\Seeders;

use App\Models\Clinic;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        if (empty(User::count())) {
            User::factory()->create([
                'name' => 'Test Doctor',
                'email' => 'test@example.com',
                'password' => bcrypt(1234),
            ]);

            User::factory(10)->create();
        }


        if (empty(Clinic::count())) {

            $clinic = Clinic::create([
                'name' => 'CLiinic 1',
                'address' => 'Test addess of clinic 1',
            ]);

            User::where('id', 1)->first()->clinics()-> attach($clinic);
        }
    }
}
