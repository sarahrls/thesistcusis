<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">


          <fieldset>
            <legend style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>New Queries</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "questions" style="color:#780000; font-family:Poppins; font-size:14px;">Question</label>

                      <div class="col-md-8">
                        <input name="chatbotid" type="hidden" value="">
                         <input class="form-control input-sm" id="questions" name="questions" placeholder=
                            "Question" type="text" value="">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "answers" style="color:#780000; font-family:Poppins; font-size:14px;">Answer</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="answers" name="answers" placeholder=
                            "Answer" type="text" value="">
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