<?php 
require 'php/config.php'; ?>
<!DOCTYPE html>

<html>
  <head>
    <title>BiblioITEHa</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="style.css">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	

</head>

  <body id="main_bod">
  <?php
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
      ?>
       <div class="login">
         <br><br><br><br><br><br><br>
      <h2 style='color: #fff';>Dobro došli <?php echo $_SESSION['username'] ?> !</h2>
    </div>
    <br>  
<?php
}
else{
        ?>
	<div class="container">
		<div class="home">
      <br><br><br><br>
      <br><br><br><br>
      <br><br><br><br>
      
			<h1><a href="index2.php">Početna <span class="glyphicon glyphicon-home"></span></a></h1>
		</div>
		<div class="login">
		  <h3><a href="Ulaz/index.php">Log in <span class="glyphicon glyphicon-log-in"></span></a></h3>
		</div>
	
	
	</div>
    <br>
    <?php

	
	 
}
?>
	
<?php
  if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  	if($_SESSION['status']=='Admin'){
      ?>
      <div class="home">
    <h1 ><a href="index3.php">Admin panel <span class="glyphicon glyphicon-wrench"></span></a></h1>
  </div>
  	
       
<?php
}
}

?>
  



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  </body>
</html>
