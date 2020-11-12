<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
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
            // ['id'=>, 'user_id'=>, 'description'=>'', 'status'=>],
// id
// user_id
// description
// status
           
        ]);
    }
}
