<?php
     include('connection.php');
     if(isset($_POST['token']) && password_verify("signuptoken",$_POST['token']))
     {
     	$firstname = $_POST['firstname'];
     	$lastname = $_POST['lastname'];
     	$email = $_POST['email'];
     	$contactnum = $_POST['contactnum'];
     	$gender = $_POST['gender'];
          $password = $_POST['password'];
          $cpassword = $_POST['cpassword'];

     	if($firstname!="" && $lastname!="" && $email!="" && $contactnum!="" && $gender!="" && $password!="" )
     	{
     		$query = $db->prepare("insert into signup(firstname,lastname,email,contactnum,gender,password) values (?,?,?,?,?,?)");
     		$data = array($firstname, $lastname, $email, $contactnum, $gender, password_hash($password,PASSWORD_DEFAULT));
     		$execute = $query->execute($data);
     		if($execute)
     		{
     			echo "user created sucessfully";
     		}
     		else{
     			echo "something went wrong";
     		}
     	}
     }
     else
     {
     	echo "server error";
     }
?>