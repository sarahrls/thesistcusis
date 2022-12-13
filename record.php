<head>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>


<style type="text/css">
   
    body{
background-image:url('images/tcu.png');
background-repeat:no-repeat;
background-attachment:fixed;
background-size: 100% 100%;
background-color: rgba(0,0,0,1.50);
        }
</style>



<div style="margin-top:120px; ">
<div class="container" src="images/tcu.png" style="margin-top: 90px; border: 2px solid black; border-radius: 10px; background-color:white;"> 
	  <caption><h3 align="left" style="margin-top:20px; color:#780000; font-size:35px;  font-family:Poppins; font-weight:1000px;"><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>Student Grade Records</h3></caption>
			    <form action="controller.php?action=delsy&studentId=<?php echo $_SESSION['IDNO']; ?>" Method="POST">  					
				<table class="table table-hover">
				  <thead>
				  	<tr>
				  		<th>Year and Sem</th> 
				  		<th>Schoolyr</th>
				  		<th>Status</th>
				  		
				  		<th>Options</th> 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT  `COURSE_NAME` ,COURSE_DESC,  `SYID` ,  `AY` ,  `SEMESTER` , s.`COURSE_ID` ,  `IDNO` ,  `CATEGORY` ,   `STATUS` 
										FROM  `schoolyr` s,  `course` c
										WHERE s.`COURSE_ID` = c.`COURSE_ID` AND IDNO=".$_SESSION['IDNO']);
				  		$cur = $mydb->loadResultList();
						foreach ($cur as $schoolyr) {
						//	`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`
				  		echo '<tr>';

				  		echo '<td>' . $schoolyr->COURSE_DESC.'</td>';
				  //		echo '<td>'. $schoolyr->SEMESTER.'</td>';
				  		echo '<td>'. $schoolyr->AY.'</td>';
				  		echo '<td>'. $schoolyr->STATUS.'</td>';
				  		
				  		echo '<td ><a  style="color:#fff; font-weight:700px; padding:5px; border-radius:5px; background-color:#780000; border:solid 2px #780000;" href = "index.php?page=4&studentId='.$schoolyr->IDNO.'&cid='.$schoolyr->COURSE_ID.'&sy='.$schoolyr->SYID.'">View Grades</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td></tr>
				  </tfoot>	
				</table>
			
				</form>
	  	</div><!--End of well-->
    </div>
</div><!--End of container-->