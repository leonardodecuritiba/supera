<thead>
<tr>
    <th>#</th>
    <th>Cadastro</th>
    <th>Descrição</th>
    <th>Ação</th>
</tr>
</thead>
<tfoot>
<tr>
    <th>#</th>
    <th>Cadastro</th>
    <th>Descrição</th>
    <th>Ação</th>
</tr>
</tfoot>

<tbody>
@forelse ($PageResponse->response as $sel)
    <tr>
        <td>{{ $sel->id }}</td>
        <td>{{ $sel->created_at }}</td>
        <td>{{ $sel->description }}</td>

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
               data-placement="top" rel="tooltip" title="" data-original-title="Remover"><i
                        class="material-icons">close</i></a>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4" class="text-center">
            <h6>{{$PageResponse->page_noresults}}</h6>
        </td>
    </tr>
@endforelse
</tbody>