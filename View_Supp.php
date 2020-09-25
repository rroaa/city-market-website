<?php
session_start();

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="City_Market";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT supplier_id , company_name,email, contact_no FROM suppliers";
$result=mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Suppliers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@500&display=swap" rel="stylesheet"> 

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 1000px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.fitwidth {
    width: 580px;
    white-space: nowrap;
}
body {
	background-color: #EBEBEB
	}

</style>
</head>
<body>
<div style="float:left; text-align:center; padding:15px;">
<a href="Main_Page.php">
	<h4> <i class="fa fa-home"></i><br> </h4>
   <h5> Home </h5> 
</a>
</div>

<div style="float:right; text-align:center; padding:15px;">
<a href="logout.php">
  <h4> <i class="fa fa-user"></i><br></h4>
  <h5> Logout </h5> 
</a>
</div>


<div style="float:center; font-family:'Grandstander', cursive; text-align:center; padding:20px;  margin-top:10px;">
  <h2>  City Market <h2>
</div>

<hr>
<div class="container-login100">
			<div class="wrap-login100 pr-56 p-l-35 p-t-55 p-b-55 " style="padding-right:600px;" >
			<span class="login100-form-title p-b-32 p-l-210" style="text-align:center">
					Suppliers
					</span>
					<table class="fitwidth"
					<thead>
						<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Contact No.</th>
						</tr>
						</thead>
						<tbody>
						<?php
						
						while( $row = mysqli_fetch_array( $result ) ){
							echo
							"<tr>
							<td>{$row['supplier_id']}</td>
							<td>{$row['company_name']}</td>
							<td>{$row['email']}</td>
							<td>{$row['contact_no']}</td>
							</tr>\n";
						}
						?>
					</tbody>
					</table>
					<?php mysqli_close($conn); ?>
			</div>
		</div>
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>