<?php

namespace App\Http\Controllers\Configs;

use App\Http\Controllers\Controller;
use App\Models\Configs\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller {

	protected $entity = "brands";
	protected $sex = "F";
	protected $name = "Marca";
	protected $names = "Marcas";
	protected $route = "brands";
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
		$this->PageResponse->response   = Brand::all();

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
	 * @param  \App\Models\Configs\Brand $brands
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( Brand $brands ) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Configs\Brand $brand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Brand $brand ) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \App\Models\Configs\Brand $brand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, Brand $brand ) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Configs\Brand $brand
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( Brand $brand ) {
		//
	}
}
