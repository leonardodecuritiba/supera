<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$start = microtime( true );
//		$this->call( ConfigsTablesSeeder::class );
		factory( \App\Models\Patients\Patient::class, 50 )->create();
		factory( \App\Models\Commons\Phone::class, 50 )->create();
		$this->command->info( 'DatabaseSeeder complete: in ' . round( ( microtime( true ) - $start ), 3 ) . 's ...' );

	}
}
