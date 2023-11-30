<?php  

$con=mysqli_connect('localhost','root','','sql');

$username=$_POST['name'];
$password=$_POST['pass'];

$query = mysqli_query($con,"INSERT INTO `ajax_form`(`username`, `password`) VALUES('{$username}','{$password}')");

if ($query) 
		{
			// code...
			echo "insert successful";

		}else
		{
			echo "something wrong";
		}

?>
