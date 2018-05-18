$(document).ready(function(){
    $('.datepicker').pickadate({
        // The title label to use for the month nav buttons
        labelMonthNext: 'Mês seguinte',
        labelMonthPrev: 'Mês anterior',
        // The title label to use for the dropdown selectors
        labelMonthSelect: 'Selecione um mês',
        labelYearSelect: 'Selecione um ano',
        // Months and weekdays
        monthsFull: [ 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro' ],
        monthsShort: [ 'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez' ],
        weekdaysFull: [ 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado' ],
        weekdaysShort: [ 'Dom', 'Seg', 'Terc', 'Quart', 'Quint', 'Sex', 'Sab' ],
        // Materialize modified
        weekdaysLetter: [ 'D', 'S', 'T', 'Q', 'Q', 'S', 'S' ],
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Ok',
        format: 'dd/mm/yyyy',
        closeOnSelect: false // Close upon selecting a date,
    });

    $('input.autocomplete').autocomplete({
        data: {
            "Apple": null,
            "Microsoft": null,
            "Google": 'assets/images/google.png'
        }
    });
});