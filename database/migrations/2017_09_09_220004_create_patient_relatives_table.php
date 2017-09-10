<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientRelativesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'patient_relatives', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->unsignedInteger( 'patient_id' );
			$table->foreign( 'patient_id' )->references( 'id' )->on( 'patients' )->onDelete( 'cascade' );
			$table->unsignedInteger( 'relative_id' );
			$table->foreign( 'relative_id' )->references( 'id' )->on( 'relatives' )->onDelete( 'cascade' );
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'patient_relatives' );
	}
}
