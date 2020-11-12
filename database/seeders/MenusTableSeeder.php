<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\factory as Faker;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->delete();
        DB::table('menus')->insert([
            ['id'=>1,'name'=>'Menu slide','slug'=>'menu_slide'],
            ['id'=>2,'name'=>'Menu Footer Left','slug'=>'menu_footer_left'],
            ['id'=>3,'name'=>'Menu Footer Right','slug'=>'menu_footer_right'],
        ]);
    }
}