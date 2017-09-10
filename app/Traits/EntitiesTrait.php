<?php

namespace App\Traits;

use App\Helpers\DataHelper;

trait EntitiesTrait {
	public function getCellphoneAttribute( $value ) {
		return DataHelper::mask( $value, '(##) #####-####' );
	}

	public function getCommercialPhoneAttribute( $value ) {
		return DataHelper::mask( $value, '(##) ####-####' );
	}

	public function setCellphoneAttribute( $value ) {
		return $this->attributes['cellphone'] = DataHelper::getOnlyNumbers( $value );
	}

	public function setCommercialPhoneAttribute( $value ) {
		return $this->attributes['commercial_phone'] = DataHelper::getOnlyNumbers( $value );
	}

	public function getCreatedAtAttribute( $value ) {
		return DataHelper::getPrettyDateTime( $value );
	}

	public function setCnpjAttribute( $value ) {
		return $this->attributes['cnpj'] = DataHelper::getOnlyNumbers( $value );
	}

	public function getFormattedCnpj() {
		return DataHelper::mask( $this->attributes['cnpj'], '##.###.###/####-##' );
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

	public function setIeAttribute( $value ) {
		return $this->attributes['ie'] = DataHelper::getOnlyNumbers( $value );
	}

	public function getFormattedIe() {
		return DataHelper::mask( $this->attributes['ie'], '###.###.###.###' );
	}

	public function getFormattedIm() {
		return $this->attributes['im'];
	}
}