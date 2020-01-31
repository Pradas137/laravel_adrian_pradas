<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
        UsersTableSeeder::class,
        PostsTableSeeder::class,
    ]);
    }

    protected function guard()
{
    return Auth::guard('guard-name');
}
}
