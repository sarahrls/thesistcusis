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

		/*
		Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
		*/
		td:nth-of-type(1):before { content: "No."; }
		td:nth-of-type(2):before { content: "Subject Code"; }
		td:nth-of-type(3):before { content: "Description"; }
		td:nth-of-type(4):before { content: "Year/Sem"; }
		td:nth-of-type(5):before { content: "Status"; }
		
	} 

</style>
	

<div class="well">
			<h3 align="left" style="margin-top:20px; font-family:Poppins; font-weight:900;">List of Subject</h3>
			    <form action="controller.php?action=assign&instructorId=<?php echo $_GET['instructorId']; ?>" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
			
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">No</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Subject Code</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
				  	<!--	<th>Unit</th>
				  		<th>Pre-requisite</th>
				  		<th>Semester</th>-->
				 		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Year/Sem</th>
				 	<!--	<th>Level</th>-->
				 		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Status</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				  		$instructorId=$_GET['instructorId'];
				
					
					  $mydb->setQuery("SELECT  * 
					  						FROM  `subject` s,  `course` c , class cl 
					  						WHERE s.`COURSE_ID`= c.`COURSE_ID` 
					  						AND s.`SUBJ_ID`=cl.`SUBJ_ID`");
						  	loadresult();
						 	$mydb->setQuery("SELECT  * 
					  						FROM  `subject` s,  `course` c
											WHERE s.`COURSE_ID`= c.`COURSE_ID` AND s.`SUBJ_ID` NOT IN (SELECT  `SUBJ_ID` 
					  						FROM  `class`) ");
					  	 
						  	loadresult();
					  

				  		function loadresult(){
					  		global $mydb;	
					  		 $cur = $mydb->loadResultlist();				  		
							foreach ($cur as $result) {

								if (isset($result->CLASS_ID)){
									//status
									$added = "Added";
									//for the selector
									$select = '<td width="15%" style="font-size:15px; font-family:Poppins; font-weight:500; margin-right:10px;"><input type="checkbox" name="selector[]" id="selector[]"  disabled CHECKED="CHECKED"  value=""/>
						  				 ' . $result->SUBJ_CODE.'</td>';
								}else{
									//status
									$added = "None";
									//for the selector
									$select ='<td width="15%" style="font-size:15px; font-family:Poppins; font-weight:500; margin-right:10px;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  				 ' . $result->SUBJ_CODE.'</td>';
								}
						  		echo '<tr>';
						  		echo '<td width="5%" align="center" ></td>';
						  		// echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  		// 		 ' . $result->SUBJ_CODE.'</td>';
						  		echo $select;
						  		echo '<td width="30%" style="font-size:15px; font-family:Poppins; font-weight:500; margin-right:10px;">'. $result->SUBJ_DESCRIPTION.'</td>';
						  	/*	echo '<td>'. $result->UNIT.'</td>';
						  		echo '<td>'. $result->PRE_REQUISITE.'</td>';
						  		echo '<td>'. $result->SEMESTER.'</td>';*/
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-right:10px;">'. $result->COURSE_NAME.'</td>';
						  	//	echo '<td>'. $result->COURSE_LEVEL.'</td>';
								echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-right:10px;">'.$added.'</td>';
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				
				</table>
				<div class="btn-group">
				  <a href="index.php?view=instSubj&instructorId=<?php echo (isset($instructorId)) ? $instructorId : 'ID' ;?>" class="btn btn-default" style="background-color:#780000; font-family:Poppins; "><span class="glyphicon glyphicon-back"></span>Back</a>
				  <button type="submit" class="btn btn-default" name="Add" style="background-color:#780000; font-family:Poppins; "><span class="glyphicon glyphicon-plus-sign"></span>Assign Selected</button>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->