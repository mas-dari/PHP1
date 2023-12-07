<html>

<head>
    <meta charset="utf-8">
    <title>write</title>
</head>

</html>


<?php
$name = $_POST['name'] . "\n";
$dateOfBirth = $_POST['dateOfBirth'] . "\n";
$postalCode = $_POST['postalCode'] . "\n";
$address = $_POST['address'] . "\n";
$telephoneNumber = $_POST['telephoneNumber'] . "\n";
$email = $_POST['email'] . "\n";
$highSchool = $_POST['highSchool'] . "\n";
$university = $_POST['university'] . "\n";
$companyName = $_POST['companyName'] . "\n";
$companyName2 = $_POST['companyName2'] . "\n";
$companyName3 = $_POST['companyName3'] . "\n";
$time = date('Y-m-d H:i:s') . "\n";

file_put_contents('data/data.txt', 
$time 
. $name 
. $dateOfBirth
. $postalCode
. $address
. $telephoneNumber
. $email
. $highSchool
. $university
. $companyName
. $companyName2
. $companyName3
, FILE_APPEND);


?>