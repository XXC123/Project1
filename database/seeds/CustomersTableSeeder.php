<?php

use Illuminate\Database\Seeder;
use App\Http\Models\Customer;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(Customer::class, 50)->create();
    }
}
