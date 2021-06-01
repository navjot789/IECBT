<?php
	include('../../../include/connect.php');

	$id = mysqli_real_escape_string($dbc,$_POST['del_link']);

	if(isset($id))
	{
		
			$stmt = $dbc->prepare("delete from dlinks where did = ?");
		    $stmt->bind_param("i", $id);
		    if($stmt->execute())
		    {
		    	header('location:../../dashboard.php?page=2');
				exit();
		    }


		
	}
	else
	{
		exit('BAD GATEWAY!');
	}


	?>