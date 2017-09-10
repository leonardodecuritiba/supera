<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelativesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'relatives', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->unsignedInteger( 'contact_id' )->nullable();
			$table->foreign( 'contact_id' )->references( 'id' )->on( 'contacts' )->onDelete( 'cascade' );
			$table->unsignedInteger( 'address_id' )->nullable();
			$table->foreign( 'address_id' )->references( 'id' )->on( 'addresses' )->onDelete( 'cascade' );
			$table->string( 'name', 100 );
			$table->string( 'cpf', 11 )->nullable();
			$table->string( 'rg', 10 )->nullable();
			$table->boolean( 'sex' )->default( 0 );
			$table->date( 'birthday' );
			$table->boolean( 'responsible' )->default( 0 );
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'relatives' );
	}
}
