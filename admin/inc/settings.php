
	<p id="msg-display"></p>
	<p id="smtp-msg-display"></p>

	

<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		              <div class="row">
		                <div class="col-md-12">
		                    <h2><strong><i class="fas fa-user" ></i> Update username & password</strong></h2>
		                    <hr>
		                </div>
		            </div>
					<br/><br/>
					
					<?php
					   $sql="SELECT username,password from admin_login";
					   $dquery=$dbc->query($sql);
                       $row=$dquery->fetch_array();
					?>
					
		            <div class="row">
		                <div class="col-md-12 col-md-offset-2">
		                    <form id="up_user_pass_form" method="post">
		                    	<p><pre class="text-success"><strong>Note:</strong> After updating the admin credentials please use TXT encryption</br>type to login.</pre></p></br>
                              <div class="form-group row">
                                <label for="username" class="col-4 col-form-label">Username</label> 
                                <div class="col-md-12">
                                  
								<input id="username" name="username" placeholder="Username" value="<?php echo $row['username']; ?>"  class="form-control here" required="required" type="text">
									
									<small>By updating this field you can use it as for login.</small>
                                </div>
                              </div>
                          
                             
                              <div class="form-group row">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-md-12">
                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
									
                                </div>
                              </div> 
								
						  
								
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button id="update" type="submit" class="btn btn-primary pull-right"><i class="fas fa-pen-square"></i> Update</button>
                                </div>
                              </div>


                            </form>
		                </div>
		            </div>


					
					
				 <br/><br/>
					 
					
		            
		        </div>
		    </div>
		</div>



		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		              <div class="row">
		                <div class="col-md-12">
		                    <h2><strong><i class="fas fa-envelope-open-text" ></i> Email Settings for Smtp</strong></h2>
		                    <hr>
		                </div>
		            </div>
					<br/><br/>
					
					<?php
					   $sql="SELECT * from mailing";
					   $dquery=$dbc->query($sql);
                       $row=$dquery->fetch_array();
					?>
					
		            <div class="row">
		                <div class="col-md-12 col-md-offset-2">
		                    <form id="up_user_pass_form" method="post">



                              <div class="form-group row">

	                                <div class="col-md-12">
	                                  <label for="username" class="col-4 col-form-label">Host</label> 
											<input id="host" name="host" placeholder="Domain.com" value="<?php echo $row['host']; ?>" class="form-control here" required="required" type="text">
										
										<small>Enter your mailing smtp domain host.</small>
	                                </div>

	                                

                              </div>


                               <div class="form-group row">

	                               
	                                <div class="col-md-6">
	                                  <label for="username" class="col-4 col-form-label">Username</label> 
											<input id="h_username" name="h_username" placeholder="Username" value="<?php echo $row['user_name']; ?>" class="form-control here" required="required" type="text">
										
										<small>Enter your email username.</small>
	                                </div>

	                                  <div class="col-md-6">
	                                  <label for="username" class="col-4 col-form-label">Password</label> 
											<input id="h_pass" name="h_pass" placeholder="Password" value="<?php echo $row['pass_word']; ?>" class="form-control here" required="required" type="password">
										
										<small>Enter your email password.</small>
	                                </div>

                              </div>
                          
                             <div class="form-group row">

	                                <div class="col-md-6">
	                                  <label for="username" class="col-4 col-form-label">Mail sending from</label> 
											<input id="s_mail" name="s_mail" placeholder="email@domain.com" value="<?php echo $row['setFrom']; ?>" class="form-control here" required="required" type="text">
										
										<small>Enter your email from which mail will be send.</small>
	                                </div>

	                               <div class="col-md-6">
	                                  <label for="username" class="col-4 col-form-label">Mail receving on</label> 
											<input id="r_mail" name="r_mail" placeholder="email@domain.com" value="<?php echo $row['addAddress']; ?>" class="form-control here" required="required" type="text">
										
										<small>Enter your email where you can receive email notifications.</small>
	                                </div>

                              </div>

								
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button  type="submit" id="update_smtp" class="btn btn-primary pull-right"><i class="fas fa-pen-square"></i> Update</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
					
					
				 <br/><br/>
					 
					
		            
		        </div>
		    </div>
		</div>