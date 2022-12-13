<style type="text/css">

    .wells{
        font-size: 20px;
    }
    
   

</style>


<div class="container">
<div class="well">

			    <form action="controller.php?action=delsy&studentId=<?php echo $_GET['studentId']; ?>" Method="POST">  					
				<table class="table table-hover">
				<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user"></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>Student Enrollment Records</h3>
                    
                    <a href="index.php?view=enroll&studentId='. $_GET['studentId'].'" class="btn btn-default" style="background-color:#780000; font-family:Poppins;"><span class="glyphicon glyphicon-plus-sign"></span > New</a>
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');" > Year/Sem</th>
				  	<!--	<th>Semester</th>-->
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">School Year</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Status</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Date Enrolled</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Options</th>
				 
				  	</tr>	
				  </thead>
				  <tbody >
				  	<?php 
				  		$mydb->setQuery("SELECT  `COURSE_NAME` ,COURSE_DESC,  `SYID` ,  `AY` ,  `SEMESTER` , s.`COURSE_ID` ,  `IDNO` ,  `CATEGORY` ,  `DATE_RESERVED` ,  `DATE_ENROLLED` ,  `STATUS` 
										FROM  `schoolyr` s,  `course` c
										WHERE s.`COURSE_ID` = c.`COURSE_ID` AND IDNO=".$_GET['studentId']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td><input type="checkbox" name="selector[]" id="selector[]" value="'.$schoolyr->SYID. '"/>
				  				<a href="index.php?view=editenrollment&studentId='.$_GET['studentId'].'&id='.$schoolyr->SYID.'" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;">' . $schoolyr->COURSE_DESC.'</a></td>';
				  //		echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $schoolyr->AY.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $schoolyr->STATUS.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:10px;">'. $schoolyr->DATE_RESERVED.'</td>';
				  		echo '<td><a href = "index.php?view=subject&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;">Enrolled Subjects</a>';
                            
                        echo '<a href = "#" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;"><span class="glyphicon glyphicon-trash"></span> Delete</a>    
                        </td>';
                        //echo '<a href = "index.php?view=view&studentId='.$schoolyr->COE.'" ><span class="glyphicon glyphicon-list-alt"> </span> Upload File </a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				 	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator') {
		
			echo   '
                 
				 ';
				
				 }
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->