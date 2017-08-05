<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('change_password_sidebar_student.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->	
					     <ul class="breadcrumb">
								<?php
								$school_year_query = mysql_query("select * from school_year order by school_year DESC")or die(mysql_error());
								$school_year_query_row = mysql_fetch_array($school_year_query);
								$school_year = $school_year_query_row['school_year'];
								?>
								<li><a href="#"><b>Update Registration</b></a><span class="divider">/</span></li>
								<li><a href="#">School Year: <?php echo $school_year_query_row['school_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  								<div class="alert alert-info"><i class="icon-info-sign"></i> Please Update your Biodata Information here</div>
								<?php
								$query = mysql_query("select * from student where student_id = '$session_id'")or die(mysql_error());
								$row = mysql_fetch_array($query);
								?>								
										
								    <form action="update_student_account_success.php"  method="post" id="change_password" class="form-horizontal">
										<div class="control-group">
											<label class="control-label" for="inputEmail">Program Of Study</label>
											<div class="controls">
											<input id="optionsCheckbox" class="uniform_on" type="checkbox" >
                                           DEGREE
                                            <input id="optionsCheckbox" class="uniform_on" type="checkbox" >
                                            PDE
                                            <input id="optionsCheckbox" class="uniform_on" type="checkbox" >
                                            NCE
                                           </div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Field of Study</label>
											<div class="controls">
											<input type="text" id="new_password" name="new_password" placeholder="First Choice">
                                            <input type="text" id="new_password" name="new_password" placeholder="Second Choice">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="inputPassword">Contact Details</label>
											<div class="controls">
											<input type="text" id="new_password" name="new_password" placeholder="Present Address">
                                            <input type="text" id="new_password" name="new_password" placeholder="Permanent Address">
											
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">Contact</label>
											<div class="controls">
											<input type="text" id="new_password" name="new_password" placeholder="Phone number">
                                            <input type="text" id="new_password" name="new_password" placeholder="Email Address">
											
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="inputPassword">National Passport/ID No.</label>
											<div class="controls">
											<input type="text" id="new_password" name="new_password" placeholder="Card number">
                                            <input type="text" id="new_password" name="new_password" placeholder="Date of Issue">                                            <input type="text" id="new_password" name="new_password" placeholder="expiry Date">
											
											</div>
										</div>
                                        
                                        
                                        <div class="control-group">
											<label class="control-label" for="inputEmail">Result Uploads</label>
											<div class="controls">
											<input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file">
                                           WAEC RESULT | 
                                          <input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" >
                                          NECO | 
                                           <input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" >
                                         JAMB
                                           </div>
										</div>
                                          <div class="control-group">
											<label class="control-label" for="inputEmail">Other Uploads</label>
											<div class="controls">
											<input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file">
                                           Transcript | 
                                          <input name="uploaded_file"  class="input-file uniform_on" id="fileInput" type="file" >
                                          Other Certificates
                                           </div>
										</div>
                                        
										<div class="control-group">
											<div class="controls">
											<button type="submit" class="btn btn-info"><i class="icon-save"></i> Update Registration</button>
											</div>
										</div>
									</form>
									
		
										
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					

	

                </div>
	
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>