<?php

use Illuminate\Database\Seeder;

class StatesTablesSeed extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//php artisan db:seed --class=StatesTablesSeed
		set_time_limit( 3600 );
		$start    = microtime( true );
		$filename = 'states.csv';
		$this->command->info( "*** Iniciando o Upload (" . $filename . ") ***" );

		$file = storage_path( 'import' . DIRECTORY_SEPARATOR . $filename );
		$this->command->info( "*** Upload completo em " . round( ( microtime( true ) - $start ), 3 ) . "s ***" );

		$rows = Excel::load( $file, function ( $reader ) {
			$reader->toArray();
			$reader->noHeading();
		} )->get();
		foreach ( $rows as $row ) {
			$data = [
				'id'         => $row[0],
				'name'       => $row[1],
				'short_name' => $row[2],
			];
			\App\Models\Configs\CepStates::create( $data );
//		    $this->command->info( '****************** ('.$data['id'].') ******************' );
		}
		$this->command->info( "*** Importacao IMPORTSEEDER realizada com sucesso em " . round( ( microtime( true ) - $start ), 3 ) . "s ***" );

	}
}
