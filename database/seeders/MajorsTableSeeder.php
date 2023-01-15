<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('majors')->delete();

        DB::table('majors')->insert(array(
            0 =>
            array(
                'id' => 1,
                'major' => 'Teknik Informatika',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 2,
                'major' => 'Teknik Sipil',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 3,
                'major' => 'Teknik Pertambangan',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 4,
                'major' => 'Arsitektur',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 5,
                'major' => 'Kedokteran',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 6,
                'major' => 'Ekonomi',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array(
                'id' => 7,
                'major' => 'Administrasi',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 =>
            array(
                'id' => 8,
                'major' => 'Pertanian',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 =>
            array(
                'id' => 9,
                'major' => 'Hukum',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 =>
            array(
                'id' => 10,
                'major' => 'Biologi',
                'level' => 'S1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
