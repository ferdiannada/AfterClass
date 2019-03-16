<!DOCTYPE html>
<html lang="en">
<head>
	<title>framework</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.min" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
	/* Header/Logo Title */


	* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
	.footer {
		padding: 10px;
	   	position: fixed;
	   	width: 100%;
	   	background-color: red;
	   	color: white;
	   	text-align: center;
	}
	</style>
</head>
<body>
	<div class="header" style="padding: 10px; text-align: center; background:#1abc9c;color: white;
	  	font-size: 30px; ">
		<h1>Header</h1>
	</div>
	<div class="container">
		<div class="row">
		  	<div class="column" style="background-color:#aaa;">
    			<h2>Column 1</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  			</div>
  			<div class="column" style="background-color:#bbb;">
    			<h2>Column 2</h2>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  			</div>
		</div>
    </div>
    <div class="footer">
		 <p>Footer</p>
	</div>
</body>
</html>