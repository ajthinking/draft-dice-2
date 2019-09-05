<?php

use App\DiceThrow;
use Illuminate\Database\Seeder;

class DiceThrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DiceThrow::class, 10)->create();
    }
}