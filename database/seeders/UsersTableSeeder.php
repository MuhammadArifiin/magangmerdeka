<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->delete();
        
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'email' => 'arifin@mail.id',
                'email_verified_at' => NULL,
                'username' => 'twenxx',
                'password' => '$2y$10$R/OfYMqNbS7m1JsfAxGuveaad7Z7XlAc/3CyJC/K.HoIYQ6h0skKy',
                'remember_token' => NULL,
                'created_at' => '2023-01-14 08:42:09',
                'updated_at' => '2023-01-14 08:42:09',
            ),
        ));
        
        
    }
}