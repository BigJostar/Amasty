jQuery(document).ready(function($) {
    $('.load').click(function(e, ) {
        e.preventDefault();
        let amount = $('input[name="Amount"]').val();
        $.ajax({
            url: 'php/index.php',
            type: 'POST',
            datatype: 'json',
            data: {
                amount: amount,

            },
            success(data) {
                if (amount % 5 != 0) {
                    $('.typeError').text(data);
                } else {
                    $('.typeError').text('');
                    data = JSON.parse(data);
                    for (let i = 0; i < 5; i++) {
                        if (typeof data[i] == "undefined") {
                            data[i] = 0;
                        }

                    }
                    $(".end").append("<table> <tr>Номинал</tr><-------------><tr>Количество</tr></table>");
                    $(".end").append("<table> <tr>5</tr><-------------><tr>" + data[0] + "</tr></table>");
                    $(".end").append("<table> <tr>10</tr><-------------><tr>" + data[1] + "</tr></table>");
                    $(".end").append("<table> <tr>20</tr><-------------><tr>" + data[2] + "</tr></table>");
                    $(".end").append("<table> <tr>50</tr><-------------><tr>" + data[3] + "</tr></table>");
                    $(".end").append("<table> <tr>100</tr><-------------><tr>" + data[4] + "</tr></table>");
                    $('.load').click(function() {
                        location.reload();
                    });
                }

            }
        });
    });
});