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
		td:nth-of-type(1):before { content: "Year/Sem"; }
		td:nth-of-type(2):before { content: "Description"; }
        td:nth-of-type(2):before { content: "Action"; }
		
	}
    
      

</style>

<div class="container">
<div class="well">
	<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Year and Semester</h3>
    <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000; font-family:Poppins; margin-top:-30px; margin-bottom:20px;"><span class="glyphicon glyphicon-plus-sign"></span>  New</a>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
					
				  <thead>
				  	<tr>
				  		<!--  <th>No.</th> -->
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Year/Sem</th>
				  		
				  	<!--	 <th>Major</th>-->
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Description</th>
                        <th style="font-size:16px; font-family:Poppins; font-weight:900;">Action</th>
				  		<!--  <th width="">Level</th> -->
				  	<!--	<th align="center">Department</th>-->
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php
	  			  		$mydb->setQuery("SELECT * 
						FROM  `course` c,  `department` d
						WHERE c.`DEPT_ID` = d.`DEPT_ID` ORDER BY COURSE_NAME, COURSE_LEVEL");
				  		
						  	loadresult();
					  	
					function loadresult(){
					  		global $mydb; 
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
						//echo '<td width="5%" align="center"></td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->COURSE_ID. '"/>
				  				' . $result->COURSE_NAME.'</a></td>';
				  	
				  		//echo '<td>'. $result->COURSE_MAJOR.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->COURSE_DESC.'</td>';
                        echo '<td style="font-size:15px; font-family:Poppins; font-weight:500; margin-left:70px; font-color:#780000;"> <a href="index.php?view=edit&id='.$result->COURSE_ID.'" style="color:#780000; margin-left:18px; margin-right:10px;"> Edit</a>';
                            
                         echo '<a href = "#" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;"><span class="glyphicon glyphicon-trash"></span> Delete</a></td>';
				  		//echo '<td align="left">'. $result->COURSE_LEVEL.'</td>';
				  		//echo '<td>'. $result->DEPARTMENT_DESC.'</td>';
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