<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();
        DB::table('tags')->insert([
            ['id'=>1,'title'=>'Đồ họa','slug'=>'do_hoa','category_id'=>5],
            ['id'=>2,'title'=>'kỹ năng ghi nhớ','slug'=>'ky_nang','category_id'=>3],
            ['id'=>3,'title'=>'zumba','slug'=>'zumba','category_id'=>9],
            ['id'=>4,'title'=>'Ielts','slug'=>'Ielts','category_id'=>2],
            ['id'=>5,'title'=>'Starup','slug'=>'starup','category_id'=>7],
            ['id'=>6,'title'=>'LiveStream','slug'=>'livestream','category_id'=>8],
            ['id'=>7,'title'=>'Hon nhan','slug'=>'hon_nhan','category_id'=>12],
            ['id'=>8,'title'=>'Thai giao','slug'=>'thai_giao','category_id'=>11],
            ['id'=>9,'title'=>'PHP','slug'=>'php','category_id'=>1],
            ['id'=>11,'title'=>'HTML','slug'=>'html','category_id'=>1],
            ['id'=>12,'title'=>'Javascript','slug'=>'javascript','category_id'=>1],
            ['id'=>13,'title'=>'MC','slug'=>'mc','category_id'=>4],
            ['id'=>14,'title'=>'Excel','slug'=>'excel','category_id'=>6],
            ['id'=>15,'title'=>'Guitar','slug'=>'guitar','category_id'=>10],
            ['id'=>16,'title'=>'Nhiep Anh','slug'=>'nhiep_anh','category_id'=>13],

        ]);
    }
}
