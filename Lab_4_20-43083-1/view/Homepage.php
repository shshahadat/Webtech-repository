<?php 
    session_start();
    if($_SESSION['authenticated']!= "true" ){
        header("Location: login.php");
        exit;
    }
?>
<html>

<head>
	<title>Homepage</title>
	<style>
		nav{

			background-color: Black;
  			overflow: hidden;
			align: center;
		}
		nav a {
			float: left;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
			font-family: sans-serif, Helvetica, Arial;
		}

		nav a:hover {
			background-color: MintCream;
			color: black;
		}
		
	</style>
</head>
<body>

<nav>
	<a href="adminHome.php">Home</a>
   
    
  
</nav>

<h1>Welcome to the Homepage</h1>
<!-- s -->

</body>
</html>






