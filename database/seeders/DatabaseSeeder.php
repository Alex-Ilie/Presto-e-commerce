<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'User',
             'email' => 'test@example.com',
             'password' => Hash::make('12345678')
         ]);

         $categories =

         ['Elettronica', 'Abbigliamento', 'Arredamento', 'Motori', 'Lavoro', 'Sport', 'Giardinaggio', 'Hobby', 'Infanzia', 'Per animali',];

        foreach($categories as $name){
            Category::create([
                'name'=>$name
            ]);
        }
    }
}
