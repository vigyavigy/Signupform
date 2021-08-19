<?php
$servername = "localhost";
$username = "root";
$password = "";
// $lastname = "";
// $email = "";
// $cpassword = "";
// $contactnum = "";
// $gender = "";

    $db = new PDO("mysql:host=$servername;dbname=project", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>