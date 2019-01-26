<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Policy Calculator</title>
<link href="../css/main.css" rel="stylesheet">
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
    <div class="container" id="form_div">
        <h2>Calculate</h2>
        <form action="#" method="post" role="form" name="calculate_form" id="calculate_form">
           Enter Estimated value of the car (in Euro):<br>
            <input type="text" name="car_value" placeholder="Ex. 1000" id="car_value">
            <br><br>
            Tax percentage:<br>
            <input type="text" name="tax" id="tax" placeholder="ex. 1-100%">
            <br><br>
            Number of Installment:<br>
            <input type="text" name="tenure" id="tenure" placeholder="ex. 1-12">
            <br><br>
            <button type="button" id="cal_button" name="cal_button">Calculate</button>
        </form>
    </div>
    <div id="data_table" style="display: none">
        <hr style="margin: 20px 0;">
        <table style="width:100%">
            <caption>Result</caption>
            <tr id="table-head">
                <th>#</th>
                <th>Policy</th>
            </tr>
            <tr id="value">
                <td>Value</td>
            </tr>
            <tr id="bp">
                <td id="bp_value">Base Premium</td>
            </tr>
            <tr id="com">
                <td>Commission (17%)</td>
            </tr>
            <tr id="total_tax">
                <td id="tax_value">Tax (10%)</td>
            </tr>
            <tr id="total">
                <td><b>Total Cost</b></td>
            </tr>
            <button type="button" onclick='window.location.reload();'>Calculate Again</button>
        </table>
    </div>
    <div class="fixed-footer">
        <div class="container">Made by Anuj Tiwari</div>
    </div>
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script type="application/javascript" src="../js/main.js"></script>
</body>
</html>