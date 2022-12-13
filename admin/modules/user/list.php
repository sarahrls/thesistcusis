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
		td:nth-of-type(2):before { content: "Account Name"; }
		td:nth-of-type(3):before { content: "Username"; }
		td:nth-of-type(4):before { content: "Type"; }
	} 

</style>


<h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of User</h3>
  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000; font-family:Poppins;">New</a>
			    <form action="controller.php?action=delete" Method="POST">  					
				<table id="example" class="table table-striped" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">No.</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">
				  		 <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> 
				  		 Account Name</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Username</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Type</th>
                        
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$mydb->setQuery("SELECT * 
											FROM  `useraccounts`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		echo '<td width="5%" align="center"></td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$result->ACCOUNT_ID. '"/>
				  				<a href="index.php?view=edit&id='.$result->ACCOUNT_ID.'" style="color:#780000;">' . $result->ACCOUNT_NAME.'</a></td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->ACCOUNT_USERNAME.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $result->ACCOUNT_TYPE.'</td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div >
				
				  <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000; font-family:Poppins;"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			} ?>
			
				</form>
	

</div><!--End of container-->
