<?php

$userid = $_GET['id'];
$singlesubject = new User();
$object = $singlesubject->single_user($userid);

?>
<form class="form-horizontal well span4" action="controller.php?action=edit&id=<?php echo $userid;?>" method="POST">

 <fieldset>
            <legend  style="margin-top:5px; font-family:Poppins; font-size:24px; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>Edit User Account</legend>
                              
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="name" name="name" placeholder=
                            "Account Name" type="text" value="<?php echo $object->ACCOUNT_NAME;?>" style="font-size:15px;">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "username" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Username:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="username" name="username" placeholder=
                            "Email Address" type="text" value="<?php echo $object->ACCOUNT_USERNAME;?>" style="font-size:15px;">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "pass" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Password:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="pass" name="pass" placeholder=
                            "Account Password" type="Password" value="" style="font-size:15px;">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "type" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Type:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="type" id="type" style="font-size:15px;">
                          <option value="Administrator">Administrator</option>
                          <option value="Registrar">Registrar</option>
                          <option value="Course In-charge">Course In-charge</option>
                          <option value="Encoder">Encoder</option> 
                        </select> 
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

        <div class="form-group">
                <div class="rows">
                  <div class="col-md-6">
                    <label class="col-md-6 control-label" for=
                    "otherperson"></label>

                    <div class="col-md-6">
                   
                    </div>
                  </div>

                  <div class="col-md-6" align="right">
                   

                   </div>
                  
              </div>
              </div>
          
        </form>
      

        </div><!--End of container-->