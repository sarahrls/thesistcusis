

<div class="container">
<div class="well">

    <div><?php
                $student = new Student();
				$cur = $student->single_student($_GET['studentId']);
        ?>
      <form action="controller.php?action=uploadcoe&id=<?php echo $cur->IDNO ?>" method="POST" enctype="multipart/form-data">
          

          <h3 for="" style="margin-top:5px; font-family:Poppins; font-weight:900; ">Choose PDF File</h3>
        
      
    <div class="">
        <?php
                $student = new Student();
				$cur = $student->single_student($_GET['studentId']);
            
        ?>
              <input class="form-control input-sm" id="idno" name="idno" placeholder=
												  "ID Number" type="number" value="<?php echo $cur->IDNO; ?>" readonly style="font-size:15px;">
        <h5 style="margin-top:5px; font-family:Poppins; font-weight:900; fon">1st Year</h5>
            <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:20px;">1st Sem</label> 
            <input id="COE" type="file" name="COE" value="" ><br>
              
            <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:10px;">2nd Sem</label>  
            <input id="COE2" type="file" name="COE2" value="" ><br><br>
    </div>
          
    <div class="">
        <h5 style="margin-top:5px; font-family:Poppins; font-weight:900; fon">2nd Year</h5>
            <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:20px;">1st Sem</label> 
            <input id="COE3" type="file" name="COE3" value="" ><br>
              
            <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:10px;">2nd Sem</label>  
            <input id="COE4" type="file" name="COE4" value="" ><br><br>
        
    </div>
          
    <div class="">
        <h5 style="margin-top:5px; font-family:Poppins; font-weight:900; fon">3rd Year</h5>
            <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:20px;">1st Sem</label> 
            <input id="COE5" type="file" name="COE5" value="" ><br>
              
            <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:10px;">2nd Sem</label>  
            <input id="COE6" type="file" name="COE6" value="" ><br><br>
    </div>
    
    <div class="">
        <h5 style="margin-top:5px; font-family:Poppins; font-weight:900; fon">4th Year</h5>
            <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:20px;">1st Sem</label> 
            <input id="COE7" type="file" name="COE7" value="" ><br>
              
            <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:10px;">2nd Sem</label>  
            <input id="COE8" type="file" name="COE8" value="" ><br><br>
    </div>
          
          <button class="btn btn-primary" id="submit" type="submit" name="submit" style="background-color:#780000; font-family:Poppins;">Submit</button>
        <?php
        
        //include 'dbconfig.php';

/**        if (isset($_POST['submit'])) {
          $COE=$_FILES['COE']['name'];
          $COE_type=$_FILES['COE']['type'];
          $COE_size=$_FILES['COE']['size'];
          $COE_tem_loc=$_FILES['COE']['tmp_name'];
          $COE_store="COE/".$COE;

          //move_uploaded_file($COE_tem_loc,$COE_store);

          $sql="INSERT INTO tblstudcoe(COE) values('$COE')";
          $query=mysqli_query($conn,$sql);



        }


**/
         ?>
          
          

      </form>

    </div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->


<?php
		check_message();
			
		?>
		<div class="well">

			    <form action="controller.php?action=delete" Method="POST">  
					<caption><h3 align="left" style="margin-top:5px; font-family:Poppins; font-weight:900; ">List of Uploads</h3></caption>					
				<table id="example"  class="table table-hover">
				  <thead>
				  	<tr>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;"> <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Upload Name</th>
				  		<th style="font-size:16px; font-family:Poppins; font-weight:900;">Upload Name</th>
                        <th style="font-size:16px; font-family:Poppins; font-weight:900;">Action</th>
				 
				  	</tr>	
				  </thead>
				  <tbody>
				  	<?php 
				  		$upload = new Upload();
						$cur = $upload->listOfupload();
						foreach ($cur as $Upload) {
				  		echo '<tr>';

				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><input type="checkbox" name="selector[]" id="selector[]" value="'.$Upload->COE_ID. '"/>' . $Upload->COE.'</td>';
				  		echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;">'. $Upload->COE2.'</td>';
                        echo '<td style="font-size:15px; font-family:Poppins; font-weight:500;"><a href="index.php?view=edit&id='.$Upload->COE_ID.'" style="color:#780000;">Edit</a></td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>	
				</table>
				<?php
				if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
				<div class="btn-group" style="background-color:#780000; border-radius:5px;">
				  <a href="index.php?view=add" class="btn btn-default" style="background-color:#780000;"><span class="glyphicon glyphicon-plus-sign"></span> New</a>
				  <button type="submit" class="btn btn-default" name="delete" style="background-color:#780000;"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>';
			}
				?>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->

