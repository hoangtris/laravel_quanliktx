<?php

use Illuminate\Database\Seeder;

class PhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Phong',50)->create();
    }
}
