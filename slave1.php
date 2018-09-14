<html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RPS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        


        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <link rel="stylesheet" href="assets/css/style1.css">

        <link rel="stylesheet" href="assets/css/responsive.css" />
     </head>
    <body>

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
				$id=$_POST['idno'];
				
				$s="SELECT `id` WHERE `id`='$id'";
				if ($conn->query($s) === TRUE)
				{
					$sub1=$_POST['sub1'];
					$sub2=$_POST['sub2'];
					$sub3=$_POST['sub3'];
					$sub4=$_POST['sub4'];
					$sub5=$_POST['sub5'];
					$sql="UPDATE `marks` SET `sub1`='$sub1',`sub2`='$sub2',`sub3`='$sub3',`sub4`='$sub4',`sub5`='$sub5' WHERE `id`='$id'";
					//$sql = "INSERT INTO `student`.`marks` (`id`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES ('$id','$sub1','$sub2','$sub3','$sub4','$sub5')";
					//INSERT INTO marks (id, sub1, sub2, sub3, sub4, sub5) VALUES ($id,$sub1,$sub2,$sub3,$sub4,$sub5)

					if ($conn->query($sql) === TRUE) 
					{
						?>
							<a href="update.php"> <i class="fa fa-arrow-circle-left" style="font-size: 50px;margin-left: 20px;margin-top: 20px;"></i></a>
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
								<hn style="font-size:30px;">Something Went Wrong</hn>
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
							<hn style="font-size:30px;">Not A Valid Entry</hn>
						</CENTER>
					<?php
				}
				$conn->close();
				?>
</body>