
<?php 
require_once ("../../../includes/encryption.php");
				$student = new Student();
				$cur = $student->single_student($_GET['id']);


                $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');
    
                            //$decrypted_IDNO = $aes->decryptData($cur->IDNO);
                            $decrypted_LNAME = $aes->decryptData($cur->LNAME);
                            $decrypted_FNAME = $aes->decryptData($cur->FNAME);
                            $decrypted_MNAME = $aes->decryptData($cur->MNAME);
                            $decrypted_SEX = $aes->decryptData($cur->SEX);
                            $decrypted_AGE = $aes->decryptData($cur->AGE);
                            $decrypted_EMAIL = $aes->decryptData($cur->EMAIL);
                            $decrypted_BDAY = $aes->decryptData($cur->BDAY);
                            $decrypted_BPLACE = $aes->decryptData($cur->BPLACE);
                            $decrypted_STATUS = $aes->decryptData($cur->STATUS);
                            $decrypted_NATIONALITY = $aes->decryptData($cur->NATIONALITY);
                            $decrypted_RELIGION = $aes->decryptData($cur->RELIGION);
                            $decrypted_CONTACT_NO = $aes->decryptData($cur->CONTACT_NO);
                            $decrypted_HOME_ADD = $aes->decryptData($cur->HOME_ADD);

			?>
		        <form class="form-horizontal well span9" action="controller.php?action=edit&id=<?php echo $cur->IDNO; ?>" method="POST">

					<fieldset>
						<legend style="margin-top:20px; font-family:Poppins; font-weight:900;">Edit Student</legend>
															
 
			            <div class="col-md-4">
     					 <div class="form-group">
			              <label style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">ID Number*</label>  
			                 <input class="form-control input-sm" id="idno" name="idno" placeholder=
												  "ID Number" type="number" value="<?php echo $cur->IDNO; ?>" readonly style="font-size:15px;">
			              </div> 
			            </div>  
			         
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "lName" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">LastName:*</label> 
			                  <input class="form-control input-sm" id="lName" name="lName" type=
			                  "text" placeholder="Last Name" value="<?php echo $decrypted_LNAME; ?>" style="font-size:15px;">
			                </div>
			              </div>

			              <div class="col-md-4">
      					   <div class="form-group">
			                <label for=
			                "fName" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Firstname:*</label> 
			                  <input class="form-control input-sm" id="fName" name="fName" type=
			                  "text" placeholder="First Name" value="<?php echo $decrypted_FNAME; ?>" style="font-size:15px;">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "mName" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Middlename:*</label> 
			                  <input class="form-control input-sm" id="mName" name="mName" type=
			                  "text" placeholder="Middle Name" value="<?php echo $decrypted_MNAME; ?>" style="font-size:15px;">
			                </div>
			              </div>
			            </div> 
						
						<div class="form-group">
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group" >   
			                <label for=
			                "gender" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Gender </label> 
				                <select class="form-control input-sm" name="gender" id="gender" style="font-size:15px;">
				                	<option value="<?php echo $decrypted_SEX; ?>" ><?php echo $decrypted_SEX; ?></option>
									<option value="M">Male</option>
									<option value="F">Female</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "bday" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Birth Date</label> 
			                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
			                    <input class="form-control" size="11" type="text" value="<?php echo $decrypted_BDAY; ?>" readonly name="bday" id="bday" style="font-size:15px;">
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
			                </div>
			              </div>
						</div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "bplace" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Birth place</label> 
			                  <input class="form-control input-sm" id="bplace" name="bplace" type=
			                  "text" placeholder="Birth Place" value="<?php echo $decrypted_BPLACE; ?>" style="font-size:15px;">
			                </div>
			              </div>
			            </div>
			          </div>
												  
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "status" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Civil Status </label> 
				                <select class="form-control input-sm" name="status" id="status" style="font-size:15px;">
				                	<option value="<?php echo $decrypted_STATUS; ?>" ><?php echo $decrypted_STATUS; ?></option>
									<option value="Single">Single</option>
									<option value="Married">Married</option>	
								</select>	
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "age" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Age</label> 
			                  <input class="form-control input-sm" id="age" name="age" type="number" placeholder="age" value="<?php echo $decrypted_AGE; ?>" style="font-size:15px;">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "nationality" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Nationality</label> 
			                  <input class="form-control input-sm" id="nationality" name="nationality" type=
			                  "text" placeholder="Nationality" value="<?php echo $decrypted_NATIONALITY; ?>" style="font-size:15px;">
			                </div>
			              </div>
			            </div> 
							 
			            <div class="row">
			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "religion" style="color:#780000; font-family:Poppins; font-size:14px;">Religion </label> 
				                 <input class="form-control input-sm" id="religion" name="religion" type=
			                  "text" placeholder="Religion" value="<?php echo $decrypted_RELIGION; ?>" style="font-size:15px;">
			                </div>
			              </div>

			              <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "contact" style="color:#780000; font-family:Poppins;font-size:17px; font-weight:500;">Contact </label> 
			                  <input class="form-control input-sm" id="contact" name="contact" type="text" placeholder="Contact Number" value="<?php echo $decrypted_CONTACT_NO; ?>" style="font-size:15px;">
			                </div>
			              </div>
			               <div class="col-md-4">
      						<div class="form-group">
			                <label for=
			                "email" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Email*</label> 
			                  <input class="form-control input-sm" id="email" name="email" type=
			                  "email" placeholder="Email address" value="<?php echo $decrypted_EMAIL; ?>" style="font-size:15px;">
			                </div>
			              </div>
			          </div> 
 
			            <div class="row">
			              <div class="col-md-8">
      						<div class="form-group">
			                <label style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Home   </label> 
			                  <input class="form-control input-sm" id="home" name="home" type=
			                  "text" placeholder="Home Address" value="<?php echo $decrypted_HOME_ADD; ?>" style="font-size:15px;">
			                </div>
			              </div>

			              
			            </div> 

    								
				</fieldset>	
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_GET['id']);
                    
                    $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');
    
                            //$decrypted_IDNO = $aes->decryptData($cur->IDNO);
                            $decrypted_GUARDIAN = $aes->decryptData($det->GUARDIAN);
                            $decrypted_GUARDIAN_ADDRESS = $aes->decryptData($det->GUARDIAN_ADDRESS);
                            $decrypted_OTHER_PERSON_SUPPORT = $aes->decryptData($det->OTHER_PERSON_SUPPORT);
                            $decrypted_ADDRESS = $aes->decryptData($det->ADDRESS);
                       
				?>
				<fieldset>
				<legend style="margin-top:5px; font-family:Poppins; font-weight:900; ">Secondary Details</legend>
 

				
				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "guardian" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Guardian </label> 
			                 <input class="form-control input-sm" id="guardian" name="guardian" type=
		                  "text" placeholder="Guardian" value="<?php echo $decrypted_GUARDIAN; ?>" style="font-size:15px;">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "guardianAdd" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Address </label> 
		                  <input class="form-control input-sm" id="guardianAdd" name="guardianAdd" type="text" placeholder="Guardian Address" value="<?php echo $decrypted_GUARDIAN_ADDRESS; ?>" style="font-size:15px;">
		                </div>
		              </div>
		              
		          </div>
		          </div>


				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
      					<div class="form-group">
		                <label  for=
		                "otherperson" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Other person Supporting </label> 
			                 <input class="form-control input-sm" id="otherperson" name="otherperson" type=
		                  "text" placeholder="Other Person Supporting" value="<?php echo $decrypted_OTHER_PERSON_SUPPORT; ?>" style="font-size:15px;">
		                </div>
		              </div>

		              <div class="col-md-6">
      					<div class="form-group">
		                <label for=
		                "otherAddress" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Address </label> 
		                  <input class="form-control input-sm" id="otherAddress" name="otherAddress" type="text" placeholder="Address" value="<?php echo $decrypted_ADDRESS; ?>" style="font-size:15px;">
		                </div>
		              </div>
		              
		          </div>
		          </div>
		        <!--  
				</fieldset>	
				<?php
				$req = new Requirements();
				$res = $req->single_result($_GET['id']);
				?>
				<fieldset>
					<legend>Other Details</legend>
					<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
		                <label for=
		                "boarding">Requirements</label>

		                <div class="col-md-8">
			                 <div class="checkbox">
							    <label>
							      <input type="checkbox" name="nso" value="yes" <?php 
							      if ($res->NSO=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> NSO
							    </label>
							    
							  </div>
							  <div class="checkbox">
							    <label>
							      <input type="checkbox" name="baptismal" value="yes" <?php 
							      if ($res->BAPTISMAL=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Baptismal
							    </label>
							    
							  </div>

							  <div class="checkbox">
							    <label>
							      <input type="checkbox" name="entrance" value="yes" <?php 
							      if ($res->ENTRANCE_TEST_RESULT=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Entrance Test Result
							    </label>
							    
							  </div>
							   <div class="checkbox">
							    <label>
							      <input type="checkbox" name="mir_contract" value="yes" <?php 
							      if ($res->MARRIAGE_CONTRACT=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Marriage Contract
							    </label>
							    
							  </div>
							   <div class="checkbox">
							    <label>
							      <input type="checkbox" name="certifcateOfTransfer" value="yes" <?php 
							      if ($res->CERTIFICATE_OF_TRANSFER=='Yes'){
							       echo 'checked ="checked"';
							   	   };
							   	   ?>/> Certificate of Transfer
							    </label>
							    
							  </div>

		                </div>
		              </div>

		              </div>


		          </div>

				</fieldset>	-->
				<div class="form-group">
		            <div class="row">
		              <div class="col-md-6">
		                <label class="col-md-6 control-label" for=
		                "otherperson"></label>

		                <div class="col-md-6">
			             
		                </div>
		              </div>
		              <?php
if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
		              <div class="col-md-6" align="right">
                        <a href="index.php" name="back" class="btn btn-default" style="background-color:#780000; font-family:Poppins; border-radius:5px;">Back</a>
		               <button class="btn btn-primary" name="submit" type="submit" style="background-color:#780000; font-family:Poppins;">Save</button>

		               </div>';
		           } ?>
		              
		          </div>
		          </div>
					
                    </fieldset>
				</form>
			<!--	</div><!--End of well-->

				</div><!--End of container-->
			
