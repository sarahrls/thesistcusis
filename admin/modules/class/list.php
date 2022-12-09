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
		td:nth-of-type(2):before { content: "Class Code"; }
		td:nth-of-type(3):before { content: "Instructor"; }
		td:nth-of-type(4):before { content: "Days And Time"; }
		td:nth-of-type(5):before { content: "Room"; }
		td:nth-of-type(6):before { content: "Section"; }
		td:nth-of-type(7):before { content: "Students"; }
	} 

</style>


<div class="container">
<h3 align="left" style="margin-top:5px; font-family:Poppins; font-size:24px; font-weight:900; ">List of Class</h3>
    <form action="#.php" Method="POST"> 

		<table id="example" class="display" cellspacing="0" width="100%">
	
	  <thead>
	 	<tr>
	 		 <th style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Class Code</th>
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Instructor</th> 
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Days And Time</th> 
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Room</th> 
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Section</th> 
	  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Students</th>
	 	</tr>	
	  </thead>
	  <tbody>
	  	<?php
	  		global $mydb;
	
	

	 	$mydb->setQuery("SELECT * 
				FROM  `instructor` i,  `class` c
				WHERE i.`INST_ID` = c.`INST_ID` ");
		 	loadresult();


	  		function loadresult(){
		  		global $mydb;
		  		$cur = $mydb->loadResultlist();
				foreach ($cur as $result) {
			  		echo '<tr>';
			  		echo '<td width="5%" align="center"></td>';
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"> ' . $result->CLASS_CODE.' </td>';
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->INST_FULLNAME.'</td>';
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->DAY.' /'. $result->C_TIME.'</a></td>'; 
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'.$result->ROOM.'</a></td>'; 
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'.$result->SECTION.'</a></td>'; 
			  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><a href="index.php?view=class&classId='.$result->CLASS_ID.'" style="color:#780000; margin-right:5px;">View List</a>';
                    echo '<a href="index.php?view=time&classId='.$result->CLASS_ID.'" style="color:#780000;">Edit</a></td>'; 
			  	 	echo '</tr>';
		  		}
		  	} 
	  	?>
	  </tbody>
	 
	</table>
	</span>



	<div class="btn-group">
	  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000; font-family:Poppins; "><span class="glyphicon glyphicon-plus-sign"></span> New</a>
	  
	</div> 
	</form>


</div><!--End of container-->
