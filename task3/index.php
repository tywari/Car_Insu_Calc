<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Task</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="fixed-header">
    <div class="container">
        <nav>
            <a href="../task1/index.php">Task 1</a>
            <a href="../task2/index.php">Task 2</a>
            <a href="../task3/index.php">Task 3</a>
        </nav>
    </div>
</div>
<div class="container">
    <h2>EMPLOYEE FORM</h2>

    <form action="#" method="post" role="form" name="emp_form" id="emp_form">
        Please Enter Name: <br>
        <input type="text" name="name" placeholder="ex. Anuj Tiwari" id="name">
        <br><br>
        Birth Date:<br>
        <input type="text" name="b_date" id="b_date" placeholder="ex. 09/06/1994">
        <br><br>
        Enter Id code or SSN: <br>
        <input type="text" name="id_code" id="id_code" placeholder="ex. 01122323">
        <br><br>
        Is Current Emp: <br>
        <select name="is_emp" id="is_emp" data-placeholder="" required>
            <option value="" desabled>Select One</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <br><br>
        Enter Email: <br>
        <input type="email" name="email" id="email" placeholder="ex. anuj@gmail.com"><br><br>
        Enter Mobile: <br>
        <input type="text" name="phone" id="phone" placeholder="ex. 919967450482">
        <br><br>
        Enter Address: <br>
        <textarea rows="4" cols="50" name="address" id="address"></textarea>
        <br><br>
        Enter Introduction (English): <br>
        <textarea rows="4" cols="50" name="introduction_eng" id="introduction_eng"></textarea>
        <br><br>
        Enter Introduction (French): <br>
        <textarea rows="4" cols="50" name="introduction_french" id="introduction_french"></textarea>
        <br><br>
        Enter Introduction (Spanish): <br>
        <textarea rows="4" cols="50" name="introduction_spanish" id="introduction_spanish"></textarea>
        <br><br>
        Enter Experience (English) <br>
        <textarea rows="4" cols="50" name="experience_eng" id="experience_eng"></textarea>
        <br><br>
        Enter Experience (French) <br>
        <textarea rows="4" cols="50" name="experience_french" id="experience_french"></textarea>
        <br><br>
        Enter Experience Info (Spanish): <br>
        <textarea rows="4" cols="50" name="experience_spanish" id="experience_spanish"></textarea>
        <br><br>
        Enter Education (English): <br>
        <textarea rows="4" cols="50" name="education_eng" id="education_eng"></textarea>
        <br><br>
        Enter Education Info (French): <br>
        <textarea rows="4" cols="50" name="education_french" id="education_french"></textarea>
        <br><br>
        Enter Education Info (Spanish): <br>
        <textarea rows="4" cols="50" name="education_spanish" id="education_spanish"></textarea>
        <br><br>

        <button type="button" id="emp_button" name="emp_button">Submit</button>
    </form>
</div>
<div id="data_table">
    <hr style="margin: 20px 0;">
    <table style="width:100%" id="created_table">
        <caption>Last Created Data</caption>
        <tr id="table-head">
            <th>#</th>
            <th>Name</th>
            <th>Birth date</th>
            <th>Id Code</th>
            <th>Current Emp</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Introduction(English)</th>
            <th>Introduction(French)</th>
            <th>Introduction(Spanish)</th>
            <th>Experience(English)</th>
            <th>Experience(French)</th>
            <th>Experience(Spanish)</th>
            <th>Education(English)</th>
            <th>Education(French)</th>
            <th>Education(Spanish)</th>
        </tr>
    </table>
</div>

<div id="data_table">
    <hr style="margin: 20px 0;">
    <table style="width:100%" id="updated_table">
        <caption>Last Updated Data</caption>
        <tr id="table-head">
            <th>#</th>
            <th>Name</th>
            <th>Birth date</th>
            <th>Id Code</th>
            <th>Current Emp</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Introduction(English)</th>
            <th>Introduction(French)</th>
            <th>Introduction(Spanish)</th>
            <th>Experience(English)</th>
            <th>Experience(French)</th>
            <th>Experience(Spanish)</th>
            <th>Education(English)</th>
            <th>Education(French)</th>
            <th>Education(Spanish)</th>
        </tr>
    </table>
</div>
<div class="fixed-footer">
    <div class="container">Made by Anuj Tiwari</div>
</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="application/javascript" src="../js/main.js"></script>
<script>
    $(document).ready(function () {
        $.ajax({
            type: 'get',
            url: 'get_data.php',
            success: function (response) {
                var obj = $.parseJSON(response);

                $.each(obj.last_created, function (i, item) {
                    var emp = (item.is_emp == 1) ? "Yes" : "No";
                    var data = '<tr>' +
                        '<td>' + item.id + '</td>' +
                        '<td>' + item.name + '</td>' +
                        '<td>' + item.birthdate + '</td>' +
                        '<td>' + item.id_code + '</td>' +
                        '<td>' + emp + '</td>' +
                        '<td>' + item.email + '</td>' +
                        '<td>' + item.phone + '</td>' +
                        '<td>' + item.address + '</td>' +
                        '<td>' + item.introduction_eng + '</td>' +
                        '<td>' + item.introduction_french + '</td>' +
                        '<td>' + item.introduction_spenish + '</td>' +
                        '<td>' + item.experience_eng + '</td>' +
                        '<td>' + item.experience_french + '</td>' +
                        '<td>' + item.experience_spenish + '</td>' +
                        '<td>' + item.education_eng + '</td>' +
                        '<td>' + item.education_french + '</td>' +
                        '<td>' + item.education_spenish + '</td>' +
                        '</tr>';
                    $("#created_table").append(data);
                });

                $.each(obj.last_updated, function (i, item) {
                    var emp = (item.is_emp == 1) ? "Yes" : "No";
                    var data = '<tr>' +
                        '<td>' + item.id + '</td>' +
                        '<td>' + item.name + '</td>' +
                        '<td>' + item.birthdate + '</td>' +
                        '<td>' + item.id_code + '</td>' +
                        '<td>' + emp + '</td>' +
                        '<td>' + item.email + '</td>' +
                        '<td>' + item.phone + '</td>' +
                        '<td>' + item.address + '</td>' +
                        '<td>' + item.introduction_eng + '</td>' +
                        '<td>' + item.introduction_french + '</td>' +
                        '<td>' + item.introduction_spenish + '</td>' +
                        '<td>' + item.experience_eng + '</td>' +
                        '<td>' + item.experience_french + '</td>' +
                        '<td>' + item.experience_spenish + '</td>' +
                        '<td>' + item.education_eng + '</td>' +
                        '<td>' + item.education_french + '</td>' +
                        '<td>' + item.education_spenish + '</td>' +
                        '</tr>';
                    $("#updated_table").append(data);
                });

            }
        })
    });
</script>
</body>
</html>