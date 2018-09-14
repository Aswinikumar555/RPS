 <?php
$errors=array();

$db=mysqli_connect('localhost','root','aswin','student');//user
session_start();



	if (isset($_POST['login']))
	 {
	 	$username=$_POST['username'];
	 	$password=$_POST['password'];

	 	//echo $username;
		if(empty($username))
		{
		array_push($errors,'username is required');

		}
		if(empty($password))
		{
		array_push($errors,'password is required');

		}
		if (count($errors)==0)
		 {
			$query="SELECT * from admin where username='$username' AND password='$password'"; 
			$result=mysqli_query($db,$query);
			if (mysqli_num_rows($result)==1)
			 {
				$_SESSION['username']=$username;

//				$_SESSION['success']='you are logied in';
				header('location:indexin.php');
			 }
			else
			 {
			 	header('location:index.php');
			 }
		 }
	 }


	 if (isset($_GET['logout']))
	  {
	 	session_destroy();
	 	unset($_SESSION['username']);
	 	header('location:index.php');
	 }
?>