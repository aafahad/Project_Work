<?php
$ID = $_POST['ID'];
$fullName = $_POST['fullName'];
$email= $_POST['email'];
$gender = $_POST['gender'];
$hobby = $_POST['hobby'];
$cities=$_POST['cities'];
$comment = $_POST['comment'];
$created=$_POST['created'];
$modified = $_POST['modified'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "users");
$query = "INSERT INTO `project`.`users` (
`ID` ,
`fullName` ,
`email` ,
`password` ,
`gender` ,
`hobby` ,
`cities` ,
`comment` ,
`created` ,
`modified`
)
VALUES (
'$ID' , '$fullName', '$email', '$gender', '$hobby', '$cities', '$comment', NOW( ) , NOW( )
)";
mysqli_query($link, $query);
header('location:dashboard.php');
?>