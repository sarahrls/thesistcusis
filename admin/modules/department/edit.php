<?php

$deptid = $_GET['id'];
$singledept = new Dept();
$object = $singledept->single_dept($deptid);

?>
<?php
    check_message();
      
    ?>

 <form class="form-horizontal well span6" action="controller.php?action=edit&id=<?php echo $deptid;?>" method="POST">

          <fieldset>
            <legend style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a> Edit Department</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "deptname" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Department Name</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="<?php echo $object->DEPT_ID;?>">
                         <input class="form-control input-sm" id="deptname" name="deptname" placeholder=
                            "Department Name" type="text" value="<?php echo $object->DEPARTMENT_NAME;?>" style="font-size:15px;">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "deptdesc" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Department Description</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="deptdesc" name="deptdesc" placeholder=
                            "Department Description" type="text" value="<?php echo $object->DEPARTMENT_DESC;?>" style="font-size:15px;">
                      </div>
                    </div>
                  </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                            
                        <button class="btn btn-primary" name="save" type="submit" style="background-color:#780000; font-family:Poppins; ">Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 
          
        </form>
        </div><!--End of well-->

        </div><!--End of container-->
      