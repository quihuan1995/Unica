<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Course_RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->delete();
        DB::table('teachers')->insert([
            // ['id'=>1, 'user_id'=>, 'course_id'=>'', 'rate'=>, 'content'=>],
// id
// user_id
// course_id
// rate
// content
        ]);
    }
}
