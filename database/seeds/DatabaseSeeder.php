<?php

use Illuminate\Database\Seeder;
namespace App;
use App\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
         $this->call(UsersTableSeeder::class);
         Model::reguard();

    }
}
