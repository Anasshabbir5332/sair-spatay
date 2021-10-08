<?php
$con=mysqli_connect('localhost','root','','sair spatay');

$datashowquery="SELECT * FROM `car_one` ";
$data=mysqli_query($con,$datashowquery);
$count=mysqli_num_rows($data);
?>

<?php
while ($show=mysqli_fetch_assoc($data)) {

?>

<?php echo $show['title'] ?>
<br>
<?php echo $show['price'] ?> <br>
<?php echo $show['description'] ?>



<?php
}
?>
