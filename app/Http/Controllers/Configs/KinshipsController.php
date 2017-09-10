<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Models\Configs\Kinship;
use Illuminate\Http\Request;

class KinshipsController extends Controller {

	protected $entity = "kinships";
	protected $sex = "M";
	protected $name = "Parentesco";
	protected $names = "Parentescos";
	protected $route = "kinships";
	protected $main_folder = 'pages.configs';
	protected $PageResponse;


	public function __construct() {
		$this->PageResponse = (object) [
			'page_title'     => $this->names,
			'page_noresults' => 'Nenhum ' . $this->name . ' encontrado!',
			'main_title'     => '',
			'entity'         => $this->entity,

//			'table'       => $this->table,
			'route'          => $this->route,
//			'form'        => $this->form,
//			'list'        => $this->list,
			'main_folder'    => $this->main_folder,
			'name'           => $this->name,
			'names'          => $this->names,
			'sex'            => $this->sex,
			'response'       => array(),
			'auxiliar'       => array(),
			'tab'            => 'data',
		];
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$this->PageResponse->main_title = $this->names;
		$this->PageResponse->response   = Kinship::all();

		return view( $this->main_folder . '.index' )
			->with( 'PageResponse', $this->PageResponse );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Kinship $kinship
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( Kinship $kinship ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Kinship $kinship
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Kinship $kinship ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Kinship $kinship
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, Kinship $kinship ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Kinship $kinship
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( Kinship $kinship ) {
		//
	}
}
