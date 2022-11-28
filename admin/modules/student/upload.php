<div class="container">
<div class="well">

    <div>
      <form action="controller.php?action=delsy&studentId=<?php echo $_GET['studentId']; method="POST" enctype="multipart/form-data">
        <label for="">Choose Your PDF File</label><br>
        <input id="COE" type="file" name="COE" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
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
