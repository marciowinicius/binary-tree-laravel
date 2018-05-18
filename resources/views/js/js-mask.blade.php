<script type="text/javascript">
    $(document).ready(function () {
        $('#cpf').mask('000.000.000-00');
        $('#time_end').mask('00:00:00');
        $('#time_start').mask('00:00:00');
        $('#cnpj').mask('00.000.000/0000-00');
        $("#phone").mask("(99)9999-9999");
        $(".phone_cell_phone").mask("(99)99999-9999");
        $("#phone2").mask("(99)99999-9999");
        $(".tel").mask("(99)99999-9999");
        $('.price').mask('000.000.000.000.000,00', {reverse: true});
        $("#birthdate").mask("00/00/0000");
        $("#birth").mask("00/00/0000");
        $("#date_start").mask("00/00/0000");
        $("#date_end").mask("00/00/0000");
        $("#date").mask("00/00/0000");
        $("#zipcode").mask("00000-000");
        $("#latitude").mask("-00.0000000");
        $("#longitude").mask("-00.0000000");
        // $("#phone").on("blur", function () {
        //     var last = $(this).val().substr($(this).val().indexOf("-") + 1);
        //     if (last.length == 3) {
        //         var move = $(this).val().substr($(this).val().indexOf("-") - 1, 1);
        //         var lastfour = move + last;
        //         var first = $(this).val().substr(0, 9);
        //         $(this).val(first + '-' + lastfour);
        //     }
        // });
        // $("#tel").on("blur", function () {
        //     var last = $(this).val().substr($(this).val().indexOf("-") + 1);
        //     if (last.length == 3) {
        //         var move = $(this).val().substr($(this).val().indexOf("-") - 1, 1);
        //         var lastfour = move + last;
        //         var first = $(this).val().substr(0, 9);
        //         $(this).val(first + '-' + lastfour);
        //     }
        // });
        $('#state').keyup(function(){
            this.value = this.value.replace(/[^a-zA-Z.]/g,'');
            this.value = this.value.toUpperCase();
        });
    });
</script>