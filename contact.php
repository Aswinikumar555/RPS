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

<?php
$servername = "localhost";
$username = "root";
$password = "aswin";
$dbname = "student";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$id=$_POST['id'];

 if(preg_match("#^N(.*)$#i", $id)==true)
  {
		$email=$_POST['email'];
		$message=$_POST['message'];

		$sql = "INSERT INTO `student`.`contact` (`id`, `email`, `message`, `status`) VALUES ('$id','$email','$message','Not Solved')";
		//INSERT INTO marks (id, sub1, sub2, sub3, sub4, sub5) VALUES ($id,$sub1,$sub2,$sub3,$sub4,$sub5)
		if ($conn->query($sql) === TRUE) {
		   
		   ?>
		   <a href="index.php"> <i class="fa fa-arrow-circle-left" style="font-size: 50px;margin-left: 20px;margin-top: 20px;"></i></a>
		                <CENTER>
		                    
		                    <big><i class="fa fa-check" style="font-size:400px;"></i></big><br>
		                    <hn style="font-size:40px;">Success</hn>
		                
		                </CENTER>

		<?php
		}

		 else 
		{
		   ?>
		    <a href="update.php"> <i class="fa fa-arrow-circle-left" style="font-size: 50px;margin-left: 20px;margin-top: 20px;"></i></a>
                <CENTER>
                    <big><i class="glyphicon glyphicon-remove" style="font-size:300px;"></i></big><br>
                    <hn style="font-size:30px;">Not A Valid ID</hn>
                </CENTER>
          	<?php
		}
	}
	else
	{

		?>
		    <a href="update.php"> <i class="fa fa-arrow-circle-left" style="font-size: 50px;margin-left: 20px;margin-top: 20px;"></i></a>
                <CENTER>
                    <big><i class="glyphicon glyphicon-remove" style="font-size:300px;"></i></big><br>
                    <hn style="font-size:30px;">Not A Valid ID</hn>
                </CENTER>
          	<?php

	}

$conn->close();
?>
