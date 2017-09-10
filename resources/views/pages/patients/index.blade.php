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
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cadastro</th>
                                    <th>Nome</th>
                                    <th>RG</th>
                                    <th>CPF</th>
                                    <th>Idade</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Cadastro</th>
                                    <th>Nome</th>
                                    <th>RG</th>
                                    <th>CPF</th>
                                    <th>Idade</th>
                                    <th>Ação</th>
                                </tr>
                                </tfoot>

                                <tbody>
                                @forelse ($PageResponse->response as $sel)
                                    <tr>
                                        <td>{{ $sel->id }}</td>
                                        <td>{{ $sel->created_at }}</td>
                                        <td>{{ $sel->name }}</td>
                                        <td>{{ $sel->getFormattedRg() }}</td>
                                        <td>{{ $sel->getFormattedCpf() }}</td>
                                        <td>{{ $sel->getYears() }}</td>
                                        <td class="text-right">
                                            <a data-content="{{$sel}}"
                                               data-target='#modal-edit'
                                               data-toggle='modal'
                                               class="btn btn-simple btn-warning btn-xs btn-icon edit"
                                               data-placement="top"
                                               rel="tooltip"
                                               title=""
                                               data-original-title="Editar"><i
                                                        class="material-icons">dvr</i></a>
                                            @include('layouts.inc.buttons.delete')
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <h6>{{$PageResponse->page_noresults}}</h6>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
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

    <!-- Custom Js -->
    {{--{{Html::script('bower_components/adminbsb-materialdesign/js/admin.js')}}--}}

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