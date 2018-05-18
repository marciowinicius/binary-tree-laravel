<script type="text/javascript">
    $(function () {
        $.drawTable = function() {
            oTable = $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('binaryDatatable')}}',
                stateSave: false,
                lengthMenu: [[25], [25]],
                columns: [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'email'},
                    {data: 'points'},
                    {data: 'nivel'},
                ]
            });
        };

        $.drawTable();
    });

    /*Função para desativar */
    function disable(id) {
        $.confirm({
            useBootstrap: false,
            closeIcon: true,
            title: '<i class="material-icons">warning</i> Atenção ...',
            content: 'Tem certeza que deseja excluir o produto selecionado ?',
            type: 'blue',
            typeAnimated: true,
            buttons: {
                tryAgain: {
                    text: 'Confirmar',
                    action: function () {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('input[name="csrf-token"]').attr('value')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: '{{url('/product/disable')}}/' + id,
                            success: function (s)
                            {
                                if (s == 'success') {
                                    Materialize.toast('Produto excluído com sucesso.', 7000);
                                    oTable.destroy();
                                    $.drawTable();
                                } else {
                                    Materialize.toast('Problemas ao excluir produto', 7000);
                                }
                            },
                            error: function (e)
                            {
                                if (e == 'success') {
                                    Materialize.toast('Produto excluído com sucesso.', 7000);
                                    oTable.destroy();
                                    $.drawTable();
                                } else {
                                    Materialize.toast('Problemas ao excluir produto', 7000);
                                }
                            }
                        });
                    }
                }
            }
        });
    }
</script>