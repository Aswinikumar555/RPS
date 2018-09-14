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

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        

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

$mailSub="Monthly Test Result";

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail=new PHPMailer();
$mail ->IsSmtp();
$mail ->SMTPDebug=0;
$mail ->SMTPAuth=true;
$mail ->SMTPSecure='ssl';//tls
$mail ->Host="smtp.gmail.com";
$mail ->Port=465;//587;
$mail ->IsHTML(true);
$mail ->Username="departmentofcsiiitn@gmail.com";
$mail ->Password="cse03@sf10";
$mail ->SetFrom("departmentofcsiiitn@gmail.com");
$mail ->Subject=$mailSub;
$mail ->isHTML(true);


$sql = "SELECT * FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
        $mailto=$row["mail"];
        $mar = "SELECT * FROM marks where id='".$row["id"]."'";//".$row["id"]."
        $a=$conn->query($mar);
		$f=$a->fetch_assoc();
        $mailMSG='<div style="border: 3px solid black;width: 90%">
			<div style="width:100%;">
					<center>
					<hg colspan="2" style="text-shadow: 1px 0.7px 0.8px;font-size: 22px;">Rajiv Gandhi University of Knowledge Technologies-IIIT Nuzvid</hg>
					</center>
			</div>
				
			<table style="border: 1px solid black;width: 100%;font-size: 20px;font-weight: 100px; background-color:#efeded; font-style: bold; font-family: Arial, Helvetica, sans-serif;">
				
				<tr>
					<td style="width: 150px;">Student IDNO:</td>
					<td>'.$row["id"].'</td>
				</tr>
				<tr>
					<td>Student Name:</td>
					<td>'.$row["name"].'</td>
				</tr>
				<tr>
					<td>Year & Sem:</td>
					<td>'.$row["year"].'</td>
				</tr>
			</table>
			

			<table border="1px solid black" style="width:100%;border-collapse: collapse;font-size:20px;background-color: #c7d5ed;">
					<tr style="text-align: center;">
						<th>Subject</th> 
						<th>Code</th> 
						<th>Marks</th>
					</tr>
					<tr>
						<td>Cyber Security</td>
						<td style="text-align: center;">099</td> 
						<td style="text-align: center;">'.$f["sub1"].'</td>
					</tr>
					<tr >
						<td>NLP</td>
						<td style="text-align: center;">099</td>
						<td style="text-align: center;">'.$f["sub2"].'</td>
					</tr>
					<tr>
						<td>Data Mining</td>
						<td style="text-align: center;">099</td> 
						<td style="text-align: center;">'.$f["sub3"].'</td>
					</tr>
					<tr>
						<td>Bioinformatics</td>
						<td style="text-align: center;">099</td> 
						<td style="text-align: center;">'.$f["sub4"].'</td>
					</tr>
					<tr >
						<td>Compiler Design</td>
						<td style="text-align: center;">099</td>
						<td style="text-align: center;">'.$f["sub5"].'</td>
					</tr>
		</table>
		<h8>Any Problem Contact +91 9133620559</h8>
	</div>';
		$mail ->Body=$mailMSG;
		$mail ->AddAddress($mailto);
		$mail->Send();
		$mail->ClearAllRecipients();
    }
} 
else 
{
    echo "0 results";

    /*<table><tr>
        					<td>".$f["sub1"]."</td>
        					<td>".$f["sub2"]."</td>
        					<td>".$f["sub3"]."</td>
        				</tr>
        				<tr>
        					<td>".$f["sub4"]."</td>
        					<td>".$f["sub5"]."</td>
        				</tr>
        			</table>*/
}?>
<a href="indexin.php"> <i class="fa fa-arrow-circle-left" style="font-size: 50px;margin-left: 20px;margin-top: 20px;"></i></a>
	<CENTER>
		
		<big><i class="fa fa-check" style="font-size:400px;"></i></big><br>
		<hn style="font-size:40px;">Send</hn>
	
	</CENTER>
?>
</body>