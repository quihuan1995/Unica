<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\factory as Faker;
class Menu_itemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



    //     $faker = Faker::create();
    //    foreach(range(1,20) as $value){
    //     DB::table('menu_items')->delete();
    //     DB::table('menu_items')->insert([
    //         'title' => $faker->title,
    //         'link' => $faker->link,
    //         'icon' => $faker->icon,
    //         'parent_id' => $faker->parent_id,

    //     ]);
    //    }

        DB::table('menu_items')->delete();
        DB::table('menu_items')->insert([
            ['id'=>1,'menu_id'=>1,'title'=>'Công nghệ thông tin','link'=>'/congnghethongtin','icon'=>'<i class="fa fa-code"></i>','parent_id'=>null],
            ['id'=>2,'menu_id'=>1,'title'=>'Ngoại Ngữ','link'=>'/ngoaingu','icon'=>'<i class="fa fa-language"></i>','parent_id'=>null],
            ['id'=>3,'menu_id'=>1,'title'=>'Marketing','link'=>'/marketing','icon'=>'<i class="fa fa-chart-line"></i>','parent_id'=>null],
            ['id'=>4,'menu_id'=>1,'title'=>'Tin học văn phòng','link'=>'/tinhocvanphong','icon'=>'<i class="fa fa-desktop"></i>','parent_id'=>null],
            ['id'=>5,'menu_id'=>1,'title'=>'Thiết kế','link'=>'/thietke','icon'=>'<i class="fa fa-paint-brush"></i>','parent_id'=>null],
            ['id'=>6,'menu_id'=>1,'title'=>'Kinh doanh khởi nghiệp','link'=>'/kinhdoanhkhoinghiep','icon'=>'<i class="fa fa-rocket"></i>','parent_id'=>null],
            ['id'=>7,'menu_id'=>1,'title'=>'Phát triển cá nhân','link'=>'/phatrienbanthan','icon'=>'<i class="fa fa-lightbulb"></i>','parent_id'=>null],
            ['id'=>8,'menu_id'=>1,'title'=>'Sales,bán hàng','link'=>'/sale','icon'=>'<i class="fa fa-shopping-cart"></i>','parent_id'=>null],
            ['id'=>9,'menu_id'=>1,'title'=>'Sức khỏe - Giới tính','link'=>'/suckhoegioitinh','icon'=>'<i class="fa fa-heartbeat"></i>','parent_id'=>null],
            ['id'=>10,'menu_id'=>1,'title'=>'Phong cách sống','link'=>'/phongcanhsong','icon'=>'<i class="fa fa-utensils"></i>','parent_id'=>null],
            ['id'=>11,'menu_id'=>1,'title'=>'Nuôi dạy con','link'=>'/nuoidaycon','icon'=>'<i class="fa fa-child"></i>','parent_id'=>null],
            ['id'=>12,'menu_id'=>1,'title'=>'Hôn nhân và gia đình','link'=>'/honnhangiadinh','icon'=>'<i class="fa fa-users"></i>','parent_id'=>null],
            ['id'=>13,'menu_id'=>1,'title'=>'Nhiếp ảnh,dựng phim','link'=>'/nhiepanhdungphim','icon'=>'<i class="fa fa-camera"></i>','parent_id'=>null],
            ['id'=>14,'menu_id'=>1,'title'=>'Tất cả Chụp Ảnh','link'=>'/allchupanh','icon'=>'','parent_id'=>13],
            ['id'=>15,'menu_id'=>1,'title'=>'Tất cả Hôn Nhân','link'=>'/allhonnhan','icon'=>'','parent_id'=>12],
            ['id'=>16,'menu_id'=>1,'title'=>'Tất cả nuôi dạy con','link'=>'/allnuoidaycon','icon'=>'','parent_id'=>11],
            ['id'=>17,'menu_id'=>1,'title'=>'Tất cả Sức khỏe - Giới tính','link'=>'/allsuckhoegioitinh','icon'=>'','parent_id'=>9],
            ['id'=>18,'menu_id'=>1,'title'=>'Tất cả Phong cách sống','link'=>'/congnghethongtin','icon'=>'','parent_id'=>10],
            ['id'=>19,'menu_id'=>1,'title'=>'Tất cả Công nghệ thông tin','link'=>'/allcongnghethongtin','icon'=>'','parent_id'=>1],
            ['id'=>20,'menu_id'=>1,'title'=>'Tất cả Sales,bán hàn','link'=>'/allsales','icon'=>'','parent_id'=>8],
            ['id'=>21,'menu_id'=>1,'title'=>'Tất cả phát triển cá nhân','link'=>'/allphattriencanhan','icon'=>'','parent_id'=>7],
            ['id'=>22,'menu_id'=>1,'title'=>'Tất Cả Kinh doanh - Khởi Nghiệp','link'=>'/allkinhdoanh','icon'=>'','parent_id'=>6],
            ['id'=>23,'menu_id'=>1,'title'=>'Tất Cả Thiết Kế','link'=>'/allthietke','icon'=>'','parent_id'=>5],
            ['id'=>24,'menu_id'=>1,'title'=>'Tất cả Tin học văn phòng','link'=>'/alltinhoc','icon'=>'','parent_id'=>4],
            ['id'=>25,'menu_id'=>1,'title'=>'Tất cả Marketing','link'=>'/allmarketing','icon'=>'','parent_id'=>3],
            ['id'=>26,'menu_id'=>1,'title'=>'Tất cả Ngoại Ngữ','link'=>'/allngoaingu','icon'=>'','parent_id'=>2]

        ]);
    }
}
