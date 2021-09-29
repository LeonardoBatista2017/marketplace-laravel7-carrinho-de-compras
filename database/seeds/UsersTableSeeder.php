<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Leonardo Batista',
            'email' => 'epcar03@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        factory(\App\Models\User::class,40)->create()->each(function($user){
           $user->store()->save(factory(\App\Models\Store::class)->make());
        });
    }
}
