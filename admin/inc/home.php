
 <div class="row" >

 	 <a href="dashboard.php?page=2">
	 	<div class="col-md-3">
	 		 <div class="notice notice-success">
		        <strong><i class="fas fa-download"></i>
		        	<?php 	$stmt = $dbc->prepare("SELECT did FROM dlinks");
	                        $stmt->execute();
	                        $stmt->store_result();    
	                     	 echo  $stmt->num_rows;
	                       	$stmt->close();

	       				?>

		        </strong>Total Download links</div>
	 	</div>
	 </a>

 <a href="dashboard.php?page=4">
 	<div class="col-md-3">
 		 <div class="notice notice-danger">
	        <strong><i class="fas fa-shopping-cart"></i>
			<?php 	$stmt = $dbc->prepare("SELECT tid FROM transaction");

                        $stmt->execute();
                        $stmt->store_result();    
                     	echo  $stmt->num_rows;
                       	$stmt->close();

       				?>
	        </strong>Total Transactions</div>
 	</div>
 </a>

	
