<?php

use Illuminate\Database\Seeder;
use App\ApiDatas;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        factory(ApiDatas::class, 5)->create();
    }
}
