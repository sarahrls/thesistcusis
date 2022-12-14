<style type="text/css">
    /*
	Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
	*/
	@media screen and (max-width: 768px), (min-device-width: 320px) 
    and (max-device-width: 1024px)  {

		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: table;
           
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
            display: none;
			position: absolute;
			top: -500px;
			left: -9999px;
		}

    tr {
      margin: 0 0 1rem 0;
    }
      
    tr:nth-child(odd) {
      background: #ccc;
        margin: 5rem;
    }
    
		td {
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50px;
            margin-bottom: 10px;
          
		}

		td:before {
			/* Now like a table header */
		
			/* Top/left values mimic padding */
			top: 0;
			left: 6px;
			width: 30%;
			padding-right: 5px;
			white-space: nowrap;
		}
        
           @media screen and (max-width:480px){
        .well{
            
            overflow-x: scroll;
        }
         .navigation{
            display: flex;
            overflow-y: scroll;
        }
    }

		/*
		Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
		*/
		td:nth-of-type(1):before { content: "Subject"; }
		td:nth-of-type(2):before { content: "Description"; }
		td:nth-of-type(3):before { content: "Midterm"; }
		td:nth-of-type(4):before { content: "Finals"; }
		td:nth-of-type(5):before { content: "Average"; }
		td:nth-of-type(6):before { content: "Remarks"; }
		
	} 

</style>


