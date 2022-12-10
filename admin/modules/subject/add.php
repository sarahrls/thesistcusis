<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">

    <fieldset>
      <legend style="margin-top:20px; font-family:Poppins; font-weight:900;">New Subject</legend>
                        

        <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "subjcode" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Subject Code</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="subjcode" name="subjcode" placeholder=
                      "Subject Code" type="text" value="" style="font-size:15px;">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "subjdesc" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Subject Description</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="subjdesc" name="subjdesc" placeholder=
                      "Subject Description" type="text" value="" style="font-size:15px;">
                </div>
              </div>
            </div>

             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "unit" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">No of units</label>

                <div class="col-md-8">
                   <input class="form-control input-sm" id="unit" name="unit" placeholder=
                      "No of units" type="text" value="" style="font-size:15px;">
                </div>
              </div>
            </div>
         <!--    <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "pre">Prerequisite</label>

                <div class="col-md-8">-->
                   <input class="form-control input-sm" id="pre" name="pre" placeholder=
                      "Prerequisite" type="hidden" value="" style="font-size:15px;">
            <!--    </div>
              </div>
            </div>-->
             <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "course" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Year level</label>

                <div class="col-md-8">
                 <select class="form-control input-sm" name="course" id="course" style="font-size:15px;">
                      <?php
                      $course = new Course();
                      $cur = $course->listOfDistinctcourse(); 
                      foreach ($cur as $course) {
                        echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.' </option>';
                      }

                      ?>
              
            </select> 
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "ay" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Academic Year</label>

                <div class="col-md-8">
                  <select class="form-control input-sm" name="ay" id="ay" style="font-size:15px;">
            <option value="2013-2014">2013-2014</option>
            <option value="2014-2015">2014-2015</option>
            <option value="2015-2016">2015-2016</option>
            <option value="2016-2017">2016-2017</option>
            <option value="2017-2018">2017-2018</option>
            <option value="2018-2019">2018-2019</option>
            <option value="2019-2020">2019-2020</option>  
          </select> 
                </div>
              </div>
            </div>
      <!--  <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "Semester">Semester</label>

                <div class="col-md-8">
                   <select class="form-control input-sm" name="Semester" id="Semester">
            <option value="First">First</option>
            <option value="Second">Second</option>  
            <option value="Summer">Summer</option>  
          </select>-->
          <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "Prerequisite" type="hidden" value="First">
           <!--     </div>
              </div>
            </div>
      -->

       <div class="form-group">
              <div class="col-md-8">
                <label class="col-md-4 control-label" for=
                "idno"></label>

                <div class="col-md-8">
                    <a href="index.php" name="back" class="btn btn-default" style="background-color:#780000; font-family:Poppins; border-radius:5px;">Back</a>
                  <button class="btn btn-default" name="savecourse" type="submit" style="background-color:#780000; font-family:Poppins;"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                 <button class="btn btn-default" name="saveandnewcourse" type="submit" style="background-color:#780000; font-family:Poppins;"><span class="glyphicon glyphicon-floppy-save"></span> Save and Add New</button>
                </div>
              </div>
            </div>

        
    </fieldset> 

            
  </form>
  </div><!--End of container-->