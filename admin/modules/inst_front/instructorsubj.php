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
		td:nth-of-type(2):before { content: "Subject"; }
		td:nth-of-type(3):before { content: "Description"; }
		td:nth-of-type(4):before { content: "Year and Sem"; }
		td:nth-of-type(5):before { content: "Room"; }
		td:nth-of-type(6):before { content: "Days and Time"; }
		td:nth-of-type(7):before { content: "Students"; }
	} 
    
</style>

<div class="row">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php 

				$mydb->setQuery("SELECT * 
									FROM instructor
									WHERE  `INST_EMAIL` ='{$_SESSION['ACCOUNT_USERNAME']}'");
				$inst = $mydb->loadSingleResult();
			?>
 
<form class="form-horizontal span4" action="controller.php?action=delsubj" method="POST">
	<div class="panel panel-primary">
	  <div class="panel-heading">
	    <h3 class="panel-title" style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>Instructor's Subject </h3>
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
		     			<p>
				     		<b style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;">Full Name : </b><?php echo (isset($inst)) ? $inst->INST_FULLNAME : 'Fullname' ;?><br/>
				     		<b style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;">Sex : </b><?php echo (isset($inst)) ? $inst->INST_SEX  : 'Sex' ;?><br/>
				     		<b style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;">Employment Status : </b><?php echo (isset($inst)) ? $inst->EMPLOYMENT_STATUS : 'EMPLOYMENT STATUS' ;?><br/>
				     		<b style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;">Specialization : </b><?php echo (isset($inst)) ? $inst->SPECIALIZATION : 'SPECIALIZATION' ;?><br/>
				     		<b style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;">Address : </b><?php echo (isset($inst)) ? $inst->INST_ADDRESS : 'Address' ;?>

		     			</p>
		     		</td>
		     	</tr>
		    </tbody>
		   	   
			  
			</table>
		</form>
		<br>
		<h3 align="left">List of Subjects</h3>
			    <table id="example" class="display" cellspacing="0" width="100%">
				
				  <thead>
				  	<tr>
				  		<tr style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;">
				  		<th width="10" style="font-size:16px; font-family:Poppins; font-weight:900;">No</th>	
				  		<th  width="20%" class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Subject</th>
				  		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
				  		<!--<th class="bottom">Semester</th>
				 		<th class="bottom">Course</th>-->
				 		<th class="bottom" style="font-size:16px; font-family:Poppins; font-weight:900;">Year and Sem</th>
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
								AND  `INST_ID` = ".$inst->INST_ID."");
						$cur = $mydb->loadResultlist();
						foreach ($cur as $result) {

					  		echo '<tr>';
					  		echo '<td width="10" align="center"></td>';
					  		echo '<td width="20%" style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->CLASS_ID. '"/>
				  			'.$result->SUBJ_CODE .'</td>';
					  		echo '<td width="30%" style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->SUBJ_DESCRIPTION.'</td>';
					  	//	echo '<td>'. $result->SEMESTER.'</td>';
					  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->COURSE_NAME.'</td>';
					  	//	echo '<td>'. $result->COURSE_LEVEL.'</td>';
						//	echo '<td>'. $result->PRE_REQUISITE.'</td>';
						//	echo '<td align="center">'. $result->UNIT.'</td>';
							echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->ROOM.'</td>';
							echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->DAY.'/'. $result->C_TIME.'</td>';
							echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><a style="color:#780000;" href="index.php?view=class&id='.$result->CLASS_ID.'&instructorId='.$result->INST_ID.'">View</a>';
                            
                            echo '<a href = "#" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;"><span class="glyphicon glyphicon-trash"></span> Delete</a>       
                            </td>';
                       
						//	echo '<td><a href="#.php?id='.$result->CLASS_ID.'">'. $result->DAY.'/'. $result->C_TIME.'</a></td>';
							echo  '<input type="hidden" name="INST_ID" id="INST_ID" value="'.$result->INST_ID.'" style="font-size:15px; font-family:Poppins; font-weight:500;"/>';
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
				
		</form>
	 </div>      		         
   </div>
  </div><!--/span-->
</form>
  
  
</div>
</div>