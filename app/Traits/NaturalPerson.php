<?php

namespace App\Traits;

use App\Helpers\DataHelper;

trait NaturalPerson {

	public function getCreatedAtAttribute( $value ) {
		return DataHelper::getPrettyDateTime( $value );
	}

	public function setBirthdayAttribute( $value ) {
		$this->attributes['birthday'] = DataHelper::setDate( $value );
	}

	public function getYears() {
		return DataHelper::getYears( $this->attributes['birthday'] );
	}

	public function setCpfAttribute( $value ) {
		return $this->attributes['cpf'] = DataHelper::getOnlyNumbers( $value );
	}

	public function getFormattedCpf() {
		return DataHelper::mask( $this->attributes['cpf'], '###.###.###-##' );
	}

	public function setRgAttribute( $value ) {
		return $this->attributes['rg'] = DataHelper::getOnlyNumbers( $value );
	}

	public function getFormattedRg() {
		return DataHelper::mask( $this->attributes['rg'], '#.###.###-##' );
	}

	public function getShortName() {
		return DataHelper::getShortName( $this->attributes['name'] );
	}

}