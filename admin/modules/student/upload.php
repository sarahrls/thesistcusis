<div class="container">
<div class="well">

    <div>
      <form action="controller.php?action=delsy&studentId=<?php echo $_GET['studentId']; ?>" method="POST" enctype="multipart/form-data">
        <h3 for="" style="margin-top:5px; font-family:Poppins; font-weight:900; ">Choose Your PDF File</h3><br>
        
         <div style="display:flex; justify-content:space-between; padding:2rem; ">
             <h5 style="margin-top:5px; font-family:Poppins; font-weight:900; fon">1st Year</h5>
          <div class="">
        <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:20px;">1st Sem</label>  
        <input id="COE" type="file" name="COE" value="" required><br><br>
          </div>
          
           <div class="">
        <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:10px;">2nd Sem</label>  
        <input id="COE" type="file" name="COE" value="" required><br><br>
          </div>
        </div>
          
           <div style="display:flex; justify-content:space-between; padding:2rem; ">
                <h5 style="margin-top:5px; font-family:Poppins; font-weight:900; fon">2nd Year</h5>
             <div class="">
        <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:10px;">1st Sem</label>  
        <input id="COE" type="file" name="COE" value="" required><br><br>
          </div>
          
            <div class="">
        <label style="color:#780000; font-family:Poppins; font-size:15px; ">2nd Sem</label>  
        <input id="COE" type="file" name="COE" value="" required><br><br>
          </div>
          </div>
          
           <div style="display:flex; justify-content:space-between; padding:2rem; ">
                <h5 style="margin-top:5px; font-family:Poppins; font-weight:900; fon">3rd Year</h5>
          <div class="">
        <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:10px;">1st Sem</label>  
        <input id="COE" type="file" name="COE" value="" required><br><br>
          </div>
          
          <div class="">
        <label style="color:#780000; font-family:Poppins; font-size:15px; ">2nd Sem</label>  
        <input id="COE" type="file" name="COE" value="" required><br><br>
          </div>
          </div>
          
           <div style="display:flex; justify-content:space-between; padding:2rem; ">
                <h5 style="margin-top:5px; font-family:Poppins; font-weight:900; fon">4th Year</h5>
          <div class="">
        <label style="color:#780000; font-family:Poppins; font-size:15px; margin-right:10px;">1st Sem</label>  
        <input id="COE" type="file" name="COE" value="" required><br><br>
          </div>
          
          <div class="">
        <label style="color:#780000; font-family:Poppins; font-size:15px; ">2nd Sem</label>  
        <input id="COE" type="file" name="COE" value="" required><br><br>
          </div>
          </div>
          <button class="btn btn-primary" id="upload" type="submit" name="submit" style="background-color:#780000; font-family:Poppins;">Submit</button>
        <?php
        include 'dbconfig.php';

        if (isset($_POST['submit'])) {
          $COE=$_FILES['COE']['name'];
          $COE_type=$_FILES['COE']['type'];
          $COE_size=$_FILES['COE']['size'];
          $COE_tem_loc=$_FILES['COE']['tmp_name'];
          $COE_store="COE/".$COE;

          //move_uploaded_file($COE_tem_loc,$COE_store);

          $sql="INSERT INTO tblstudcoe(COE) values('$COE')";
          $query=mysqli_query($conn,$sql);



        }



         ?>

      </form>

    </div>
				</form>
	  	</div><!--End of well-->

</div><!--End of container-->
