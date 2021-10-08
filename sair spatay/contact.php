<?php
$con = mysqli_connect('localhost','root','','sair spatay');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$notes=$_POST['notes'];
$insertquery="INSERT INTO `contact`(`Name`, `Email`, `subject`, `notes`) VALUES
('$name','$email','$subject','$notes')";
$data=mysqli_query($con,$insertquery);
header("Location: try.php");
}

?>