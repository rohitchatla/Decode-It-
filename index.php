<?php
include "db.php";	         
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DECODE IT!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="distyle.css">
</head>
<body>
	<div class="col-sm-2 col-md-4 col-lg-6 col-xl-12">
		
	<form action="acti.php" method="post">
		<h1>enter code</h1>
		<input type="text" name="give1" value="" placeholder="enter1" autocomplete="off">
		<input type="text" name="give2" value="" placeholder="enter2" autocomplete="off">
		<input type="text" name="give3" value="" placeholder="enter3" autocomplete="off">
		<input type="text" name="give4" value="" placeholder="enter4" autocomplete="off">
		<input type="submit" name="submit1" value="submit" placeholder="Submit">
			<input type="submit" name="submitt" value="submitt" placeholder="Submitt"><br><br>

			

   </form>
   <input type="submit" name="delete" value="delete" placeholder="Delete" autocomplete="off">

</div>
<br><br><br><br><br><br>
<div class="col-sm-2 col-md-4 col-lg-6 col-xl-12">
<form action="acti.php" method="post">
		<h1>Ready to decode</h1>
		<h2>V,I,B,G,Y,O,R</h2>
		<input type="text" name="give11" value="" placeholder="enter1" autocomplete="off">
		<input type="text" name="give22" value="" placeholder="enter2" autocomplete="off">
		<input type="text" name="give33" value="" placeholder="enter3" autocomplete="off">
		<input type="text" name="give44" value="" placeholder="enter4" autocomplete="off">
		<input type="submit" name="submit2" value="submit" placeholder="Submit" autocomplete="off">
   </form>

<a href="index.php" title="">HOME</a>
<br><br>
<?php
			if (isset($_SESSION['userUid'])) {
               echo '<form action="includes/logout.inc.php" method="post">
		 	   <button class="logout" type="submit" name="logout-submit">Logout</button>
           
              
		       </form>';

               }
            else{
    	         echo '<form class="login" action="includes/login.inc.php" method="post" autocomplete="off">
		         <input  type="text" name="mailuid" placeholder="Username/E-mail">
		         <input  type="password" name="pwd" placeholder="Password">
		         <button class="loginb" type="submit" name="login-submit">Login</button>
		         </form>';
		         }
		         
		         
		         
		         
            ?>


	</div>

</body>
</html>

if(isset($_POST['delete'])){
		         
echo "Hello";
		           $sql = "DELETE FROM `give` WHERE `give`.`id` = 14";

		           //$result=$conn->query($sql);
// $fire=mysqli_query($conn,$sql) or die("not".mysqli_error($conn));
// if($fire) echo "Data deleted";
// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . $conn->error;
// }
		if(mysqli_query($conn,$sql)){

			echo "Record Deleted";
		}else{
			echo "Error Unable to Delete Record";
		}     
}	