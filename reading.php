<?php include "include/connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Reading</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<style type="text/css">
	html, body {
		height: 100%;
	}

	.topheader {
		background: #555;
		color: #f1f1f1;
		z-index: 1;
		position: fixed;
		min-height: 47.200px;
	}

	.header {
		color: #f1f1f1;
		z-index: 2;
		position: fixed;
	}

	.sidepanel {
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		height: 100%;
		right: 0;
		background-color: #111;
		transition: 0.5s;
		padding-top: 60px;
		overflow-y: scroll;
	}


	.openbtn {
		cursor: pointer;
		color: white;
		border: none;
	}


	.feedback-open {
		position: fixed;
		right: 0;
		bottom: 90%;
		height: 25px;
		width: 40px;
		z-index: 1;
		background-color: #000;
		color: #FFF;
		border-bottom-left-radius: 4px;
		border-top-left-radius: 4px;
		border: 0.5px solid #8c8282;
	}

	.feedback-close {
		position: fixed;
		right: 0;
		bottom: 86%;
		height: 25px;
		width: 40px;
		z-index: 1;
		background-color: #000;
		color: #FFF;
		border-bottom-left-radius: 4px;
		border-top-left-radius: 4px;
		border: 0.5px solid #8c8282;
	}

	/*countdown css */
	#myBtn {
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		margin: 5px;
		padding: 8px 8px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 13px;
	}

	td {
		font: 100 1.5em/1em 'Luckiest Guy', cursive;    
		margin: 0;
		madding: 0;
		-webkit-text-stroke: 1px black;    
		color: white;    
		text-shadow:
		3px 3px 0 #000,
		-1px -1px 0 #000,  
		1px -1px 0 #000,
		-1px  1px 0 #000,
		1px  1px 0 #000;
	}

