<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("vi_VN");

        $status = ['active','deactive'];
        $random_status = Arr::random($status);

        $gender= ['male','female','others'];
        $random_gender = Arr::random($gender);



        foreach (range(1,10) as $index) {
            DB::table('users')-> insert([
                'full_name'=> $faker->name,
                'email'=> $faker->unique()->freeEmail,
                'address'=> json_encode(array("city" => $faker->city, "streetAddress" => $faker->streetAddress)),
                'phone'=> $faker->e164PhoneNumber,
                'status'=> Arr::random($status),
                'birth'=> $faker->date,
                'password'=> Hash::make('123456'),
                'avatar'=> '',
                'gender'=> Arr::random($gender),
                // 'permisson'=>json_encode(array()),
                // 'created_at'=> Carbon::now(),
                // 'updated_at'=> Carbon::now(),
            ]);
        }

    }
}
