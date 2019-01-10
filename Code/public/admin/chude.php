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
 			$query = "SELECT * FROM category ORDER BY id DESC";  
 			$result = mysqli_query($connect, $query); 
 			
			?>
		</div>

		<div class="container" style="width:700px;">  
                
                <div class="">  
                     <div class="row text-right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning">Add</button>  
                     </div>  
                     <br />  
                     <div class=" panel-heading">
                       Danh sách câu hỏi
                     </div>
                     <div class=" panel-body">
                       <div id="employee_table">  
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="70%">ID</th>  
                                    <th width="15%">Name</th>  
                                    <th width="15%">Description</th> 
                                    <th>Sửa</th> 
                                    <th>Xóa</th>
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["id"]; ?></td>  
                                     <td><?php echo $row["name"]; ?></td> 
                                      <td><?php echo $row["description"]; ?></td> 
                                    <td><input type="button" name="edit" value="Sửa" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><a href="del_category.php?id=<?php echo $row['id']; ?>"  >Xóa</a></td>  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div> 
                     </div>
                      
                </div>  
           </div>  
      </body>  
 </html>  
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  
 <div id="add_data_Modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-body">  
                     <form method="post" id="">  
                     	<label>ID</label>  
                          <input type="text" name="id" id="id" class="form-control" />  
                          <br />  
                          <label>Name</label>  
                          <input type="text" name="name" id="name" class="form-control" />  
                          <br />  
                          <label>Desciption</label>  
                          <textarea name="description" id="description" class="form-control"></textarea>  
                          <br />  
                          
                         
                          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />  
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
 <?php 
if (isset($_POST['insert'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description=$_POST['description'];
        $sql = "Insert into category value ('".$id."','".$name."','".$description."')";
        $query = @mysqli_query($connect,$sql);
      }
  ?>  
 <script>  
 $(document).ready(function(){  

      $(document).on('click', '.edit_data', function(){  
           var id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"json",  
                success:function(data){  
                     
                     $('#id').val(data.id);  
                     $('#name').val(data.name);  
                     $('#description').val(data.description);  

                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      
     
 });  
 </script>

</html>