</style>
</head>
<body class="text-muted" style="background: #181a1b;"  >

	<div class="container-fluid">
		<div id="mySidepanel" class="sidepanel">

			<div class="feedback-open openbtn" onclick="openNav()">
				<span class="ml-2"> <a href="javascript:void(0)" ><i class="fas fa-edit text-success" ></i></a></span>
			</div>

			<div class="feedback-close closebtn" onclick="closeNav()">
				<span class="ml-2"> <a href="javascript:void(0)" ><i class="fas fa-times-circle text-danger" ></i></a></span>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-md-12" >
						<h6 class="text-center">Answer-sheet</h6>
						<div class="form-group">
							<label>1</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >2</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label>3</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >4</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>5</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >6</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>7</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >8</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>9</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >10</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label>11</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >12</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>13</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >14</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>15</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >16</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>17</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >18</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label>19</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >20</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>21</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >22</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>23</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >24</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>25</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >26</label>
							<input type="text" class="form-control" >
						</div>
						<div class="form-group">
							<label>27</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >28</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>29</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >30</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>31</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >32</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>33</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >34</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>35</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >36</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>37</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >38</label>
							<input type="text" class="form-control" >
						</div>

						<div class="form-group">
							<label>39</label>
							<input type="text" class="form-control"  >
						</div>
						<div class="form-group">
							<label >40</label>
							<input type="text" class="form-control" >
						</div>

					</div>

				</div>

			</div>
		</div>

		<div class="row " >
			<div class="col-md-12 topheader">
				<table class="mx-auto" style="">
					<tr>
						<td>
							<form action="#">
								<input class="btn" id="myBtn" type="button" formtarget="_blank" value="Start">
							</form>
						</td>
						<td>01:00:00</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="row header" >
			<div class="col-md-12 ml-1">
				<p class="mt-2">
					<a class="btn btn-sm btn-primary" data-toggle="collapse" href="#section-1" role="button" aria-expanded="false" aria-controls="section-1">SECTION 1</a>

					<button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#section-2" aria-expanded="false" aria-controls="section-2">SECTION 2</button>

					<button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#section-3" aria-expanded="false" aria-controls="section-3">SECTION 3</button>

					<button class="btn btn-sm btn-success" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="section-1 section-2 section-3">TOGGLE ALL</button>

				</p>
			</div>
		</div>


		<div class="row">
			<div class="col">
				<div class="collapse show multi-collapse " id="section-1">
					<div class="card card-body" style="background: black;">


						<div class="row mt-5">

							<div class="col-md-6" style="background: ;">
								<blockquote class="blockquote">
									<p class="mb-0">SECTION 1</p>
									<footer class="blockquote-footer">Left hand side contain passages.</footer>
								</blockquote>

								<img class="img-fluid" src="content/p1/p11.jpg" alt="">
								<img class="img-fluid" src="content/p1/p12.jpg" alt="">

							</div>

							<div class="col-md-6" style="background: ;">

								<blockquote class="blockquote">
									<p class="mb-0">QUESTION'S FOR SECTION 1</p>
									<footer class="blockquote-footer">Right hand side contain question's regards section.</footer>
								</blockquote>

								<img class="img-fluid" src="content/p1/q1.jpg" alt="">
								<img class="img-fluid" src="content/p1/q2.jpg" alt="">

							</div>

						</div>


					</div>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col">
				<div class="collapse multi-collapse" id="section-2">
					<div class="card card-body" style="background: black;">

						<div class="row mt-5">

							<div class="col-md-6" style="background: ;">
								<blockquote class="blockquote">
									<p class="mb-0">SECTION 2</p>
									<footer class="blockquote-footer">Left hand side contain passages.</footer>
								</blockquote>

								<img class="img-fluid" src="content/p2/p21.jpg" alt="">
								<img class="img-fluid" src="content/p2/p22.jpg" alt="">




							</div>

							<div class="col-md-6" style="background: ;">
								<blockquote class="blockquote">
									<p class="mb-0">QUESTION'S FOR SECTION 2</p>
									<footer class="blockquote-footer">Right hand side contain question's regards section.</footer>
								</blockquote>

								<img class="img-fluid" src="content/p2/q1.jpg" alt="">
								<img class="img-fluid" src="content/p2/q2.jpg" alt="">
								<img class="img-fluid" src="content/p2/q3.jpg" alt="">


							</div>

						</div>


					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="collapse multi-collapse" id="section-3">
					<div class="card card-body" style="background: black;">

						<div class="row mt-5">

							<div class="col-md-6" style="background: ;">

								<blockquote class="blockquote">
									<p class="mb-0">SECTION 3</p>
									<footer class="blockquote-footer">Left hand side contain passages.</footer>
								</blockquote>

								<img class="img-fluid" src="content/p3/p31.jpg" alt="">
								<img class="img-fluid" src="content/p3/p32.jpg" alt="">



							</div>

							<div class="col-md-6" style="background: ;">

								<blockquote class="blockquote">
									<p class="mb-0">QUESTION'S FOR SECTION 3</p>
									<footer class="blockquote-footer">Right hand side contain question's regards section.</footer>
								</blockquote>
								<img class="img-fluid" src="content/p3/q1.jpg" alt="">
								<img class="img-fluid" src="content/p3/q2.jpg" alt="">
								<img class="img-fluid" src="content/p3/q3.jpg" alt="">


							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<!--Bottom Footer-->
		<div class="bottom section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center mt-2">
						<div class="copyright">
							<p> Developed by <a href="https://www.instagram.com/code_lone/" class="transition" target="_blank"> Codelone</a></p>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Bottom Footer-->	
	</div>


	<!--scripts-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script>

		//sidepanel answersheet
		function openNav() {
			document.getElementById("mySidepanel").style.width = "250px";
		}

		function closeNav() {
			document.getElementById("mySidepanel").style.width = "0";
		}

		function toTimeString(seconds) {
			return (new Date(seconds * 1000)).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0];
		}

		//countdown
		function startTimer() {
			var nextElem = $(this).parents('td').next();
			var duration = nextElem.text();
			var a = duration.split(':');
			var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]);
			setInterval(function() {
				seconds--;
				if (seconds >= 0) {
					nextElem.html(toTimeString(seconds));
				}
				if (seconds === 0) {
					document.getElementById("myBtn").disabled = true;
					alert('sorry, out of time');
					clearInterval(seconds);
				}
			}, 1000);
			$('#myBtn').hide();
		}
		$('#myBtn').on('click', startTimer);

		//keys
		/*
		document.onkeydown = function(e) {
		  if(event.keyCode == 123) {
		     return false;
		  }
		  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
		     return false;
		  }
		  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
		     return false;
		  }
		  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
		     return false;
		  }
		  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
		     return false;
		  }
		}
		*/

		// Changing button text
		$(document).ready(function(){
		    $(".btn-sm").click(function(){
		        $(this).text($(this).text() == 'Hide' ? 'Show' : 'Hide');
		    });
		});
	</script>

</body>
</html>