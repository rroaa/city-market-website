<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
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

</head>
<body style="background-color: #EBEBEB;">

	<!-- header --> 

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
	<!-- end header --> 
	
	<div class="limiter">
		<div class="container-login100"  style="margin-top=-20px;">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
				<span class="login100-form-title p-b-32">
						Choose Operation:
					</span>
				
				<label for="cars">Operation on:</label>
				
				<input type="radio" name="catg" id="Item" onclick="options()"> Item </input> 
				<input type="radio" name="catg" id="Supplier" onclick="options()"> Supplier </input> 
				<script>
					function options(){
						if (document.getElementById('Item').checked) {
							document.getElementById('a').value ='Insert Item';
							document.getElementById('b').value ='Update Item';
							// document.getElementById('c').value ='Delete Item';
							document.getElementById('d').value ='View Items';

							document.getElementById('ops').style.visibility = 'visible';
						}
						if (document.getElementById('Supplier').checked  ) {
							document.getElementById('a').value ='Insert Supplier';
							document.getElementById('b').value ='Update Supplier';
							// document.getElementById('c').value ='Delete Supplier';
							document.getElementById('d').value ='View Suppliers';

							document.getElementById('ops').style.visibility = 'visible';
						}
				
					}
				</script> 
				
				<div id="ops"style="visibility:hidden">
					    <input type="button" id="a" value="Insert" class="login100-form-btn"  style=" margin-left: 120px; margin-top: 30px;" onclick="insertFunc()" /> 
					    <input type="button" id="b" value="Update" class="login100-form-btn"  style=" margin-left: 120px; margin-top: 30px;" onclick="updateFunc()" />
						<!-- <input type="button" id="c" value="Delete" class="login100-form-btn"  style=" margin-left: 120px; margin-top: 30px;" onclick="deleteFunc()"/> --> 
						<input type="button" id="d" value="View" class="login100-form-btn"    style=" margin-left: 120px; margin-top: 30px;"  onclick="viewFunc()"/>
						</div>
						
						<script>
							function insertFunc(){
								if (document.getElementById('Item').checked){
									location.href = 'Insert_Item.php';
								}

								if (document.getElementById('Supplier').checked){
									location.href = 'Insert_Supp.php';
								}
							}

							function updateFunc(){
								if (document.getElementById('Item').checked){
									location.href = 'Update_Item.php';
								}

								if (document.getElementById('Supplier').checked){
									location.href = 'Update_Supp.php';
								}
							}
							

							function viewFunc(){
								if (document.getElementById('Item').checked){
									location.href = 'View_Item.php';
								}

								if (document.getElementById('Supplier').checked){
									location.href = 'View_Supp.php';
								}
							}


						</script> 
				</form>
			</div>
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