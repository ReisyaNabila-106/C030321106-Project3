<?php
namespace Database\Seeders; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
class UserSeeder extends Seeder
{ 
    /** 
     * Run the database seeds. 
     * 
     * @return void 
     */
    public function run() 
    { 
    DB::table('users')->insert([ 
    'name' => 'Reisya Nabila', 
    'email' => 'reisyanbailaa1@gmail.com', 
    'password' => Hash::make('c030321106@Mhs'), 
    ]); 
    } 
}
