		
	<caption><h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Course</h3></caption>		
		<div class="well">
			    <form action="controller.php?action=assign&studentId=<?php echo $_GET['studentId'];?>&cid=<?php echo $_GET['cid'];?>&sy=<?php echo $_GET['sy'];?>&SY=<?php $_GET['SY'];?>" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
					  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Subject</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">YR/Section</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Status</th>
				  	<!--	<th>Unit</th>
				  		<th>Pre-requisite</th>
				  		<th>Semester</th>
				 		<th>Department</th>
				 		<th>Level</th>-->
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
				  		global $mydb;
				  		$studentId=$_GET['studentId'];
				  		@$courseid=$_GET['cid'];
				  		@$sy=$_GET['sy'];
				
			
					  $mydb->setQuery("SELECT  * 
					  						FROM  `subject` s,  `course` c, grades g
											WHERE s.`COURSE_ID`= c.`COURSE_ID` AND s.`SUBJ_ID`=g.`SUBJ_ID` 
											AND g.`IDNO`='{$studentId}' ");
							loadresult();
					  		$mydb->setQuery("SELECT  * 
					  						FROM  `subject` s,  `course` c
											WHERE s.`COURSE_ID`= c.`COURSE_ID` AND s.`SUBJ_CODE` 
											NOT IN (SELECT  `SUBJ_CODE` 
					  						FROM  `subject` s,  grades g
											WHERE  s.`SUBJ_ID`=g.`SUBJ_ID` 
											AND g.`IDNO`='{$studentId}')  ");
					  	// $mydb->setQuery("SELECT  * 
								// FROM  `subject` s ,`course` c , `class` cl, `instructor` i 
								// WHERE  s.`COURSE_ID`=c.`COURSE_ID` AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
								// AND cl.`INST_ID`=i.`INST_ID` 
								// LIMIT {$pagination->per_page} OFFSET {$pagination->offset()} ");
						  	loadresult();

				  		function loadresult(){
					  		global $mydb;
					  		$cur = $mydb->loadResultlist();
							foreach ($cur as $result) {
							if(isset($result->GRADE_ID)){
								$status = 'Already Added';
								$select = '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;"><input type="checkbox" name="selector[]" id="selector[]" disabled CHECKED="CHECKED" value=""/>
						  				 ' . $result->SUBJ_CODE.'</td>';
							}else{

								$status = 'None';
								$select = '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  				 ' . $result->SUBJ_CODE.'</td>';
							}
						  		echo '<tr>';
						  		echo '<td width="5%" align="center"></td>';
						  		echo $select;
						  		// echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->SUBJ_ID. '"/>
						  		// 		 ' . $result->SUBJ_CODE.'</td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $result->SUBJ_DESCRIPTION.'</td>';
						  	/*	echo '<td>'. $result->UNIT.'</td>';
						  		echo '<td>'. $result->PRE_REQUISITE.'</td>';
						  		echo '<td>'. $result->SEMESTER.'</td>';*/
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $result->COURSE_NAME.'</td>';
						  		//echo '<td>'. $result->COURSE_LEVEL.'</td>';
						  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'.$status.'</td>';
						  		echo '</tr>';
					  		}
					  	} 
				  	?>
				  </tbody>
				  
				</table>
				<div class="btn-group" style="background-color:#780000; border-radius:5px;">
				  <a href="index.php?view=subject&studentId=<?php echo (isset($studentId)) ? $studentId : 'ID' ;?>&cid=<?php echo (isset($courseid)) ? $courseid : 'cid' ;?>&sy=<?php echo (isset($sy)) ? $sy : 'sy' ;?>" class="btn btn-default" style="background-color:#780000;"><span class="glyphicon glyphicon-back"></span>Back</a>
				  <button type="submit" class="btn btn-default" name="Add" style="background-color:#780000;"><span class="glyphicon glyphicon-plus-sign" ></span>Assign Selected</button>
				</div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
