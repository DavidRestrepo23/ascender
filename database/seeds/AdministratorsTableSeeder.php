<?php

use Illuminate\Database\Seeder;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Administrator::create([
            'firstname' => 'David',
            'lastname' => 'Restrepo',
            'email' => 'admin@ascender.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
