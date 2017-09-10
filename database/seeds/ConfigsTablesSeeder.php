<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \App\Models\Configs\Kinship;
use \App\Models\Configs\Brand;
use \App\Models\Configs\PhoneType;

class ConfigsTablesSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//php artisan db:seed --class=ConfigsTablesSeeder

//        Ceps
		$this->call( CepTablesSeed::class );
		$this->command->info( 'CepTablesSeed complete ...' );

		$data = array(
			[ 'description' => 'Pai' ],
			[ 'description' => 'Mãe' ],
			[ 'description' => 'Padrasto' ],
			[ 'description' => 'Madrasta' ],
			[ 'description' => 'Filho (a)' ],
			[ 'description' => 'Enteado (a)' ],
			[ 'description' => 'Cunhado (a)' ],
			[ 'description' => 'Irmão' ],
			[ 'description' => 'Irmã' ],
			[ 'description' => 'Primo (a)' ],
			[ 'description' => 'Tio (a)' ],
			[ 'description' => 'Sobrinho (a)' ],
			[ 'description' => 'Avô (ó)' ],
			[ 'description' => 'Neto (a)' ],
			[ 'description' => 'Tio-avô' ],
			[ 'description' => 'Tia-avó' ],
			[ 'description' => 'Bisavô (ó)' ],
			[ 'description' => 'Bisneto (a)' ],
			[ 'description' => 'Sogro (a)' ],
			[ 'description' => 'Genro' ],
			[ 'description' => 'Nora' ],
			[ 'description' => 'Cônjuge' ],
		);
		foreach ( $data as $dt ) {
			Kinship::create( $dt );
		}
		$this->command->info( 'Kinships complete ...' );

		$data = array(
			[ 'description' => 'Melita' ],
			[ 'description' => 'Caboclo' ],
			[ 'description' => 'Damasco' ],
		);
		foreach ( $data as $dt ) {
			Brand::create( $dt );
		}
		$this->command->info( 'Brands complete ...' );

		DB::unprepared( DB::raw( file_get_contents( storage_path( 'imports' ) . DIRECTORY_SEPARATOR . 'units.sql' ) ) );
		$this->command->info( 'Units complete ...' );


		$data = array(
			[ 'description' => 'Residencial' ],
			[ 'description' => 'Comercial' ],
			[ 'description' => 'Vizinho' ],
		);
		foreach ( $data as $dt ) {
			PhoneType::create( $dt );
		}
		$this->command->info( 'PhoneTypes complete ...' );


	}
}
