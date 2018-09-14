<?php 
require 'server.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>gmail send</title>

	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        


        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <link rel="stylesheet" href="assets/css/style1.css">

        <link rel="stylesheet" href="assets/css/responsive.css" />
     </head>

	<style type="text/css">
	input {
    border: 5px solid white; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
}
		
</style>
</head>
<?php if (isset($_SESSION['username'])){ ?>
		<body>
			<a href="indexin.php"> <i class="fa fa-arrow-circle-left" style="font-size: 50px;margin-left: 20px;margin-top: 20px;"></i></a>
			<center>
				<div style="width: 500px;height: 590px;border: 1px solid black;margin-top: 0px;background-image: url('u.jpg');">
					<form method="post" action="slave1.php">
						<h4 style="font-size:40px;color: white;text-shadow: 1px 0.7px #000000;margin-top: 10px">Update Marks</h4>
						<input required style="margin-top: 20px;width: 200px;height: 20px;" type="text" name="idno" placeholder="Enter Your IDNO" maxlength="7"><br><Br>
						<input required  style="width: 200px;height: 20px; " type="number" name="sub1" placeholder="Enter subject 1 marks" min="0" max="20"><br><br>
						<input required style="width: 200px;height: 20px; " type="number" type="number" name="sub2" placeholder="Enter subject 1 marks" min="0" max="20"><br><br>
						<input required style="width: 200px;height: 20px; " type="number" type="number" name="sub3" placeholder="Enter subject 1 marks" min="0" max="20"><br><br>
						<input required style="width: 200px;height: 20px; " type="number" type="number" name="sub4" placeholder="Enter subject 1 marks" min="0" max="20"><br><br>
						<input required style="width: 200px;height: 20px; " type="number" type="number" name="sub5" placeholder="Enter subject 1 marks" min="0" max="20"><br><br>
						<input class="btn btn-default" type="submit" name="enter">
					</form>
		</div>
		</center>
		</body>
<?php 
}
else
{
	header('location:index.php');
}
?>
</html>