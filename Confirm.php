<?php
include_once 'db_connect.php';
include_once 'hospital_search.php';
$bed=$_POST['bed_no'];
$mail=$_POST['email'];
$cost=$_POST['approximate_cost_per_bed_per_day'];
$query1 = "UPDATE covid_icu SET availability = 'booked' WHERE email = '$mail' AND bed_no='$bed' AND approximate_cost_per_bed_per_day='$cost'";
$result1=mysqli_query($conn,$query1);
     $query2 = "UPDATE general_icu SET availability = 'booked' WHERE email = '$mail' AND bed_no='$bed' AND approximate_cost_per_bed_per_day='$cost'";
     $result2=mysqli_query($conn,$query2);
     //echo "You have booked a bed number "+$row['bed_no'] +" of " +$row['hospital_name'] +","+$row['district'];
?>