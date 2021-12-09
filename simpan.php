<?php
$fname =$_POST['fname'];
$lname= $_POST['lname'];


$myfile = fopen("new.txt","a") or die("Unable to open file!");
$txt ="$fname\t";
fwrite($myfile,$txt);
$txt ="$lname";
fwrite($myfile,$txt);
fclose($myfile);
header('location:index.php');