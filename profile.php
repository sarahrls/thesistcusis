<div class="container" style="margin-top: 110px"> 
<div class="container" style="margin-top: 90px; border: 2px solid black; border-radius: 10px; background-color:white;">
	<?php
		check_message();
			
		?>
		<div class="wellss">
			<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
            
                require_once ("includes/encryption.php");
                $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');
            
                //$decrypted_IDNO = $aes->decryptData($cur->IDNO);
                $decrypted_LNAME = $aes->decryptData($cur->LNAME);
                $decrypted_FNAME = $aes->decryptData($cur->FNAME);
                $decrypted_MNAME = $aes->decryptData($cur->MNAME);
                $decrypted_SEX = $aes->decryptData($cur->SEX);
                $decrypted_AGE = $aes->decryptData($cur->AGE);
                $decrypted_BDAY = $aes->decryptData($cur->BDAY);
                $decrypted_BPLACE = $aes->decryptData($cur->BPLACE);
                $decrypted_STATUS = $aes->decryptData($cur->STATUS);
                $decrypted_NATIONALITY = $aes->decryptData($cur->NATIONALITY);
                $decrypted_RELIGION = $aes->decryptData($cur->RELIGION);
                $decrypted_CONTACT_NO = $aes->decryptData($cur->CONTACT_NO);
                $decrypted_EMAIL = $aes->decryptData($cur->EMAIL);
                $decrypted_HOME_ADD = $aes->decryptData($cur->HOME_ADD);
			?>
			  				
				 <fieldset>
						<legend  style="margin-top:10px; color:#780000; font-size:35px;  font-family:Poppins; font-weight:1000px;">Student Information</legend>
					<table class="table table-bordered" cellspacing="0">
						<tr>
                            <td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">ID Number :</td><td width="80%"><?php echo $cur->IDNO; ?></td></tr>	
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Fullname :</td><td><?php echo $decrypted_LNAME .', '. $decrypted_FNAME.', '. $decrypted_FNAME; ?></td>	</tr></tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Gender :</td><td><?php 
								if($decrypted_SEX== 'F'){
									echo "Female";
								}else{
									echo "Male";
								}	
								 ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Age :</td><td><?php echo $decrypted_AGE; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Birth Date :</td><td><?php echo $decrypted_BDAY; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Place of Birth :</td><td><?php echo $decrypted_BPLACE; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Civil Status :</td><td><?php echo $decrypted_STATUS; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Nationality :</td><td><?php echo $decrypted_NATIONALITY ; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Religion :</td><td><?php echo $decrypted_RELIGION; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Contact No. :</td><td><?php echo $decrypted_CONTACT_NO; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Email Address :</td><td><?php echo $decrypted_EMAIL; ?></td>	</tr>
							<td style="font-family:Poppins; font-weight:800; letter-spacing:1px;">Home Address :</td><td><?php echo $decrypted_HOME_ADD; ?></td>	</tr>
						
						</tr>
					</table>	


				</fieldset>
				<?php
				$details = new Student_details();
				$det = $details->secondary_details($_SESSION['IDNO']);

                require_once ("includes/encryption.php");
                $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');

                $decrypted_GUARDIAN = $aes->decryptData($det->GUARDIAN);
                $decrypted_GUARDIAN_ADDRESS = $aes->decryptData($det->GUARDIAN_ADDRESS);
                $decrypted_OTHER_PERSON_SUPPORT = $aes->decryptData($det->OTHER_PERSON_SUPPORT);
                $decrypted_ADDRESS = $aes->decryptData($det->ADDRESS);
				?>
				 <fieldset>
						<legend>Secondary details</legend>
						<table class="table table-bordered" cellspacing="0" width="100%">
						<tbody>	
							<!--<tr><td>Father :</td><td width="80%"><?php echo $det->FATHER; ?></td></tr>
							<tr><td>Occupation :</td><td><?php echo $det->FATHER_OCCU; ?></td></tr>
							<tr><td>Mother :</td><td><?php echo $det->MOTHER; ?></td></tr>
							<tr><td>Occupation :</td><td><?php echo $det->MOTHER_OCCU; ?></td></tr>
							<tr><td>Boarding :</td><td><?php echo $det->BOARDING; ?></td></tr>	
							<tr><td>With family :</td><td><?php echo $det->WITH_FAMILY; ?></td></tr>-->
                            
							<tr><td>Guardian :</td><td><?php echo $decrypted_GUARDIAN; ?></td></tr>
							<tr><td>Address :</td><td><?php echo $decrypted_ADDRESS; ?></td></tr>
							<tr><td>Other Person Supporting :</td><td><?php echo $decrypted_OTHER_PERSON_SUPPORT; ?></td></tr>
							<tr><td>Address :</td><td><?php echo $decrypted_ADDRESS; ?></td></tr>
						</tbody>	
						</table>
						 


				</fieldset>	
<!--
				<?php
				$req = new Requirements();
				$res = $req->single_result($_SESSION['IDNO']);
				?>
				 <fieldset>
						<legend>Requirements</legend>
						<table class="table table-bordered" cellspacing="0">
							<tr><td>NSO :</td><td width="80%"><?php echo $res->NSO; ?></td></tr>
							<tr><td>Baptismal :</td><td><?php echo $res->BAPTISMAL; ?></td></tr>
							<tr><td>Entrance test Result :</td><td><?php echo $res->ENTRANCE_TEST_RESULT; ?></td></tr>
							<tr><td>Mirriage Contract :</td><td><?php echo $res->MARRIAGE_CONTRACT; ?></td></tr>
							<tr><td>Certificate Of Transfer :</td><td><?php echo $res->CERTIFICATE_OF_TRANSFER; ?></td></tr>	
						
						</table>
						
				</fieldset>		-->			
			
	  	</div><!--End of well-->

</div><!--End of container-->