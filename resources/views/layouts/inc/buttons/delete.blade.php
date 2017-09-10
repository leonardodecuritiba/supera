<button data-href="{{route($PageResponse->route.'.destroy', $sel->id)}}"
        class="btn btn-simple btn-xs btn-danger btn-icon"
        onclick="showDeleteTableMessage(this)"
        data-entity="{{$PageResponse->name.': '.$sel->getShortName()}}"
        data-placement="top"
        rel="tooltip"
        data-original-title="Remover"><i
            class="material-icons">close</i></button>