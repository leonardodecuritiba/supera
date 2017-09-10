<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'patients', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->unsignedInteger( 'contact_id' )->nullable();
			$table->foreign( 'contact_id' )->references( 'id' )->on( 'contacts' )->onDelete( 'cascade' );
			$table->unsignedInteger( 'address_id' )->nullable();
			$table->foreign( 'address_id' )->references( 'id' )->on( 'addresses' )->onDelete( 'cascade' );
			$table->string( 'name', 100 );
			$table->string( 'cpf', 11 );
			$table->string( 'rg', 10 );
			$table->boolean( 'sex' )->default( 0 );
			$table->date( 'birthday' );
			$table->timestamps();
			$table->softDeletes();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'patients' );
	}
}
