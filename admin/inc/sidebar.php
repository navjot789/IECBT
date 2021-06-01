	<div class="col-md-2 sidebar">
  			<div class="row">
				<!-- uncomment code for absolute positioning tweek see top comment in css -->
				<div class="absolute-wrapper"> </div>
				<!-- Menu -->
				<div class="side-menu">
					<nav class="navbar navbar-default" role="navigation">
						<!-- Main Menu -->
						<div class="side-menu-container">
							<ul class="nav navbar-nav">
								<li class="<?php echo ($title == 'Dashboard' ? "active" : "")?>">
									<a href="dashboard.php?page=1"><i class="fas fa-tachometer-alt" ></i>&nbsp;Dashboard</a>
								</li>
								
								<li class="panel panel-default" id="dropdown">
									<a data-toggle="collapse" href="#dropdown-lvl1">
										<i class="fas fa-download"></i> Download Links <span class="caret"></span>
									</a>

									
									<div id="dropdown-lvl1" class="panel-collapse collapse">
										<div class="panel-body">
											<ul class="nav navbar-nav">
												<li class="<?php echo ($title == 'D-link' ? "active" : "")?>">
													<a href="dashboard.php?page=2"><i class="fas fa-eye"></i>&nbsp; View</a>
												</li>

												<li class="<?php echo ($title == 'Add-Download' ? "active" : "")?>">
													<a href="dashboard.php?page=3"><i class="fas fa-plus"></i>&nbsp; Add link</a>
												</li>
												

											</ul>
										</div>
									</div>
								</li>

								<li class="<?php echo ($title == 'Transaction' ? "active" : "")?>">
									<a href="dashboard.php?page=4"><i class="fas fa-shopping-cart"></i>&nbsp;Transaction</a>
								</li>

								

							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>

				</div>
			</div>  	


</div>