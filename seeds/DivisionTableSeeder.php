<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            
            ['id'=> 1, 'division_name'=>'Dhaka'],
            ['id'=> 2, 'division_name'=>'Chittagong'],
            ['id'=> 3, 'division_name'=>'Khulna'],
            ['id'=> 4, 'division_name'=>'Barishal'],
            ['id'=> 5, 'division_name'=>'Rajshahi'],
            ['id'=> 6, 'division_name'=>'Rangpur'],
            ['id'=> 7, 'division_name'=>'Sylhet'],
            ['id'=> 8, 'division_name'=>'Mymensingh']
          
        ]);


      
    }
}
