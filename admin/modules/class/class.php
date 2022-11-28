<div class="container">	
	<?php

  	 if (isset($_GET['classId'])){			
			$mydb->setQuery("SELECT * 
								FROM  `subject` s,  `course` c  ,class cl
								WHERE s.`COURSE_ID` = c.`COURSE_ID` 
								AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
								AND  `CLASS_ID` = ".$_GET['classId']."");
			$cur = $mydb->loadSingleResult();		
		}
	  ?>
<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title" style="margin-top:5px; font-family:Poppins; font-weight:900; ">Class </h3>
	  </div>
	  <div class="panel-body">
	   <div class="row" >
	   <div class="container">	
		
    	<form class="form-horizontal span4" action="" method="POST">
    		<table class="table" align="center" >	 
    			
				  <tbody>				    
			     	<tr>
			     		<td style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;"><strong>Subject Code:</strong> <?php echo (isset($cur)) ? $cur->SUBJ_CODE : 'Code' ;?><br/>
			     		<strong>Description:</strong> <?php echo (isset($cur)) ? $cur->SUBJ_DESCRIPTION  : 'Description' ;?><br/>
			     	<!--	<td><?php //echo (isset($cur)) ? $cur->SEMESTER : 'Semester' ;?></td>-->
			     		<strong>Grade level:</strong> <?php echo (isset($cur)) ? $cur->COURSE_NAME : 'Course' ;?><br/>
			     	<!--	<td><?php //echo (isset($cur)) ? $cur->COURSE_LEVEL : 'Level' ;?></td>-->
			     		<strong>Days And Time:</strong> <?php echo (isset($cur)) ? $cur->DAY . ' ' .$cur->C_TIME : 'DaysTime' ;?><BR/>
			     		<strong>Room:</strong> <?php echo (isset($cur)) ? $cur->ROOM : 'Course' ;?><br/>
			     		<strong>Section:</strong> <?php echo (isset($cur)) ? $cur->SECTION : 'Course' ;?><br/>
			     	</td>
			     	 
			     	</tr>
		    	</tbody>
		    </table>
				</form>
	  	

</div><!--End of container-->
<div class="container">
	<?php
		check_message();
	?>
			<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Student</h3>
			    <form action="" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr id="table" >
				  		<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> ID#.</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Fullname</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Sex</th>
				  	<!--	<th>Age</th>
				  		<th>Birth Date</th>
				  		<th>Status</th>-->
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Midterm</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">FInals</th>
						<th style="font-size:16px; font-family:Poppins; font-weight:900;">Average</th>				  		
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Remarks</th>
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 

				  	global $mydb;
				

				  		$mydb->setQuery(" SELECT * 
										FROM  `class` c, `grades` g,  `tblstudent` s
										WHERE c.`SUBJ_ID` = g.`SUBJ_ID` 
										AND g.`IDNO` = s.`IDNO` AND CLASS_ID='".$_GET['classId']."'");
				  		loadresult();
				  	
				  		function loadresult(){
				  			global $mydb;
					  		$cur = $mydb->loadResultList();
							foreach ($cur as $student) {
					  		echo '<tr>';
					  		echo '<td width="5%" align="center" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;"></td>';
					  		// echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$student->IDNO. '"/>
					  		// 		<a href="edit_studentinfo.php?id='.$student->IDNO.'">' . $student->IDNO.'</a></td>';
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">' . $student->IDNO.'</td>';
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $student->LNAME. ',' .$student->FNAME.' '.$student->MNAME.'</td>';
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $student->SEX.'</td>';
					  		/*echo '<td>'. $student->AGE.'</td>';
					  		echo '<td>'. $student->BDAY.'</td>';
					  		echo '<td>'. $student->STATUS.'</td>';*/
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'.$student->FIRST.'</td>';
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $student->SECOND.'</td>';
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $student->AVE.'</td>';  
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $student->REMARKS.'</td>';  
					  		echo '</tr>';
					  		}

				  		} 
				  	
				  	?>


				  </tbody>
				 
				</table>
				<div class="btn-group">
				  <a href="index.php" class="btn btn-default" style="background-color:#780000; font-family:Poppins; ">Back</a>
				  <!--  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
				</div>
				</form>
	

</div><!--End of container-->
</div>
</div>
</div>
</div>