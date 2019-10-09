<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class test_account extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('customers')->insert([
			'email' => Str::random(10).'@gmail.com',
			'password' => bcrypt('password'),
            'name' => Str::random(10),
            'address' => str_random(10),
     
        ]);

    }
}
