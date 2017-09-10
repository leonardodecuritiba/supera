<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Models\Configs\Unit;
use Illuminate\Http\Request;

class UnitsController extends Controller {

	protected $entity = "units";
	protected $sex = "F";
	protected $name = "Unidade";
	protected $names = "Unidades";
	protected $route = "units";
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
		$this->PageResponse->response   = Unit::all();

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
	 * @param  \App\Unity $unity
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( Unity $unity ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Unity $unity
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Unity $unity ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Unity $unity
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, Unity $unity ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Unity $unity
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( Unity $unity ) {
		//
	}
}
