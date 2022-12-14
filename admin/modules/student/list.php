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
        margin: 2rem;
    }
    
		td {
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 10px;
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

		/*
		Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
		*/
		td:nth-of-type(1):before { content: "No."; }
		td:nth-of-type(2):before { content: "StudID"; }
		td:nth-of-type(3):before { content: "Full Name"; }
		td:nth-of-type(4):before { content: "Sex"; }
		td:nth-of-type(5):before { content: "Age"; }
		td:nth-of-type(6):before { content: "Email Address"; }
		td:nth-of-type(7):before { content: "Option"; }
	} 
    
         @media screen and (max-width:480px){
        .wells{
            
            overflow-x: scroll;
        }
         .navigation{
            display: flex;
            overflow-y: scroll;
        }
    }
    

</style>

		<div class="wells">
				<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Student</h3>
                <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000; font-family:Poppins; margin-top:-30px; margin-bottom:20px;"><span class="glyphicon glyphicon-plus-sign" ></span>  New</a>
			    <form action="controller.php?action=delete" Method="POST">  					
					<table  role="table" id="example" class="table table-striped" cellspacing="0">
				
				  <thead role="rowgroup">
				  	<tr role="row">
				  		<th role="columnheader" style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
				  		<th role="columnheader" width="10%" align="left" style="font-size:16px; font-family:Poppins; font-weight:900;"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');" > StudID </th>
				  		<th role="columnheader" style="font-size:16px; font-family:Poppins; font-weight:900;">Full Name</th>
				  		<th role="columnheader" style="font-size:16px; font-family:Poppins; font-weight:900;">Sex</th>
				  		<th role="columnheader" style="font-size:16px; font-family:Poppins; font-weight:900;">Age</th>
				  	
				  		<th role="columnheader" style="font-size:16px; font-family:Poppins; font-weight:900;">Email Address</th>
				  		<th role="columnheader" style="font-size:16px; font-family:Poppins; font-weight:900;">Options</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
                      
				  	  	$mydb->setQuery("SELECT  `IDNO` , `LNAME` ,  `FNAME` ,  `MNAME` , `SEX` ,`AGE`, `BDAY` ,  `STATUS` ,  `EMAIL`
				  						  FROM  `tblstudent`");
				  	  	loadresult();

				  		function loadresult(){
                            //require_once ("../../../encryption.php");
                            
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
                            
                            //$studentAES = new StudentEncryption();  
                                require_once ("../../../includes/encryption.php");
                                $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');
                       
                            //$decrypted_IDNO = $aes->decryptData($student->IDNO);
                            $decrypted_LNAME = $aes->decryptData($student->LNAME);
                            $decrypted_FNAME = $aes->decryptData($student->FNAME);
                            $decrypted_MNAME = $aes->decryptData($student->MNAME);
                            $decrypted_SEX = $aes->decryptData($student->SEX);
                            $decrypted_AGE = $aes->decryptData($student->AGE);
                            $decrypted_EMAIL = $aes->decryptData($student->EMAIL);
                                
                            //$decrypted_IDNO = $studentAES->decryptData($student->IDNO);
                            //$decrypted_Name = $studentAES->decryptData($student->Name);
                            //$decrypted_SEX = $studentAES->decryptData($student->SEX);
                            //$decrypted_AGE = $studentAES->decryptData($student->AGE);
                            //$decrypted_EMAIL = $studentAES->decryptData($student->EMAIL);
                                
                                
                            //print("Decrypted Data: $decrypted_IDNO "); 
                                

					  	
					  		echo '<tr role="row">';
					  		echo '<td role="cell" width="5%" align="center"></td>';
					  		echo '<td role="cell" width="10%" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;"><input type="checkbox" name="selector[]" id="selector[]" value="' .$student->IDNO. '"/>' .$student->IDNO.'</td>';
					  		echo '<td role="cell" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'.$decrypted_LNAME.', '. $decrypted_FNAME.' '.$decrypted_MNAME.'</td>';
					  		echo '<td role="cell" align="center" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'.$decrypted_SEX.'</td>';
					  		echo '<td role="cell"  align="center" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'.$decrypted_AGE.'</td>';
					  	
					  		echo '<td role="cell" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'.$decrypted_EMAIL.'</td>';
					  		echo '<td role="cell" style="font-size:14px; font-family:Poppins; font-weight:500;"><a href="index.php?view=edit&id='.$student->IDNO.'" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;"><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a>';
                            echo '<a href = "index.php?view=view&studentId='.$student->IDNO.'" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;"><span class="glyphicon glyphicon-list-alt"> </span>  View</a> <br>'; 
                            echo '<a href = "index.php?view=upload&studentId='.$student->IDNO.'" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;"><span class="glyphicon glyphicon-list-alt"> </span>  Upload</a>';
                                
                            echo '<a href = "#" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                </td>';
                            
					  		echo '</tr>';
					  		}

				  		
                        }
				  	?>


				  </tbody>
				 
				</table>
				<?php 
					if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
						';
					}

				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
