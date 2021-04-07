<?php

use Illuminate\Database\Seeder;
use DB;
class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
             'description' => 'test'
            ],
      ];
 
      DB::table('about_us')->insert($admin);
    }
}
