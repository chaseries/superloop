<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table
				->string('fName')
				->nullable()
				->default(null);

			$table
				->string('sName')
				->nullable()
				->default(null);

			$table
				->string('email')
				->nullable()
				->default(null);

			$table
				->string('password')
				->nullable()
				->default(null);				

			$table
				->string('gender')
				->nullable()
				->default(null);

			$table
				->smallInteger('day')
				->nullable()
				->default(null);

			$table
				->smallInteger('month')
				->nullable()
				->default(null);

			$table
				->smallInteger('year')
				->nullable()
				->default(null);

			$table
				->string('city')
				->nullable()
				->default(null);

			$table
				->string('province')
				->nullable()
				->default(null);

			$table
				->string('country')
				->nullable()
				->default(null);

			$table
				->string('workplace')
				->nullable()
				->default(null);

			$table
				->string('educationInstitution')
				->nullable()
				->default(null);

			$table
				->string('educationSubject')
				->nullable()
				->defaul(null);

			$table
				->string('educationYear')
				->nullable()
				->default(null);

			$table
				->text('aboutGeneral')
				->nullable()
				->default(null);

			$table
				->text('aboutQuotes')
				->nullable()
				->default(null);

			$table
				->smallInteger('aboutRelationshipStatus')
				->nullable()
				->default(null);

			$table
				->dateTime('created_at')
				->nullable()
				->default(null);

			$table
				->dateTime('updated_at')
				->nullable()
				->default(null);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}