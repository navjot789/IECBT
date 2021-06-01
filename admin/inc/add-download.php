
<p id="msg-display"></p>
<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		           
					
					<?php
					  $product_code = substr(md5(uniqid(mt_rand(), true)) , 0, 8);
					?>
					
		            <div class="row">
		                <div class="col-md-12 col-md-offset-2">
		                    <form id="add_dlink_form" method="post">



                              <div class="form-group row">

	                                <div class="col-md-12">
	                                  <label for="username" class="col-4 col-form-label">Product Code</label> 
											<input id="pcode" name="pcode" placeholder="Code" value="<?php echo $product_code; ?>" class="form-control here"  type="text">
										
										<small>Enter your random 8 digit code.</small>
	                                </div>

	                                

                              </div>

                               <div class="form-group row">

	                                <div class="col-md-12">
	                                  <label for="username" class="col-4 col-form-label">File Download Path</label> 
											<input id="url" name="url" placeholder="URL"  class="form-control here" type="text">
										
										<small>Enter your File Download Path or URL link.</small>
	                                </div>

	                                

                              </div>
                           

								
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button  type="submit" id="add_link" class="btn btn-primary pull-right"><i class="fas fa-plus"></i> Add</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
					
					
				 <br/><br/>
					 
					
		            
		        </div>
		    </div>
		</div>