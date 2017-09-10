<?php $DataContact = $Data->contact; ?>

<div class="row clearfix">
    <div class="col-sm-12">
        <div class="form-group demo-tagsinput-area">
            <div class="form-line">
                {!! Html::decode(Form::label('emails', 'Emails', array('class' => 'control-label'))) !!}
                {{Form::text('emails', old('emails'), ['id' => 'emails', 'class'=>'form-control'])}}
            </div>
        </div>
    </div>
</div>
<button class="btn btn-primary waves-effect" disabled="" type="submit">Salvar</button>