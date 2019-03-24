<?php

use App\Item;
use App\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Item::class, 10)->create();
        factory(Customer::class, 20)->create();
    }
}
