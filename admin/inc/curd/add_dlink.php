<?php
//var_dump($_POST);
include('../../../include/connect.php');

	 //var_dump($_POST);
	
	 $pcode = mysqli_real_escape_string($dbc,$_POST['pcode']);
	 $url = mysqli_real_escape_string($dbc,$_POST['url']);
	
//smtp


	if(isset($pcode,$url))
	{
		if(preg_match( '/^(http|https):\\/\\/[a-z0-9_]+([\\-\\.]{1}[a-z_0-9]+)*\\.[_a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i' ,$url))
		{
		   
			$stmt = $dbc->prepare("SELECT did FROM dlinks where d_link = ?");
		    $stmt->bind_param("s", $url);
		    $stmt->execute();
			$stmt->store_result();
			
			if ($stmt->num_rows <= 0 ) 
			{
				 $stmt = $dbc->prepare("INSERT INTO dlinks(p_code, d_link, cdate) VALUES (?, ?, ?)");
			 	 $stmt->bind_param("sss", $pcode, $url, $date);

				if($stmt->execute())
				{
				 echo 'recevied';
				}else{
					 echo 'ERROR';
				}


			}else
			{
			   echo 'URL Exist!'; //record already inserted
			}



		}
		 else {
		     echo 'Invalid URL. Try http:// | https://'; 
		}

	
	

	}else{
	 header('location:../../dashboard.php');
		exit();
	}

	

	
	
	

	
?>