@extends('layouts.app')

@section('title', $PageResponse->page_title)

{{--@section('route', route('cliente'))--}}

@section('style_content')

    <!-- Select Plugin Js -->
    {{Html::style('bower_components/adminbsb-materialdesign/plugins/bootstrap-select/css/bootstrap-select.css')}}
    <!-- Bootstrap Tagsinput Css -->
    {{Html::style('bower_components/adminbsb-materialdesign/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}
    <style>
        .bootstrap-tagsinput .tag {
            font-size: 15px;
        }
    </style>
@endsection

@section('page_content')
    <div class="container-fluid">
        <div class="block-header">
            <h1>
                {{$Data->name}}
                <small>{{$Data->getYearsOld()}}</small>
            </h1>
        </div>
        <!-- Advanced Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Dados Pessoais</h2>
                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" method="POST">
                            @include('pages.patients.form.data')
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Dados de Endereço</h2>
                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" method="POST">
                            @include('pages.patients.form.address')
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Dados de Contato</h2>
                    </div>
                    <div class="body">
                        <form id="form_advanced_validation" method="POST">
                            @include('pages.patients.form.contact')
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Validation -->
    </div>
@endsection


@section('script_content')

    <!-- Select Plugin Js -->
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/bootstrap-select/js/bootstrap-select.js')}}

    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-validation/jquery.validate.js')}}

    <!-- Jquery Validation Plugin Css -->

    <script>

        var $demoMaskedInput = $('.demo-masked-input');

        $(document).ready(function () {
            $('#form_validation').validate({
                rules: {
                    'checkbox': {
                        required: true
                    },
                    'gender': {
                        required: true
                    }
                },
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                }
            });

            //Advanced Form Validation
            $('#form_advanced_validation').validate({
                rules: {
                    'date': {
                        customdate: true
                    },
                    'creditcard': {
                        creditcard: true
                    }
                },
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                }
            });

            //Custom Validations ===============================================================================
            //Date
            $.validator.addMethod('customdate', function (value, element) {
                    return value.match(/^\d\d\d\d?-\d\d?-\d\d$/);
                },
                'Please enter a date in the format YYYY-MM-DD.'
            );

            //Credit card
            $.validator.addMethod('creditcard', function (value, element) {
                    return value.match(/^\d\d\d\d?-\d\d\d\d?-\d\d\d\d?-\d\d\d\d$/);
                },
                'Please enter a credit card in the format XXXX-XXXX-XXXX-XXXX.'
            );
            //==================================================================================================
        });
    </script>

    {!! Html::script('bower_components/inputmask/dist/min/inputmask/inputmask.min.js') !!}
    {!! Html::script('bower_components/inputmask/dist/min/jquery.inputmask.bundle.min.js') !!}
    {{--PACIENTES--}}
    <script type="text/javascript">
        $(document).ready(function () {
            $('.show-cpf').inputmask({'mask': '999.999.999-99', 'removeMaskOnSubmit': true});
            $('.show-rg').inputmask({'mask': '99.999.999-9', 'removeMaskOnSubmit': true});
            $('.show-celular').inputmask({'mask': '(99) 99999-9999', 'removeMaskOnSubmit': true});
            $('.show-telefone').inputmask({'mask': '(99) 9999-9999', 'removeMaskOnSubmit': true});
            $('.show-cep').inputmask({'mask': '99999-999', 'removeMaskOnSubmit': true});
            $('.show-date').inputmask('dd/mm/yyyy', {placeholder: '__/__/____'});
//        $('.show-cnpj').inputmask({'mask': '99.999.999/9999-99', 'removeMaskOnSubmit': true});
//        $('.show-ie').inputmask({'mask': '999.999.999.999', 'removeMaskOnSubmit': true});
        });
    </script>
    {!! Html::script('bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js') !!}
    <script type="text/javascript">
        function initMaskMoneyValorReal(selector) {
            $(selector).maskMoney({
                prefix: 'R$ ',
                allowNegative: false,
                precision: 2,
                thousands: '.',
                decimal: ',',
                affixesStay: false
            });
        }

        $(document).ready(function () {
            initMaskMoneyValorReal($(".show-valor-real"));
        });

        function initMaskMoneyValorPercent(selector) {
            $(selector).maskMoney({
                suffix: ' %',
                allowNegative: false,
                allowZero: true,
                thousands: '.',
                decimal: ',',
                precision: 2,
                affixesStay: false
            });
        }

        $(document).ready(function () {
            initMaskMoneyValorPercent($(".show-valor-percent"));
        });
    </script>


    <!-- Bootstrap Tags Input Plugin Js -->
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}
    <script type="text/javascript">
        $(document).ready(function () {
            var input_emails = '#emails';
            $(input_emails).tagsinput({
                'height': '300px',
                'width': '300px',
                'interactive': true,
                'defaultText': 'Emails',
                'confirmKeys': [13, 44],
                'delimiter': [',', ';'],   // Or a string with a single delimiter. Ex: ';'
                'removeWithBackspace': true,
                'minChars': 0,
                'maxChars': 0, // if not provided there is no limit
            });
            $(input_emails).tagsinput('refresh');

                    @if(isset($Data))
            var values = JSON.parse('<?php echo $Data->contact->getEmailsEncode(); ?>');
            $.each(values, function (index, value) {
                $(input_emails).tagsinput('add', value);
            });
            @endif
        });
    </script>

@endsection