<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
      require_once ("../../../includes/encryption.php");
                                $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');
      
		  	 if (isset($_GET['studentId'])){
				if ($_GET['studentId']==""){
					message("ID Number is required!","error");
					check_message();
					
				}else{

					
					$Schoolyr = new Schoolyr();
					$NumberofResult = $Schoolyr->findsy($_GET['studentId']);
					if ($NumberofResult == 0){
						// message("This Student is advice to go back from step 1!","error");
						// check_message();
 						redirect("enrollment.php?studentId=".$_GET['studentId']);


					}else{

						$sy = $Schoolyr->single_sy($_GET['sy']);
						$course = new Course();
						$studcourse = $course->single_course($sy->COURSE_ID);
						//the button in assigning the subjects.
						$button ='<a href = "index.php?view=assign&studentId='.$_GET['studentId'].'&SY='.$sy->AY.'&cid='.$sy->COURSE_ID.'&sy='.$_GET['sy'].'" class="btn btn-default" style="background-color:#780000; font-family:Poppins;"><span class="glyphicon glyphicon-plus-sign" ></span>Assign Subject</a>
						 <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000; font-family:Poppins;"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>';

					}

					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);
                    
                            $decrypted_LNAME = $aes->decryptData($cur->LNAME);
                            $decrypted_FNAME = $aes->decryptData($cur->FNAME);

				}
			}

  ?>
     
		  <!-- <form class="form-horizontal span4" action="#.php" method="POST"> -->
					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title" style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a> Enrolled Subject by the Student </h3>
					  </div>
					  <div class="panel-body">
					   <div class="row">      	  		            		          
			           <div class="container">
				 		<div class="well">
					    <span id="printout">
				           <table > 
				          
						     <tbody>
						     	<tr>
						     		
						     		<td>
						     			<p style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;"><b>ID Number : </b><?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?><br/>
						     		<b>Name : </b><?php echo (isset($cur)) ? $decrypted_LNAME.', '.$decrypted_FNAME : 'Fullname' ;?><br/>
						     		<b>Status : </b><?php echo (isset($sy)) ? $sy->STATUS : 'STATUS' ;?><br/>
						     		<b>AY : </b><?php echo (isset($sy)) ? $sy->AY : 'STATUS' ;?><br/>
						     	<!--	<td> <?php //echo (isset($sy)) ? $sy->SEMESTER : 'COURSE' ;?></td>-->
						     		<b>YR/Section : </b><?php echo (isset($studcourse)) ? $studcourse->COURSE_DESC : 'Department' ;?>
						     		</p></td>
						     		
						     	</tr>
						      </tbody>
						     
					     </table>
					     <br>
					     <form class="form-horizontal span4" action="controller.php?action=delsubj&studentId=<?php echo $_GET['studentId']; ?>&cid=<?php echo $_GET['cid']; ?>&sy=<?php echo $_GET['sy']; ?>" method="POST">					    
								<table  class="table table-striped" cellspacing="0" id="table">
							
								  <thead>
								  	<tr >

								  		

								  			<?php if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
								  				echo '<th style="font-size:16px; font-family:Poppins; font-weight:900;" width="20%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall("selector[]");">Subject</th>';
								  			}else{

								  				echo '<th>Subject</th>';	
								  			}
								  			?>								  		 
								  		 							  	
								  		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
								  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Midterm</th>
								  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Finals</th>
										<th style="font-size:16px; font-family:Poppins; font-weight:900;">Average</th>				  		
								  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Remarks</th>
								  	<!--	<th class="bottom">Semester</th>
								 		<th class="bottom">Department</th>
								 		<th class="bottom">Pre-requisite</th>
								 		<th align="center" class="bottom">Unit</th>
								  		-->
					
								  	</tr>	   
								  </thead>
								  <tbody>
								  	<?php
							 			$cid = (isset($studcourse)) ? $studcourse->COURSE_ID : 0;
									  		$mydb->setQuery("SELECT * 
															FROM  `subject` s,  `course` c ,`grades` g
															WHERE s.`COURSE_ID` = c.`COURSE_ID` AND s.`SUBJ_ID`=g.`SUBJ_ID` 
															AND  `IDNO` = ".$_GET['studentId']. " AND c.`COURSE_ID`=".$_GET['cid']);
									
								  			$cur = $mydb->loadResultlist();
											foreach ($cur as $result) {
                                                
                                                
                                                require_once ("../../../includes/encryption.php");
                                $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');
                       
                            //$decrypted_IDNO = $aes->decryptData($student->IDNO);

                                
                            $decrypted_FIRST = $aes->decryptData($result->FIRST);
                            $decrypted_SECOND = $aes->decryptData($result->SECOND);
                            $decrypted_AVE = $aes->decryptData($result->AVE);
                            $decrypted_REMARKS = $aes->decryptData($result->REMARKS);
                                                
                                                
										  		echo '<tr>';

										  		echo '<td width="15%" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">';
										  		 if($_SESSION['ACCOUNT_TYPE']=='Administrator'){

										  		echo '<input type="checkbox" name="selector[]" id="selector[]" value="'.$result->GRADE_ID. '"/>';
										  		}  echo $result->SUBJ_CODE .'</td>';
										  		echo '<td width="30%" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $result->SUBJ_DESCRIPTION.'</td>';
									  			echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'.$decrypted_FIRST.'</td>';
										  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $decrypted_SECOND.'</td>';
										  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $decrypted_AVE.'</td>';  
										  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $decrypted_REMARKS.'</td>';  	
										  	//	echo '<td>'. $result->SEMESTER.'</td>';
										  	//	echo '<td>'. $result->COURSE_NAME.'</td>';
										  		//echo '<td>'. $result->COURSE_LEVEL.'</td>';
				  							//	echo '<td>'. $result->PRE_REQUISITE.'</td>';
				  							//	echo '<td align="center">'. $result->UNIT.'</td>';

										  		echo '</tr>';
									  		}
									  	 
								  	?>
								  </tbody>
								 
								</table>
								</span>



						<div >
						<a href="index.php?view=view&studentId=<?php echo $_GET['studentId'];?>" class="btn btn-default" style="background-color:#780000; font-family:Poppins;">  Back</a>
						<?php 
						 if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						 	echo (isset($button)) ? $button : ''; 
						 }

						?>
						<input type="button" value="Print" onclick="tablePrint();" class="btn btn-default" style="background-color:#780000; font-family:Poppins;">
			 				<!-- <a href = "assignstudentsubjects.php?studentId=<?php // echo (isset($_GET['studentId'])) ? $_GET['studentId'] : 'ID' ; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign"></span>Assign Subject</a> -->
					  <!--  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
					</form>
						</body>
						</html>		
					  </div>
					</div>
									
				</form>
					 
					    </div>	
					   </div>				            	              
			          </div>				          
			         </div><!--/span-->
			    <!--  </form> -->
							  
		
	

						</div>
</div>
  <script>
function tablePrint(){ 
 document.all.divButtons.style.visibility = 'hidden';  
    var display_setting="toolbar=no,location=no,directories=no,menubar=no,";  
    display_setting+="scrollbars=no,width=500, height=500, left=100, top=25";  
 //   var tableData = '<table border="1">'+document.getElementsByTagName('table')[0].innerHTML+'</table>';
    var content_innerhtml = document.getElementById("printout").innerHTML;  
    var document_print=window.open("","",display_setting);  
    document_print.document.open();  
    document_print.document.write('<body style="font-family:verdana; font-size:12px;" onLoad="self.print();self.close();" >');  
    document_print.document.write(content_innerhtml);  
    document_print.document.write('</body></html>');  
    document_print.print();  
    document_print.document.close(); 
   
    return false;  
    } 
  $(document).ready(function() {
    oTable = jQuery('#example').dataTable({
    "bJQueryUI": true,
    "sPaginationType": "full_numbers"
    } );
  });   
</script>