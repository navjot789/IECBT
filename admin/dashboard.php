<?php
include "inc/header.php";
?>
<?php
// Check if the user is already logged in, if yes then redirect him to MYPROFILE page
if(!isset($_SESSION["admin"])){
   header("location: index.php");
   exit();
}
else
{
?>
<body >
<?php include "inc/navbar.php";?>
	<div class="container-fluid" style="max-width: 1200px;margin: 0 auto;">
	  		

  	<!-- Navbar -->
 <?php
  include "inc/sidebar.php";
  ?>
  <!-- End Navbar -->

		  		<div class="col-md-10 content">
		  			  <div class="panel panel-default">
						<div class="panel-heading">
							<?php echo  $icon.' '.$title;?>
						</div>
						
						<div class="panel-body">
							
							<?php
								
									include $content;
								

							?>

					</div>
			</div>
		</div>




<?php include "inc/footer.php";?>

  	</div>

<?php include "inc/jquery.php";?>

<script type="text/javascript"> 
$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
	

</script>

 </body>
     <?php
}?>