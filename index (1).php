<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<style type="text/css">
		*{
			margin:0px;
			padding: 0px;
			box-sizing: border-box;
		}
		.form{
			width:100%;
			height:100vh;
			background-color: whitesmoke;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.submit{
			padding:10px 30px;
			font-size: 20px;
			background-color: aliceblue;
			border: 1px solid blue;
			border-radius: 5px ;
		}
	</style>
</head>
<body>
	<form action = "./register.php" method = "post" enctype="multipart/form-data" class = "form">
		<input type="Submit" name="submit" value = "Let's Go" class = "submit">		
	</form>
</body>
</html>