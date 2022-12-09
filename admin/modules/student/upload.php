

<div class="container">
<div class="well">
    <?php 
                $student = new Student();
				$cur = $student->single_student($_GET['studentId']);
            
    ?>
    <div>
      <form action="controller.php?action=uploadcoe&studentId=<?php echo $cur->IDNO; ?>" method="POST" enctype="multipart/form-data">
          
          <td>
              <br>              
              <p style="font-size:16px; font-family:Poppins; font-weight:500; margin-left:10px;">
                    <b>ID Number: </b><?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?><br>
                <?php 
                //$coeId = $_GET['coeId'];
                //$upload = new Upload();
				//$cur = $upload->single_upload($_GET['coeId']);
            
    ?>
                  <input name="coeId" type="hidden" value="">
                  <input class="form-control input-sm" id="idno" name="idno" placeholder=
												  "ID Number" type="number" value="<?php echo $cur->IDNO; ?>" readonly>
                  
				    <b>Name: </b><?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?><br/>
				</p>
          </td>
          
          <h3 for="" style="margin-top:5px; font-family:Poppins; font-weight:900; ">Choose PDF File</h3>
        
      
             
    <div class="">
              
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
          
          <button class="btn btn-primary" id="upload" type="submit" name="submit" style="background-color:#780000; font-family:Poppins;">Submit</button>
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
