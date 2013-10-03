<?php

class UserTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		User::create(array(
			'fName'	        => 'Morgan',
			'sName'         => 'Ries',
			'email'         => 'chaseries@gmail.com',
			'password'      => Hash::make('root'),
			'gender'        => 'M',
			'day'           => 1,
			'month'         => 5,
			'year'          => 1990,
			'city'          => 'Columbus',
			'province'      => 'Ohio',
			'country'       => 'United States of America',
			'aboutGeneral'  => 'Don\'t even try.',
			'aboutQuotes'   => 'Tu deviens responsable pour toujours de ce que tu as apprivoisé.'
			));
	}
}