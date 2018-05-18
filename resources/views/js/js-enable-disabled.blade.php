<script type="text/javascript">
    function enable() {
        $('input:disabled, select:disabled, option:disabled[value!=option_select], textarea:disabled').each(function () {
            $(this).removeAttr('disabled');
        });
        $('select').material_select();
        $('#save').prop('disabled', false);
        $('#address_to_withdraw').prop('disabled', true);
    }
</script>