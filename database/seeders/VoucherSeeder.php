<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voucher')->delete();
        DB::table('voucher')->insert([
            ['id'=>1,'code'=>'abcd','start_time'=>'2020-10-08 15:41:08','end_time'=>'2020-10-21 15:41:08','limit'=>1,'quantity'=>1],
            ['id'=>2,'code'=>'xyzw','start_time'=>'2020-10-08 15:41:08','end_time'=>'2020-10-21 15:41:08','limit'=>1,'quantity'=>1],
        ]);
    }
}