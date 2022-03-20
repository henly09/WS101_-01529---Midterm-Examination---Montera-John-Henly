<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class historySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history')->insert([
            'name' => 'henz',
            'username' => 'awtsgege',
            'type' => 'Withdraw',
            'transacmoney' => 3000
        ]);

        DB::table('history')->insert([
            'name' => 'zef',
            'username' => 'qwerty',
            'type' => 'Deposit',
            'transacmoney' => 3000
        ]);

        DB::table('history')->insert([
            'name' => 'ako',
            'username' => 'asdasd',
            'type' => 'Withdraw',
            'transacmoney' => 3000
        ]);

        DB::table('history')->insert([
            'name' => 'gaya',
            'username' => '123456',
            'type' => 'Deposit',
            'transacmoney' => 3000
        ]);
    }
}
