<?php

use Illuminate\Database\Seeder;

class UpazilaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('upazilas')->insert([
            
            //Start Feni District's Upazilas
            ['id'=> 1, 'upazila_name'=>'Feni Sadar', 'district_id'=>'20', 'division_id'=>'2'],
            ['id'=> 2, 'upazila_name'=>'Feni Sadar', 'district_id'=>'20', 'division_id'=>'2'],
            ['id'=> 3, 'upazila_name'=>'Parshuram', 'district_id'=>'20', 'division_id'=>'2'],
            ['id'=> 4, 'upazila_name'=>'Feni Sadar', 'district_id'=>'20', 'division_id'=>'2'],
            ['id'=> 5, 'upazila_name'=>'Feni Sadar', 'district_id'=>'20', 'division_id'=>'2'],
            ['id'=> 6, 'upazila_name'=>'Feni Sadar', 'district_id'=>'20', 'division_id'=>'2'],
        ]);

    }
}
