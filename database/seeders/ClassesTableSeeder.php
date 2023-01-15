<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('klasses')->delete();
        
        DB::table('klasses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'classroom' => 'A',
                'building' => 'A Tower',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'classroom' => 'B',
                'building' => 'B Tower',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'classroom' => 'C',
                'building' => 'C Tower',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'classroom' => 'D',
                'building' => 'D Tower',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}