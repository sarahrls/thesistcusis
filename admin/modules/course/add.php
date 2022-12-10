
<form class="form-horizontal well span6" action="controller.php?action=add" method="POST">

      <fieldset>
        <legend style="margin-top:5px; font-family:Poppins; font-weight:900; ">New Grade level</legend>
                          

          <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "coursename" style="color:#780000; font-size:17px; font-weight:500;">Grade</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="coursename" name="coursename" placeholder=
                        "Course Code" type="text" value="" style="font-size:15px;">
                  </div>
                </div>
              </div>

           <!--      <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "level">Level</label>

                  <div class="col-md-8"> -->
                     <input class="form-control input-sm" id="level" name="level" placeholder=
                        "Course Level" type="hidden" value="">
           <!--       </div>
                </div>
              </div> -->
            <!--   <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "major">Major</label>

                  <div class="col-md-8">
                      <select class="form-control input-sm" name="major" id="major">
                        <option value="None">None</option>
                        <?php
                     /*   $major = new Major();
                        $cur= $major->listOfmajor();
                        foreach ($cur  as $major) {
                          echo '<option value='.$major->MAJOR.'>'.$major->MAJOR.'</OPTION>';
                        }*/

                        ?>
                      </select> 
                      <input class="form-control input-sm" id="major" name="major" placeholder=
                        "Course Level" type="hidden" value="">
                  </div>
                </div>
              </div>
-->
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "coursedesc" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Description</label>

                  <div class="col-md-8">
                     <input class="form-control input-sm" id="coursedesc" name="coursedesc" placeholder=
                        "Course Description" type="text" value="" style="font-size:15px;">
                  </div>
                </div>
              </div>

        <!-- <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "dept">Department</label>

                  <div class="col-md-8">-->
                     
                        <?php
                        $dept = new dept();
                        $cur = $dept->listOfDept(); 
                        foreach ($cur as $Department) {
                          echo ' <input type="hidden" class="form-control input-sm" name="dept" id="dept" value="'. $Department->DEPT_ID.'">';
                        }

                        ?>
                
                
             <!--     </div>
                </div>
              </div>-->
         <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for=
                  "idno"></label>

                  <div class="col-md-8">
                        <a href="index.php" class="btn btn-default" style="background-color:#780000;">Back</a>
                    <button class="btn btn-default" name="savecourse" type="submit" style="background-color:#780000; font-family:Poppins;"><span class="glyphicon glyphicon-floppy-save" ></span> Save</button>
                  </div>
                </div>
              </div>

          
      </fieldset> 

              
    </form>

</div><!--End of container-->