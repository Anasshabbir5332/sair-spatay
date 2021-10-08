<?php
$con = mysqli_connect('localhost','root','','sair spatay');

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$note=$_POST['note'];
$img=$_POST['img'];
$insertquery="INSERT INTO `feedback`(`name`, `note`, `img`) VALUES
('$name','$note','$img')";
$data=mysqli_query($con,$insertquery);
header("Location: try.php");
}

?>