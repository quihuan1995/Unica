<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class SettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $keys=['gioi thieu ve khoa hoc','Câu hỏi thường gặp','Điều khoản dịch vụ','Hướng dẫn thanh toán'];


        // $faker = Faker::create();
        // foreach(range(1,4) as $value){
        //     DB::table('settings')->insert([
        //         'key'=>Arr::random($keys),
        //         'value'=>0
        //     ]);
            DB::table('settings')->delete();
            DB::table('settings')->insert([
                ['id'=>1,'key'=>'General','value'=>''],
                ['id'=>2,'key'=>'Language','value'=>''],
                ['id'=>3,'key'=>'Email','value'=>''],
                ['id'=>4,'key'=>'Blog','value'=>''],
                ['id'=>5,'key'=>'Media','value'=>''],
                ['id'=>6,'key'=>'Permalink','value'=>''],


            ]);
        }
    }