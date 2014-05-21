<?php 
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(
        	array(
        		'email' => 'jan@ontelstudio.com',
        		'username' => 'admin',
        		'password' => Hash::make('123456'),
        		'status' => 1
        	)
        );
    }

}