<div class="row clearfix">
    <div class="col-sm-9">
        <div class="form-group form-float">
            <div class="form-line">
                {{Form::text('name', old('name',$Data->name), ['id'=>'name','class'=>'form-control','minlength'=>'3', 'maxlength'=>'100', 'required'])}}
                {!! Html::decode(Form::label('name', 'Nome *', array('class' => 'form-label'))) !!}
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <input name="sex" type="radio" class="with-gap" value="0" @if(isset($Data) && !$Data->sex) checked
               @endif id="female"/>
        <label for="female">Feminino</label>
        <input name="sex" type="radio" class="with-gap" value="1" @if(isset($Data) && $Data->sex) checked
               @endif id="male"/>
        <label for="male">Masculino</label>
    </div>

</div>
<div class="row clearfix">
    <div class="col-sm-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{Form::text('name', old('cpf',$Data->getFormattedCpf()), ['id'=>'cpf','class'=>'form-control show-cpf','minlength'=>'3', 'maxlength'=>'20', 'required'])}}
                {!! Html::decode(Form::label('cpf', 'CPF *', array('class' => 'form-label'))) !!}
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{Form::text('name', old('rg',$Data->getFormattedRg()), ['id'=>'rg','class'=>'form-control show-rg','minlength'=>'3', 'maxlength'=>'20', 'required'])}}
                {!! Html::decode(Form::label('rg', 'RG *', array('class' => 'form-label'))) !!}
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group form-float">
            <div class="form-line">
                {{Form::text('birthday', old('birthday',$Data->getFormattedBirthday()), ['id'=>'birthday','class'=>'form-control show-date'])}}
                {!! Html::decode(Form::label('birthday', 'Data de Nascimento', array('class' => 'form-label'))) !!}
            </div>
        </div>
    </div>
</div>
<button class="btn btn-primary waves-effect" disabled="" type="submit">Salvar</button>