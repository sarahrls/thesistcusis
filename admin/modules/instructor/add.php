<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">

    <form class="form-horizontal well span4" action="#.php" method="POST">

          <fieldset >
            <legend style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>New Faculty</legend>
                              

              <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "name" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Fullname:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="name" name="name" placeholder=
                            "Account Name" type="text" value="" style="font-size:15px;">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "address" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Current Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="address" name="address" placeholder=
                            "Current Address" type="text" value="" style="font-size:15px;">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "Gender" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Gender:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="Gender" id="Gender" style="font-size:15px;">
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "civilstats" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Civil Status:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="civilstats" id="civilstats" style="font-size:15px;">
                          <option value="Single">Single</option>
                          <option value="Married">Married</option>
                          
                        </select> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "specialization" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Specialization:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="specialization" name="specialization" placeholder=
                            "Specialization" type="text" value="" style="font-size:15px;">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "empStats" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Employment Status:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="empStats" name="empStats" placeholder=
                            "Employment Status" type="text" value="" style="font-size:15px;">
                      </div>
                    </div>
                  </div>
                  


            <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "email" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Email Address:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input class="form-control input-sm" id="email" name="email" placeholder=
                            "Email Address" type="email" value="" style="font-size:15px;">
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
                      "idno"></label>

                      <div class="col-md-8">
                         
                        <button class="btn btn-default" name="savefaculty" type="submit" style="background-color:#780000;"><span class="glyphicon glyphicon-floppy-save" ></span> Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 

                  
        </form>
        </div><!--End of container-->