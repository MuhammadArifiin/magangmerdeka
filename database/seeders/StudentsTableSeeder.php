<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('students')->delete();

        DB::table('students')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nim' => '123456',
                'name' => 'Muhammad Arifin',
                'email' => 'muhammadarifin2052@gmail.com',
                'phone' => '085245858372',
                'address' => 'Palangka Raya',
                'semester' => 'VIII',
                'entry_year' => '2019',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            1 =>
            array(
                'id' => 2,
                'nim' => '123457',
                'name' => 'Rico',
                'email' => 'Rico@gmail.com',
                'phone' => '08123456781',
                'address' => 'Banjarmasin',
                'semester' => 'V',
                'entry_year' => '2017',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            2 =>
            array(
                'id' => 3,
                'nim' => '123458',
                'name' => 'Kevin',
                'email' => 'kevin@gmail.com',
                'phone' => '08123456782',
                'address' => 'Jogjakarta',
                'semester' => 'VII',
                'entry_year' => '2019',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            3 =>
            array(
                'id' => 4,
                'nim' => '123459',
                'name' => 'Leo',
                'email' => 'leo@gmail.com',
                'phone' => '08123456783',
                'address' => 'Palangka Raya',
                'semester' => 'VIII',
                'entry_year' => '2019',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            4 =>
            array(
                'id' => 5,
                'nim' => '123460',
                'name' => 'Ruka',
                'email' => 'ruka@gmail.com',
                'phone' => '08123456784',
                'address' => 'Palangka Raya',
                'semester' => 'VII',
                'entry_year' => '2019',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            5 =>
            array(
                'id' => 6,
                'nim' => '123461',
                'name' => 'King',
                'email' => 'king@gmail.com',
                'phone' => '08123456785',
                'address' => 'Palangka Raya',
                'semester' => 'VIII',
                'entry_year' => '2019',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            6 =>
            array(
                'id' => 7,
                'nim' => '123462',
                'name' => 'Aulie',
                'email' => 'aulie@gmail.com',
                'phone' => '08123456786',
                'address' => 'Bandung',
                'semester' => 'VI',
                'entry_year' => '2020',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            7 =>
            array(
                'id' => 8,
                'nim' => '123463',
                'name' => 'Viona',
                'email' => 'viona@gmail.com',
                'phone' => '08123456787',
                'address' => 'Palangka Raya',
                'semester' => 'VIII',
                'entry_year' => '2019',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            8 =>
            array(
                'id' => 9,
                'nim' => '123464',
                'name' => 'Luca',
                'email' => 'luca@gmail.com',
                'phone' => '08123456788',
                'address' => 'Palangka Raya',
                'semester' => 'VIII',
                'entry_year' => '2019',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
            9 =>
            array(
                'id' => 10,
                'nim' => '123465',
                'name' => 'Lili',
                'email' => 'lili@gmail.com',
                'phone' => '08123456789',
                'address' => 'Palangka Raya',
                'semester' => 'VIII',
                'entry_year' => '2019',
                'major_id' => 1,
                'kelas_id' => 1,
                'created_at' => NULL,
                'updated_at' => '2023-01-14 12:48:46',
            ),
        ));
        
        
    }
}