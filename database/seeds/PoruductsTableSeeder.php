<?php

use Illuminate\Database\Seeder;

class PoruductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\product::class,80)->create();
    }
}
