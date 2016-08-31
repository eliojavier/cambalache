<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class, 10)->create()->each(function($user) {
            $user->save();
        });
        
        factory(App\Book::class, 100)->create()->each(function ($book){
            $book->save();
        });
    }
}
