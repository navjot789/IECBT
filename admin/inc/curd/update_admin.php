<?php
//var_dump($_POST);
include('../../../include/connect.php');

	 $uname = mysqli_real_escape_string($dbc,$_POST['username']);
	 $pwd = mysqli_real_escape_string($dbc,$_POST['password']);


	if(isset($uname) && $uname!=='')
	{
		$sql="update admin_login set username='$uname'";
		if($dbc->query($sql))
		{
		 echo 'success';
		}
	}else{
	 header('location:../../dashboard.php');
		exit();
	}

	if(isset($pwd) && $pwd!=='')
	{
		$sql="update admin_login set password='$pwd', encrypt_type='TXT'";
		if($dbc->query($sql))
		{
		 echo 'success';
			
		}
	}else
	{
	 header('location:../../dashboard.php');
		exit();
	}


	
	

	
?>