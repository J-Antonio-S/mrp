<?php

use Illuminate\Database\Seeder;
use App\Almacen;

class AlmacensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //model factories
        factory(Almacen::class, 100)->create();
    }
}
