<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\atmuser;
use DB;
class atmuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('atmuser')->insert([
            'name' => 'henz',
            'username' => 'awtsgege',
            'password' => '123123',
            'balance' => 1234121,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('atmuser')->insert([
            'name' => 'zef',
            'username' => 'qwerty',
            'password' => '321321',
            'balance' => 3012500,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('atmuser')->insert([
            'name' => 'ako',
            'username' => 'asdasd',
            'password' => 'zxczxc',
            'balance' => 3001240,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);

        DB::table('atmuser')->insert([
            'name' => 'gaya',
            'username' => '123456',
            'password' => 'qwertyasd',
            'balance' => 30613600,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
    }
}
