jQuery(document).ready(function($) {
    $('.load').click(function(e, ) {
        e.preventDefault();
        let team = $('input[name="team"]').val();
        $.ajax({
            url: 'php/index.php',
            type: 'POST',
            datatype: 'json',
            data: {
                team: team,
            },
            success(data) {
                data = JSON.parse(data);
                for (let i = 0; i < data.length; i++) {
                    $('.table').append("<table> <tr>" + data[i] + "</tr></table>");

                }



            }
        });
    });
});