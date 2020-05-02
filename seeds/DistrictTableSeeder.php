<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            
//Start Dhaka Division
           ['id'=> 1, 'district_name'=>'Dhaka',      'division_id'=>'1'],
           ['id'=> 2, 'district_name'=>'Faridpur',   'division_id'=>'1'],
           ['id'=> 3, 'district_name'=>'Gopalganj',  'division_id'=>'1'],          
           ['id'=> 4, 'district_name'=>'Kishoregonj','division_id'=>'1'],
           ['id'=> 5, 'district_name'=>'Gazipur',    'division_id'=>'1'],
           ['id'=> 6, 'district_name'=>'Madaripur',  'division_id'=>'1'],          
           ['id'=> 7, 'district_name'=>'Manikganj',  'division_id'=>'1'],
           ['id'=> 8, 'district_name'=>'Munshiganj', 'division_id'=>'1'],
           ['id'=> 9, 'district_name'=>'Narayanganj','division_id'=>'1'],          
           ['id'=> 10, 'district_name'=>'Narsingdi', 'division_id'=>'1'],
           ['id'=> 11, 'district_name'=>'Rajbari',   'division_id'=>'1'],
           ['id'=> 12, 'district_name'=>'Shariatpur','division_id'=>'1'],          
           ['id'=> 13, 'district_name'=>'Tangail',   'division_id'=>'1'],
//Start Chittagong Division
           ['id'=> 14, 'district_name'=>'Chittagong', 'division_id'=>'2'],
           ['id'=> 15, 'district_name'=>'Brahmanbaria', 'division_id'=>'2'],          
           ['id'=> 16, 'district_name'=>'Chandpur', 'division_id'=>'2'],
           ['id'=> 17, 'district_name'=>' Bandarban', 'division_id'=>'2'],
           ['id'=> 18, 'district_name'=>'Comilla', 'division_id'=>'2'],          
           ['id'=> 19, 'district_name'=>'Coxs Bazar', 'division_id'=>'2'],
           ['id'=> 20, 'district_name'=>'Feni', 'division_id'=>'2'],
           ['id'=> 21, 'district_name'=>'Khagrachhari', 'division_id'=>'2'],
           ['id'=> 22, 'district_name'=>'Lakshmipur', 'division_id'=>'2'],         
           ['id'=> 23, 'district_name'=>'Noakhali', 'division_id'=>'2'],
           ['id'=> 24, 'district_name'=>'Rangamati', 'division_id'=>'2'],
// Start  Khulna Division
           ['id'=> 25, 'district_name'=>'Khulna', 'division_id'=>'3'],
           ['id'=> 26, 'district_name'=>'Chuadanga', 'division_id'=>'3'],          
           ['id'=> 27, 'district_name'=>'Jessore', 'division_id'=>'3'],
           ['id'=> 28, 'district_name'=>'Jhenaidah', 'division_id'=>'3'],
           ['id'=> 29, 'district_name'=>' Bagerhat', 'division_id'=>'3'],          
           ['id'=> 30, 'district_name'=>'Khustia', 'division_id'=>'3'],
           ['id'=> 31, 'district_name'=>'Magura', 'division_id'=>'3'],
           ['id'=> 32, 'district_name'=>'Meherpur', 'division_id'=>'3'],          
           ['id'=> 33, 'district_name'=>'Narail', 'division_id'=>'3'],
           ['id'=> 34, 'district_name'=>'Satkhira', 'division_id'=>'3'],
//Start Barishal Division
           ['id'=> 35, 'district_name'=>'Barisal', 'division_id'=>'4'],          
           ['id'=> 36, 'district_name'=>' Barguna', 'division_id'=>'4'],
           ['id'=> 37, 'district_name'=>'Bhola', 'division_id'=>'4'],
           ['id'=> 38, 'district_name'=>'Jhalokati', 'division_id'=>'4'],          
           ['id'=> 39, 'district_name'=>'Patuakhali', 'division_id'=>'4'],     
           ['id'=> 40, 'district_name'=>'Pirojpur', 'division_id'=>'4'],
//Start Rajshahi Division  
           ['id'=> 41, 'district_name'=>' Rajshahi', 'division_id'=>'5'],
           ['id'=> 42, 'district_name'=>'Joypurhat', 'division_id'=>'5'],          
           ['id'=> 43, 'district_name'=>'Naogaon', 'division_id'=>'5'],
           ['id'=> 44, 'district_name'=>'Natore', 'division_id'=>'5'],
           ['id'=> 45, 'district_name'=>'Chapai nawabganj', 'division_id'=>'5'],          
           ['id'=> 46, 'district_name'=>'Pabna', 'division_id'=>'5'],
           ['id'=> 47, 'district_name'=>'Bogra', 'division_id'=>'5'],
           ['id'=> 48, 'district_name'=>'Sirajganj', 'division_id'=>'5'],  
//Start Rangpur Division  
           ['id'=> 49, 'district_name'=>' Rangpur', 'division_id'=>'6'],
           ['id'=> 50, 'district_name'=>'Gaibandha', 'division_id'=>'6'],
           ['id'=> 51, 'district_name'=>'Kurigram', 'division_id'=>'6'],
           ['id'=> 52, 'district_name'=>'Lalmonirhat', 'division_id'=>'6'],          
           ['id'=> 53, 'district_name'=>'Nilphamari', 'division_id'=>'6'],
           ['id'=> 54, 'district_name'=>'Panchagarh', 'division_id'=>'6'],
           ['id'=> 55, 'district_name'=>'Dinajpur', 'division_id'=>'6'],          
           ['id'=> 56, 'district_name'=>'Thakurgaon', 'division_id'=>'6'],       
//Start sylhet Division
           ['id'=> 57, 'district_name'=>' Sylhet', 'division_id'=>'7'],
           ['id'=> 58, 'district_name'=>'Molvibazar', 'division_id'=>'7'],         
           ['id'=> 59, 'district_name'=>'Sunamganj', 'division_id'=>'7'],
           ['id'=> 60, 'district_name'=>'Habiganj', 'division_id'=>'7'],
//Start Mymensing Division
           ['id'=> 61, 'district_name'=>' Mymensingh', 'division_id'=>'8'],
           ['id'=> 62, 'district_name'=>'Jamalpur', 'division_id'=>'8'],
           ['id'=> 63, 'district_name'=>'Netrokona', 'division_id'=>'8'],
           ['id'=> 64, 'district_name'=>'Sherpur', 'division_id'=>'8']
        
        ]);

            
            
    

    }
}
