<div class="row">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php

  	 if (isset($_GET['instructorId'])){			
			$instructor = new Instructor();
			$cur = $instructor->single_instructor($_GET['instructorId']);			
		}
	  ?>
 
<form class="form-horizontal span4" action="controller.php?action=delsubj" method="POST">
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title" style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user"></span> Instructor's Subject </h3>
	  </div>
	  <div class="panel-body">
	   <div class="row" >	   
     	 <div class="container">

     	  <div class="well" > 

    	<form class="form-horizontal span4" action="" method="POST">
    		<table>			 
         	
		    <tbody>
		     	<tr>
		     		<td>
		     			<p style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;">
				     		<b>Full Name : </b><?php echo (isset($cur)) ? $cur->INST_FULLNAME : 'Fullname' ;?><br/>
				     		<b>Sex : </b><?php echo (isset($cur)) ? $cur->INST_SEX  : 'Sex' ;?><br/>
				     		<b>Employment Status : </b><?php echo (isset($cur)) ? $cur->EMPLOYMENT_STATUS : 'EMPLOYMENT STATUS' ;?><br/>
				     		<b>Specialization : </b><?php echo (isset($cur)) ? $cur->SPECIALIZATION : 'SPECIALIZATION' ;?><br/>
				     		<b>Address : </b><?php echo (isset($cur)) ? $cur->INST_ADDRESS : 'Address' ;?>

		     			</p>
		     		</td>
		     	</tr>
		    </tbody>
		   	   
			  
			</table>
		</form>
		<br>
		<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Subjects</h3>
			    <table id="example" class="display" cellspacing="0" width="100%">
				
				  <thead>
				  	<tr>
				  		<tr>
				  		<th width="10" style="font-size:16px; font-family:Poppins; font-weight:900;">No</th>	
				  		<th  width="20%" class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Subject</th>
				  		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
				  		<!--<th class="bottom">Semester</th>
				 		<th class="bottom">Course</th>-->
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Year/Sem</th>
				 	<!--	<th class="bottom">Pre-requisite</th>
				 		<th align="center" class="bottom">Unit</th>  -->
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Room</th>
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Days and Time</th>
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Students</th>

				  	</tr>	   
				  </thead>
				  <tbody>
				  	<?php

					 
						$mydb->setQuery("SELECT * 
								FROM  `subject` s,  `course` c  ,class cl
								WHERE s.`COURSE_ID` = c.`COURSE_ID` 
								AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
								AND  `INST_ID` = ".$_GET['instructorId']."");
						$cur = $mydb->loadResultlist();
						foreach ($cur as $result) {

					  		echo '<tr>';
					  		echo '<td width="10" align="center" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;"></td>';
					  		echo '<td width="20%" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CLASS_ID. '"/>
				  			'.$result->SUBJ_CODE .'</td>';
					  		echo '<td width="30%" style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $result->SUBJ_DESCRIPTION.'</td>';
					  	//	echo '<td>'. $result->SEMESTER.'</td>';
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $result->COURSE_NAME.'</td>';
					  	//	echo '<td>'. $result->COURSE_LEVEL.'</td>';
						//	echo '<td>'. $result->PRE_REQUISITE.'</td>';
						//	echo '<td align="center">'. $result->UNIT.'</td>';
							echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $result->ROOM.'</td>';
							echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $result->DAY.'/'. $result->C_TIME.'</td>';
							echo '<td><a href="index.php?view=class&id='.$result->CLASS_ID.'&instructorId='.$result->INST_ID.'" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;">View</a></td>';
						//	echo '<td><a href="#.php?id='.$result->CLASS_ID.'">'. $result->DAY.'/'. $result->C_TIME.'</a></td>';
							echo  '<input type="hidden" name="INST_ID" id="INST_ID" value="'.$result->INST_ID.'"/>';
					  		echo '</tr>';
				  		}
					  	 
				  	?>
				  </tbody>
	  		<!--	<tfoot>
				<?php
				/*	$mydb->setQuery("SELECT SUM(UNIT) as UN
						FROM  `subject` s,  `course` c  ,class cl
						WHERE s.`COURSE_ID` = c.`COURSE_ID` 
						AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
						AND  `INST_ID` = ".$_GET['instructorId']."");
					$result = $mydb->loadSingleResult();	 */
				  ?>
			  	<tr><td class="bottom"  colspan="7"></td></tr>
			  	<tr><td  colspan="6" align="Right"><Strong>Total</Strong></td><td align="center" ><strong><?php echo $result->UN; ?></strong></td></tr>
				<tr><td  colspan="7"></td></tr>				  	 
				</tfoot>	-->	
			</table>			
				<div class="btn-group" style="background-color:#780000; border-radius:5px;">
				  <a href="index.php" class="btn btn-default" style="background-color:#780000;">Back</a>
				   <a style="background-color:#780000;" href="index.php?view=assign&instructorId=<?php  echo (isset($_GET['instructorId'])) ? $_GET['instructorId']: 'ID' ; ?>" class="btn btn-default"><span class="glyphicon glyphicon-plus-sign" ></span>  Assign Subjects</a>
				   <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000; font-family:Poppins; "><span class="glyphicon glyphicon-trash" ></span> Delete Selected</button>
				</div>
		</form>
	 </div>      		         
   </div>
  </div><!--/span-->
</form>
  
  
</div>
</div>