<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">


          <fieldset>
            <legend style="margin-top:5px; font-family:Poppins; font-size:24px; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>New Room</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "rmname" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Room Name</label>

                      <div class="col-md-8">
                        <input name="roomid" type="hidden" value="">
                         <input class="form-control input-sm" id="rmname" name="rmname" placeholder=
                            "Room Name" type="text" value="" style="font-size:15px;">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "roomdesc" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Department Description</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="roomdesc" name="roomdesc" placeholder=
                            "Room Description" type="text" value="" style="font-size:15px;">
                      </div>
                    </div>
                  </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        
                        <button class="btn btn-default" name="save" type="submit" style="background-color:#780000; font-family:Poppins;"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
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