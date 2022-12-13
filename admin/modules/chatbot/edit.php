<?php

$chatbotid = $_GET['id'];
$chatbot = new Chatbot();
$object = $chatbot->single_query($chatbotid);

?>
<?php
    check_message();
      
    ?>

 <form class="form-horizontal well span6" action="controller.php?action=edit&id=<?php echo $chatbotid;?>" method="POST">

          <fieldset>
            <legend style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>Edit Query</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "questions" style="color:#780000; font-family:Poppins; font-size:14px;">Question</label>

                      <div class="col-md-8">
                        <input name="chatbotid" type="hidden" value="<?php echo $object->CHATBOT_ID;?>">
                         <input class="form-control input-sm" id="questions" name="questions" placeholder=
                            "QUESTION" type="text" value="<?php echo $object->QUERIES;?>">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "answers" style="color:#780000; font-family:Poppins; font-size:14px;">Answer</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="answers" name="answers" placeholder=
                            "Answer" type="text" value="<?php echo $object->ANSWERS;?>">
                      </div>
                    </div>
                  </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <button class="btn btn-primary" name="save" type="submit" style="background-color:#780000; font-family:Poppins;">Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 
          
        </form>
        </div><!--End of well-->

        </div><!--End of container-->
      