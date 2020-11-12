<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('customers')->delete();
        DB::table('customers')->insert([
            ['id'=>1,'full_name'=>'grand','avatar'=>'avatar.jpg','email'=>'grand@gmail.com','address'=>json_encode(array("city" => "hanoi", "streetAddress" => 'hbt')),'phone'=>'123456789','password'=>Hash::make('123456')],

        ]);
    }
}