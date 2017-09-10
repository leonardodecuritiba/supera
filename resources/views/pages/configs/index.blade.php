@extends('layouts.app')

@section('title', $PageResponse->page_title)

{{--@section('route', route('cliente'))--}}

@section('style_content')

    @include('layouts.inc.datatable.css')

    <!-- Sweetalert Css -->
    {{Html::style('bower_components/sweetalert2/dist/sweetalert2.min.css')}}
    {{Html::style('bower_components/emoji-css/_site/emoji.css')}}

@endsection

@section('page_content')
    <div class="container-fluid">

        <div class="block-header">
            <h2>
                {{$PageResponse->main_title}}
            </h2>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Listagem
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                @include('components.' . $PageResponse->entity . '.list')
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
@endsection


@section('script_content')

    <!-- Jquery DataTable Plugin Js -->
    @include('layouts.inc.datatable.js')

    <!-- SweetAlert Plugin Js -->
    {{Html::script('bower_components/sweetalert2/dist/sweetalert2.min.js')}}

    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <script>
        function showDeleteTableMessage($el) {
            var entity = $($el).data('entity');
            swal({
                title: "Você tem certeza?",
                text: "Esta ação será irreversível!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "<i class='em em-triumph'></i> Sim! ",
                cancelButtonText: "<i class='em em-cold_sweat'></i> Não, cancele por favor! ",
            }).then(function () {
                swal(
                    "<i class='em em-disappointed_relieved'></i>",
//                    "<i class='em em-disappointed_relieved'></i> Removido (a)!",
                    "<b>" + entity + "</b> removido (a) com sucesso!",
                    "success"
                )
                $_TABLE_
                    .row($($el).parents('tr'))
                    .remove()
                    .draw();
            }, function (dismiss) {
                if (dismiss === 'cancel') {
                    swal(
//                        "<i class='em em-heart_eyes'></i> Cancelado",
                        "<i class='em em-heart_eyes'></i>",
                        "Ufa, <b>" + entity + "</b> está a salvo :)",
                        "error"
                    )
                }
            });
        }
    </script>

@endsection