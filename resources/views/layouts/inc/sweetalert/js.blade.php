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