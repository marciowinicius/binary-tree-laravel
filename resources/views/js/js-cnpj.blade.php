<script type="text/javascript">
    $(document).ready(function () {
        function clear_form_cnpj() {
            $("#neighborhood").val("");
            $("#phone").val("");
            $("#email").val("");
            $("#socialname").val("");
            $("#fantasyname").val("");
            $("#zipcode").val("");
            $("#publicplace").val("");
            $("#complement").val("");
            $("#city").val("");
            $("#state").val("");
        }
        function sendAlert(msg) {
            $.confirm({
                useBootstrap: false,
                closeIcon: true,
                title: '<i class="material-icons">warning</i> Atenção ...',
                content: msg,
                type: 'blue',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Confirmar',
                        close: function(){
                        }
                    },
                }
            });
        }
        //Quando o campo cnpj
        $("#cnpj").blur(function () {
            clear_form_cnpj();
            var cnpj = $(this).val().replace(/[^\d]+/g,'');
            //Verifica se campo cnpj possui valor informado.
            if (cnpj != "") {
                //Expressão regular para validar o cnpj.
                var validacnpj = /^[0-9]{14}$/;
                //Valida o formato do cnpj.
                if (validacnpj.test(cnpj)) {
                    $("#neighborhood").val("...");
                    $("#phone").val("...");
                    $("#email").val("...");
                    $("#socialname").val("...");
                    $("#fantasyname").val("...");
                    $("#zipcode").val("...");
                    $("#publicplace").val("...");
                    $("#complement").val("...");
                    $("#city").val("...");
                    $("#state").val("...");
                    //Consulta o webservice /
                    $.getJSON("/utilities/query/cnpj/" + cnpj, function (dados) {
                        if (!(dados.status == "ERROR")) {
                            //Atualiza os campos com os valores da consulta.
                            $("#neighborhood").focus();
                            $("#neighborhood").val(dados.bairro);
                            $("#phone").focus();
                            $("#phone").val(dados.telefone);
                            $("#socialname").focus();
                            $("#socialname").val(dados.nome);
                            $("#fantasyname").focus();
                            $("#fantasyname").val(dados.fantasia);
                            $("#email").focus();
                            $("#email").val(dados.email);
                            $("#zipcode").focus();
                            $("#zipcode").val(dados.cep);
                            $("#publicplace").focus();
                            $("#publicplace").val(dados.logradouro);
                            $("#complement").focus();
                            $("#complement").val(dados.complemento);
                            $("#city").focus();
                            $("#city").val(dados.municipio);
                            $("#latitude").focus();
                            $("#latitude").val(dados.location[0]);
                            $("#longitude").focus();
                            $("#longitude").val(dados.location[1]);
                            /*Retirando acentos*/
                            var state = dados.uf;
                            state.replace(/[\\"]/, '');
                            $("#state").val(state).trigger('change');
                        } else {//end if.
                            //cnpj pesquisado não foi encontrado.
                            clear_form_cnpj();
                            sendAlert("CNPJ não encontrado, favor preencher os dados manualmente.");
                        }
                    });
                } else { //end if.
                    //cnpj é inválido.
                    clear_form_cnpj();
                    sendAlert("Formato de cnpj inválido.");
                }
            } else {//end if.
                //cnpj sem valor, limpa formulário.
                clear_form_cnpj();
            }
        });
    });
</script>