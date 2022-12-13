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
		td:nth-of-type(1):before { content: "Department Name"; }
		td:nth-of-type(2):before { content: "Department Description"; }
		td:nth-of-type(3):before { content: "Action"; }
		
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
    

</style>

<?php
		check_message();
			
		?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  	
					<caption><h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Department</h3></caption>	
                    <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000; font-family:Poppins; margin-top:-30px; margin-bottom:20px;"><span class="glyphicon glyphicon-plus-sign" ></span>  New</a>
				<table id="example" class="table table-hover">
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Department Name</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Department Description</th>
                        <th style="font-size:16px; font-family:Poppins; font-weight:900;">Action</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$dept = new Dept();
						$cur = $dept->listOfDept();
						foreach ($cur as $Department) {
				  		echo '<tr>';

				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$Department->DEPT_ID. '"/>' . $Department->DEPARTMENT_NAME.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $Department->DEPARTMENT_DESC.'</td>';
                        echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;" ><a href="index.php?view=edit&id='.$Department->DEPT_ID.'" style="color:#780000;"> Edit </a>';
                            
                        echo '<a href = "#" style="color:#780000; font-size:15px; font-family:Poppins; font-weight:500;"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
				  <tfoot>
				  	<tr><td></td><td></td><td></td></tr>
				  </tfoot>	
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
