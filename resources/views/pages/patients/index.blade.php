@extends('layouts.app')

@section('title', $PageResponse->page_title)

{{--@section('route', route('cliente'))--}}

@section('style_content')

    {{Html::style('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}

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
                                            <a href="{{ route($PageResponse->route.'.destroy', $sel->id) }}"
                                               class="btn btn-simple btn-xs btn-danger btn-icon remove"
                                               data-placement="top" rel="tooltip" title=""
                                               data-original-title="Remover"><i
                                                        class="material-icons">close</i></a>
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
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/jquery.dataTables.js')}}
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/jszip.min.js')}}
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}
    {{Html::script('bower_components/adminbsb-materialdesign/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}


    <!-- Custom Js -->
    {{--{{Html::script('bower_components/adminbsb-materialdesign/js/admin.js')}}--}}
    {{Html::script('bower_components/adminbsb-materialdesign/js/pages/tables/jquery-datatable.js')}}

@endsection