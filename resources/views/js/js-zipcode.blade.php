<script type="text/javascript">
    function selectByText(select, text) {
        $(select).find('option:contains("' + text + '")').prop('selected', true);
    }

    $(document).ready(function () {
        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#publicplace").val("");
            $("#neighborhood").val("");
            $("#city").val("");
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
        //Quando o campo cep perde o foco.
        $("#zipcode").blur(function () {
            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');
            //Verifica se campo cep possui valor informado.
            if (cep != "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                //Valida o formato do CEP.
                if (validacep.test(cep)) {
                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#publicplace").val("...");
                    $("#neighborhood").val("...");
                    $("#city").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#publicplace").focus();
                            $("#publicplace").val(dados.logradouro);
                            $("#neighborhood").focus();
                            $("#neighborhood").val(dados.bairro);
                            $("#city").focus();
                            $("#city").val(dados.localidade);
                            /*Retirando acentos*/
                            var state = dados.uf;
                            state.replace(/[\\"]/, '');
                            $("#state").val(state).trigger('change');
                        } else {//end if.
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            sendAlert("CEP não encontrado.");
                        }
                    });
                } else { //end if.
                    //cep é inválido.
                    limpa_formulário_cep();
                    sendAlert("Formato de CEP inválido.");
                }
            } else {//end if.
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
</script>