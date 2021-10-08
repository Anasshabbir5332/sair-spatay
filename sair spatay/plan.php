<?php
$con = mysqli_connect('localhost','root','','sair spatay');

if(isset($_POST['submitt']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$adress=$_POST['adress'];
$cnumber=$_POST['cnumber'];
$location=$_POST['location'];
$person=$_POST['person'];
$children=$_POST['children'];
$room=$_POST['room'];
$dcity=$_POST['dcity'];
$date=$_POST['date'];
$day=$_POST['day'];
$insertquery="INSERT INTO `planmytrip`(`fname`, `lname`, `adress`, `cnumber`, `location`, `person`, `children`, `room`, `dcity`, `date`, `day`) VALUES
('$fname','$lname','$adress','$cnumber','$location','$person','$children','$room','$dcity','$date','$day')";
$data=mysqli_query($con,$insertquery);
header("Location: try.php");
}

?>