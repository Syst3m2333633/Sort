<?php

namespace Database\Seeders;

use Doctrine\DBAL\Driver\IBMDB2\Exception\Factory;
use Illuminate\Database\Seeder;

class SortieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Factory(Sortie::class, 10)->create();
    }
}
