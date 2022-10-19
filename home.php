<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
  <h1>Welcom Admin </h1>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form-wrapper"> 
    <center><h3>contact us : <?php echo $row['name']; ?> </h3></center>
	 <div class="reminder">
    <p><a href="1.html">click here to contact us </a></p>
  </div>
</div>

</body>
</html>
