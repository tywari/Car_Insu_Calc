<?php
/**
 * Created by PhpStorm.
 * User: anuj
 * Date: 24/01/19
 * Time: 5:44 PM
 */

$input = $_POST;

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "insly_task";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $id_code = isset($_POST['id_code']) ? $_POST['id_code'] : null;
    $is_emp = isset($_POST['is_emp']) ? $_POST['is_emp'] : null;
    $birth_date = isset($_POST['b_date']) ? $_POST['b_date'] : null;
    $address = isset($_POST['address']) ? $_POST['address'] : null;
    $introduction_eng = isset($_POST['introduction_eng']) ? $_POST['introduction_eng'] : null;
    $introduction_french = isset($_POST['introduction_french']) ? $_POST['introduction_french'] : null;
    $introduction_spanish = isset($_POST['introduction_spanish']) ? $_POST['introduction_spanish'] : null;
    $experience_eng = isset($_POST['experience_eng']) ? $_POST['experience_eng'] : null;
    $experience_french = isset($_POST['experience_french']) ? $_POST['experience_french'] : null;
    $experience_spanish = isset($_POST['experience_spanish']) ? $_POST['experience_spanish'] : null;
    $education_eng = isset($_POST['education_eng']) ? $_POST['education_eng'] : null;
    $education_french = isset($_POST['education_french']) ? $_POST['education_french'] : null;
    $education_spanish = isset($_POST['education_spanish']) ? $_POST['education_spanish'] : null;

    $sql = "INSERT INTO user_info (name, birthdate, address,phone, email, id_code, is_emp, introduction_eng, introduction_french, introduction_spenish, experience_eng, experience_french, experience_spenish, education_eng, education_french, education_spenish) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$name, $birth_date, $address,$phone, $email ,$id_code, $is_emp, $introduction_eng,$introduction_french,$introduction_spanish,$experience_eng,$experience_french,$experience_spanish,$education_eng,$education_french,$education_spanish]);

    echo  "Record created";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

