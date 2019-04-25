<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<script type="text/javascript" src="asset/css/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding-top:100px;">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>NATIVE PHP-CRUD</h1>
		</div>
	</div>
	<div class="row" style="padding-top: 50px;">
	    <div class="col-md-4">
	        <h4 class="mb-3">User Data</h4>
	        <form class="needs-validation" novalidate method="POST" action="">
		        <div class="row">
		          <div class="col-md-6 mb-3">
		            <label for="firstName">First name</label>
		            <input type="text" class="form-control" name="fname" id="firstName" placeholder="" value="" required>
		            <div class="invalid-feedback">
		              Valid first name is required.
		            </div>
		          </div>
		          <div class="col-md-6 mb-3">
		            <label for="lastName">Last name</label>
		            <input type="text" class="form-control" name="lname" id="lastName" placeholder="" value="" required>
		            <div class="invalid-feedback">
		              Valid last name is required.
		            </div>
		          </div>
		        </div>

		        <div class="mb-3">
		          <label for="username">Username</label>
		          <div class="input-group">
		            <div class="input-group-prepend">
		              <span class="input-group-text">@</span>
		            </div>
		            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
		            <div class="invalid-feedback" style="width: 100%;">
		              Your username is required.
		            </div>
		          </div>
		        </div>

		        <div class="mb-3">
		        	<input type="submit" name="add" class="btn btn-success">
		        </div>
	    	</form>
	    </div>
	    <div class="col-md-8">
	    	<table class="table">
	    		<tr>
	    			<th>Full Name</th>
	    			<th>User Name</th>
	    			<th>Email</th>
	    			<th>Action</th>
	    		</tr>
	    		<tbody>
	    			<?php 
	    				$servername = "localhost";
						$username = "root";
						$password = "";
	    			    $conn = mysqli_connect($servername, $username, $password);
	    			    mysqli_select_db($conn,'crud-php_db');
	    				$select = 'SELECT * from Users';
	    				$query = mysqli_query($conn, $select);
	    				while($rows = mysqli_fetch_array($query))
	    				{
	    					echo '<tr><td>'. $rows['fname'].'</td>
	    							  <td>'. $rows['lname'].'</td>
	    							  <td>'. $rows['username'].'</td>
	    							  <td><button class="btn btn-success">Update</button> <button class="btn btn-danger">Delete</button></td>
	    						 </tr>';
	    				}
	    			 ?>
	    		</tbody>
	    	</table>
	    </div>
    </div>
</div>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Select Database Name
mysqli_select_db($conn,'crud-php_db');
	if(isset($_POST['add']))
	{
		//Declare Variable
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$uname = $_POST['username'];
		   //Insert Query
			$insert = "INSERT INTO Users(fname, lname, username) VALUES('$fname', '$lname', '$uname')";
			if(mysqli_query($conn, $insert)){
				echo "<script>alert('You have succesfully Added!')</script>";
			}else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

			mysqli_close($conn);

		
	}
	
?>




