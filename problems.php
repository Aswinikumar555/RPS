<?php 
require 'server.php';
?>

<!DOCTYPE html>
<?php if (isset($_SESSION['username']))
{ 
?>
<html>
<head>
  <title>Problems</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        


        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="assets/css/responsive.css" />
</head>
<body>

  <a href="indexin.php"> <i class="fa fa-arrow-circle-left" style="font-size: 50px;margin-left: 20px;margin-top: 20px;"></i></a>
  <center>
<div style="width: 90%;">
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
$mar = "SELECT * FROM contact";
$result = $conn->query($mar);
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SNO</th>
      <th scope="col">IDNO</th>
      <th scope="col">Email</th>
      <th scope="col">Problem</th>
      <th scope="col">Status</th>
      <th scope="col" style="text-align: center;">Change Status</th>
    </tr>
  </thead>
  <tbody>
<?php
$count=1;
if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc())
    {
      ?>
      <tr>
      <th scope="row"><?php echo $count ?></th>
      <td><?php echo $row["id"] ?></td>
      <td><?php echo $row["email"] ?></td>
      <td><?php echo $row["message"] ?></td>
      <td><a href="#"><?php echo $row["status"] ?></a></td>
      <td style="text-align: center;"><input type="button" name="Change" value="Change" class="btn-success" action=""></td>
      </tr>
      <?php
      $count++;
    }
}
?>
  </tbody>
</table>
</div>
</center>
</body>
</html>

<?php 
}
else
{
  header('location:index.php');
}
?>