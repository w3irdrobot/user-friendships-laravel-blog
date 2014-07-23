<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		User::create(array(
			'email' => 'alexwsears@gmail.com',
			'first_name' => 'Alex',
			'last_name' => 'Sears',
			'password' => Hash::make('alexsears')
		));

		User::create(array(
			'email' => 'george@foreman.com',
			'first_name' => 'George',
			'last_name' => 'Foreman',
			'password' => Hash::make('georgeforeman')
		));

		User::create(array(
			'email' => 'tony@thetiger.com',
			'first_name' => 'Tony',
			'last_name' => 'Tiger',
			'password' => Hash::make('tonytiger')
		));

		User::create(array(
			'email' => 'fred@flintstone.com',
			'first_name' => 'Fred',
			'last_name' => 'Flintstone',
			'password' => Hash::make('fredflintstone')
		));
	}

}
