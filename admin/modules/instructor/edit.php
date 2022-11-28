<?php
  $instid = $_GET['id'];
  $singleinstructor = new Instructor();
  $object = $singleinstructor->single_instructor($instid);

?>
 <form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $instid;?>" method="POST">

          <fieldset>
            <legend style="margin-top:5px; font-family:Poppins; font-weight:900; ">Edit Faculty</legend>
                              

              <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name" style="color:#780000; font-family:Poppins; font-size:14px;">Fullname:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="name" name="name" placeholder=
                            "Account Name" type="text" value="<?php echo $object->INST_FULLNAME;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "address" style="color:#780000; font-family:Poppins; font-size:14px;">Current Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="address" name="address" placeholder=
                            "Current Address" type="text" value="<?php echo $object->INST_ADDRESS;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Gender" style="color:#780000; font-family:Poppins; font-size:14px;">Gender:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="Gender" id="Gender">
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "civilstats" style="color:#780000; font-family:Poppins; font-size:14px;">Civil Status:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="civilstats" id="civilstats">
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "specialization" style="color:#780000; font-family:Poppins; font-size:14px;">Specialization:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="specialization" name="specialization" placeholder=
                            "Specialization" type="text" value="<?php echo $object->SPECIALIZATION;?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "empStats" style="color:#780000; font-family:Poppins; font-size:14px;">Employment Status:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="empStats" name="empStats" placeholder=
                            "Employment Status" type="text" value="<?php echo $object->EMPLOYMENT_STATUS;?>">
                      </div>
                    </div>
                  </div>
                  


            <!-- <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email">Email Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value=""> -->
                         <input class="form-control input-sm" id="email" name="email" placeholder=
                            "Email Address" type="hidden" value="<?php echo $object->INST_EMAIL;?>">
                <!--     </div>
                  </div>
                      </div>
 -->


                  
            <?php
                          if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
            echo '
                        
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8" >
                        <button class="btn btn-default" name="savefaculty" type="submit" style="background-color:#780000;"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
                      </div>
                    </div>
                  </div>';
                }
                ?>

              
          </fieldset> 

                  
        </form>
        </div><!--End of container-->