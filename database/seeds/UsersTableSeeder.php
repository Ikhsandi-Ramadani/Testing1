<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Ikhsandi Ramadani',
                'email' => 'sandi@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$w8fHgz0oLwj6y6vWl4uJV.LX48OSMkFdpr6vlZL4Gisc3rK.Y6t7a',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-12-12 17:07:40',
                'updated_at' => '2020-12-12 17:37:37',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FeaLcwR6tXQ99yfQFu.zkO3w4gxmC8GndTF2jEMItlNkHKv1zOpv2',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2020-12-12 17:39:25',
                'updated_at' => '2020-12-12 17:39:25',
            ),
        ));
        
        
    }
}