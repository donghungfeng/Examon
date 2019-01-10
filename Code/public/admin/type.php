<!doctype html>
<html lang="en">


<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/libs/css/style.css">
	<link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
	<link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
	<title>Đề thi</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>

<body>
	<div class="dashboard-main-wrapper" style="padding-top: 0px;">
		<?php
		include 'header.html'; 

		?>
		<div class="nav-left-sidebar sidebar-dark">
			<?php
			include 'leftmenu.html'; 
			$connect = mysqli_connect("localhost", "root", "", "examon");  
 			$query = "SELECT * FROM type_question ORDER BY id DESC";  
 			$result = mysqli_query($connect, $query); 
 			
			?>
		</div>

		<div class="container" style="width:700px;">  
                
                <div class="">  
                 
                     <div class=" panel-heading">
                       Danh sách loại câu hỏi
                     </div>
                     <div class=" panel-body">
                       <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">ID</th>  
                                    <th width="15%">Name</th>  
                                    <th width="15%">Description</th> 
                                    
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["id"]; ?></td>  
                                     <td><?php echo $row["name"]; ?></td> 
                                      <td><?php echo $row["description"]; }?></td> 
                                   
                               </tr>  
                              
                          </table>  
                     </div> 
                     </div>
                      
                </div>  
           </div>  
      </body>  
  
 
 

</html>
