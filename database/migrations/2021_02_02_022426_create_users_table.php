<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			
			// People data
			$table->string('name', 100);
			$table->string('cpf', 20)->unique()->nullable();
			$table->char('gender', 1)->nullable();
			$table->date('birth')->nullable();
			$table->string('phone', 20);
			$table->text('notes')->nullable();

			// Auth data
			$table->string('email', 80)->unique();
			$table->string('password', 254)->nullable();

			// Permission
			$table->string('status')->default('active');
			$table->string('permission')->default('app.user');

			$table->rememberToken();

			$table->timestamps(); // created_at and updated_at
			$table->softDeletes(); // deleted_at
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table) {

		});

		Schema::drop('users');
	}
}
