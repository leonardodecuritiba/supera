<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'phones', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->unsignedInteger( 'contact_id' )->nullable();
			$table->foreign( 'contact_id' )->references( 'id' )->on( 'contacts' )->onDelete( 'cascade' );
			$table->unsignedInteger( 'phonetype_id' )->nullable();
			$table->foreign( 'phonetype_id' )->references( 'id' )->on( 'phone_types' )->onDelete( 'cascade' );
			$table->string( 'number', 20 );
			$table->boolean( 'cellphone' )->default( 0 );
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
		Schema::dropIfExists( 'phones' );
	}
}
