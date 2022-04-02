<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert([
            'title' => 'mr',
            'name' => 'John',
            'last_name' => 'Doe',
            'address' => 'Street 123',
            'zip_code' => '8398',
            'city' => 'Lulsa',
            'state' => 'SA',
            'email' => 'john@example.com',
        ]);
        DB::table('clients')->insert([
            'title' => 'Mrs',
            'name' => 'Jane',
            'last_name' => 'Doe',
            'address' => 'Another Add',
            'zip_code' => '3989',
            'city' => 'City2',
            'state' => 'SD',
            'email' => 'jane@example.com',
        ]);
    }
}
