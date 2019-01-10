<?php 
$connect = mysqli_connect("localhost", "root", "", "examon");
echo $_GET["id"];
 			$query = "DELETE FROM category WHERE id ='".$_GET['id']."'";  
 			$result = @mysqli_query($connect, $query); 
 			header('Location:chude.php');
 ?>