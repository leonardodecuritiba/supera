<?php $DataAddress = $Data->address; ?>

<div class="row clearfix">
    <div class="col-sm-3">
        <div class="form-group form-float">
            <div class="form-line">
                {!! Html::decode(Form::label('zip', 'CEP', array('class' => 'control-label'))) !!}
                {{Form::text('zip', old('zip', (($DataAddress != null) ? $DataAddress->getFormatedZip() : '')), ['class'=>'form-control show-cep', 'multiple'])}}
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <p>
            <b>Estado</b>
        </p>
        {{Form::select('state_id', $PageResponse->auxiliar['states'], (($DataAddress != null) ? $DataAddress->state_id : ''), ['class'=>'form-control ','data-style'=>'btn btn-primary','data-live-search'=>'true','title'=>'UF'])}}
    </div>
    <div class="col-sm-6">
        <p>
            <b>Município</b>
        </p>
        {{Form::select('city_id', (($DataAddress != null) ? [$DataAddress->city_id => $DataAddress->city->name] : ''), (($DataAddress != null) ? $DataAddress->city_id : ''), ['class'=>'form-control ','data-style'=>'btn btn-primary','data-live-search'=>'true','title'=>'Cidade'])}}
    </div>
</div>
<div class="row clearfix">
    <div class="col-sm-4">
        <div class="form-group form-float">
            <div class="form-line">
                {!! Html::decode(Form::label('district', 'Bairro', array('class' => 'control-label'))) !!}
                {{Form::text('district', old('district', (($DataAddress != null) ? $DataAddress->district : '')), ['class'=>'form-control'])}}
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group form-float">
            <div class="form-line">
                {!! Html::decode(Form::label('street', 'Endereço', array('class' => 'control-label'))) !!}
                {{Form::text('street', old('street', (($DataAddress != null) ? $DataAddress->street : '')), ['class'=>'form-control'])}}
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group form-float">
            <div class="form-line">
                {!! Html::decode(Form::label('number', 'Número', array('class' => 'control-label'))) !!}
                {{Form::text('number', old('number', (($DataAddress != null) ? $DataAddress->number : '')), ['class'=>'form-control'])}}
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-group form-float">
            <div class="form-line">
                {!! Html::decode(Form::label('complement', 'Complemento', array('class' => 'control-label'))) !!}
                {{Form::text('complement', old('complement', (($DataAddress != null) ? $DataAddress->complement : '')), ['class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<button class="btn btn-primary waves-effect" disabled="" type="submit">Salvar</button>