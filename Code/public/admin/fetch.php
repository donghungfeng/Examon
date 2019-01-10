   <?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "examon");  
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT * FROM category WHERE id = '".$_POST["id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>