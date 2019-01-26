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
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM user_info ORDER BY created_at DESC limit 1");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $st = $conn->prepare("SELECT * FROM user_info ORDER BY updated_at DESC limit 1");
    $st->execute();
    $r =  $st->fetchAll(PDO::FETCH_ASSOC);

    $data = [
        'last_created' => $result,
        'last_updated' => $r
     ];

    print_r(json_encode($data));die;

}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

