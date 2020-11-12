<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            ['id'=>1,'name'=>'Công nghệ thông tin','slug'=>'cong_nghe_thong_tin','description'=>'Miêu tả danh mục'],
            ['id'=>2,'name'=>'Ngoại ngữ','slug'=>'ngoai_ngu','description'=>'Miêu tả danh mục'],
            ['id'=>3,'name'=>'Marketing','slug'=>'marketing','description'=>'Miêu tả danh mục'],
            ['id'=>4,'name'=>'Phát triển bản thân','slug'=>'phat_trien_ban_than','description'=>'Miêu tả danh mục'],
            ['id'=>5,'name'=>'Thiết kế đồ họa','slug'=>'thiet_ke_do_hoa','description'=>'Miêu tả danh mục'],
            ['id'=>6,'name'=>'Tin học văn phòng','slug'=>'tin_hoc_van_phong','description'=>'Miêu tả danh mục'],
            ['id'=>7,'name'=>'Kinh doanh - Khởi nghiệp','slug'=>'kinh_doanh_khoi_nghiep','description'=>'Miêu tả danh mục'],
            ['id'=>8,'name'=>'Sales, bán hàng','slug'=>'sales_ban_hoang','description'=>'Miêu tả danh mục'],
            ['id'=>9,'name'=>'Sức khỏe - Giới tính','slug'=>'suc_khoe_gioi_tinh','description'=>'Miêu tả danh mục'],
            ['id'=>10,'name'=>'Phong cách sống','slug'=>'phong_cach_song','description'=>'Miêu tả danh mục'],
            ['id'=>11,'name'=>'Nuôi dạy con','slug'=>'nuoi_day_con','description'=>'Miêu tả danh mục'],
            ['id'=>12,'name'=>'Hôn nhân & Gia đình','slug'=>'hon_nhan_gia_dinh','description'=>'Miêu tả danh mục'],
            ['id'=>13,'name'=>'Nhiếp ảnh, dựng phim','slug'=>'nhiep_anh_dung_phim','description'=>'Miêu tả danh mục'],
        ]);
    }
}