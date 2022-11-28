<?php

$subjid = $_GET['id'];
$singlesubject = new Subject();
$object = $singlesubject->single_subject($subjid);

?>
<form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $subjid;?>" method="POST">

<fieldset>
	<legend style="margin-top:5px; font-family:Poppins; font-weight:900; ">Edit Subject</legend>
										

		<div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "subjcode" style="color:#780000; font-family:Poppins; font-size:14px;">Subject Code</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
								  "Subject Code" type="text" value="<?php echo $object->SUBJ_CODE;?>">
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "subjdesc" style="color:#780000; font-family:Poppins; font-size:14px;">Subject Description</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
								  "Subject Description" type="text" value="<?php echo $object->SUBJ_DESCRIPTION;?>">
          </div>
        </div>
      </div>

       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "unit" style="color:#780000; font-family:Poppins; font-size:14px;">No of units</label>

          <div class="col-md-8">
             <input class="form-control input-sm" id="unit" name="unit" placeholder=
								  "No of units" type="number" value="<?php echo $object->UNIT;?>">
          </div>
        </div>
      </div>
<!--       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "pre">Prerequisite</label>

          <div class="col-md-8">-->
             <input class="form-control input-sm" id="pre" name="pre" placeholder=
								  "Prerequisite" type="hidden" value="<?php echo $object->PRE_REQUISITE;?>">
      <!--    </div>
        </div>
      </div>-->
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "course" style="color:#780000; font-family:Poppins; font-size:14px;">Year level</label>

          <div class="col-md-8">
           <select class="form-control input-sm" name="course" id="course">
              	<?php
              	$course = new Course();
              	$cur = $course->listOfcourse();	
              	foreach ($cur as $course) {
              		echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.'</option>';
              	}

              	?>
					
				</select>	
          </div>
        </div>
      </div>
       <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "ay" style="color:#780000; font-family:Poppins; font-size:14px;">Academic Year</label>

          <div class="col-md-8">
            <select class="form-control input-sm" name="ay" id="ay">
				<option value="2017-2018">2017-2018</option>
				<option value="2018-2019">2018-2019</option>
				<option value="2019-2020">2019-2020</option>	
				<option value="2019-2020">2020-2021</option>	
				<option value="2019-2020">2021-2022</option>	
				<option value="2019-2020">2022-2023</option>	
			</select>	
          </div>
        </div>
      </div>
<!--	  <div class="form-group">
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "Semester">Semester</label>

          <div class="col-md-8">
             <select class="form-control input-sm" name="Semester" id="Semester">
				<option value="First">First</option>
				<option value="Second">Second</option>	
				<option value="Second">Summer</option>	
			</select>-->
			  <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "Prerequisite" type="hidden" value="First">
     <!--     </div>
        </div>
      </div>-->
	<?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
	 <div class="form-group" >
        <div class="col-md-8">
          <label class="col-md-4 control-label" for=
          "idno"></label>

          <div class="col-md-8">
             <a href="index.php" name="back" class="btn btn-default" style="background-color:#780000; font-family:Poppins; border-radius:5px;"></span>Back</a>
            <button class="btn btn-primary" name="savecourse" type="submit" style="background-color:#780000;">Save</button>
          </div>
        </div>
      </div>';
    }
    ?>

		
</fieldset>	

				
</form>
</div><!--End of container-->