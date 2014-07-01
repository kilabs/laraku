<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Arie Prasetyo',
			'username' => 'vanbungkring',
			'email'    => 'prasetyo.mailbox@gmail.com',
			'level'		 => 1,
			'password' => Hash::make('merdeka123'),
		));
	}

}
