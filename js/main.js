$(document).ready(function () {

    $("#calculate_form").validate({
        rules: {
            car_value: {
                required: true,
            },
            tax: {
                required: true
            },
            tenure: {
                required: true
            }
        },
        messages: {
            cal_value: {
                required: 'please enter Car Value',
            },
            tax: {
                required: 'please enter Tax Percentage'
            },
            tenure: {
                required: 'please enter Tenure'
            }
        }
    });

    $(document).on('click', '#cal_button', function (e) {
        e.preventDefault();
        var serializeData = $('form').serialize();

        if ($("#calculate_form").valid()) {
            $.ajax({
                type: 'POST',
                url: 'calculate.php',
                data: serializeData,
                success: function (response) {
                    if (response) {
                        $("#data_table").css("display", "block");
                        $("#form_div").css("display", "none");
                        var obj = $.parseJSON(response);
                        $("#bp_value").html('Base Premium (' + obj.base_policy_per + '% )');
                        $("#tax_value").html('Tax (' + obj.tax_per + '% )');
                        $("#value").append('<td>' + obj.car_value + '</td>');
                        $("#bp").append('<td>' + obj.base_policy + '</td>');
                        $("#com").append('<td>' + obj.commission + '</td>');
                        $("#total_tax").append('<td>' + obj.total_tax + '</td>');
                        $("#total").append('<td>' + obj.total + '</td>');

                        $.each(obj.base_policy_inst, function (i, item) {
                            $("#table-head").append('<th>' + (++i) + ' Installment </th>')
                            $("#bp").append('<td>' + item + '</td>');
                            $("#value").append('<td> </td>');
                        });
                        $.each(obj.commission_inst, function (i, item) {
                            $("#com").append('<td>' + item + '</td>');
                        });
                        $.each(obj.tax_inst, function (i, item) {
                            $("#total_tax").append('<td>' + item + '</td>');

                        });
                        $.each(obj.total_inst, function (i, item) {
                            $("#total").append('<td>' + item + '</td>');
                        });
                    } else {
                        alert('Something went wrong');
                    }
                }
            })
        }

    });


    $("#emp_form").validate({
        rules: {
            name: {
                required: true,
            },
            is_emp: {
                required: true
            },
            b_date: {
                required: true
            }
        },
        messages: {
            name: {
                required: 'please enter Name',
            },
            is_emp: {
                required: 'please select one'
            },
            b_date: {
                required: 'please enter birth date'
            }
        }
    });

    $(document).on('click', '#emp_button', function (e) {
        e.preventDefault();
        var serializeData = $('form').serialize();

        if ($("#emp_form").valid()) {
            $.ajax({
                type: 'POST',
                url: 'data.php',
                data: serializeData,
                success: function (response) {
                    alert(response);
                    window.location.reload();
                }
            })
        }

    });

});
