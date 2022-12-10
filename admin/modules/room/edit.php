<?php

$rmid = $_GET['id'];
$room = new Room();
$object = $room->single_room($rmid);

?>
<?php
    check_message();
      
    ?>

 <form class="form-horizontal well span6" action="controller.php?action=edit&id=<?php echo $rmid;?>" method="POST">

          <fieldset>
            <legend style="margin-top:5px; font-family:Poppins; font-size:24px; font-weight:900; ">Edit Room</legend>
                              
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "rmname" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Room Name</label>

                      <div class="col-md-8">
                        <input name="roomid" type="hidden" value="<?php echo $object->ROOM_ID;?>">
                         <input class="form-control input-sm" id="rmname" name="rmname" placeholder=
                            "Room Name" type="text" value="<?php echo $object->ROOM_NAME;?>" style="font-size:15px;">
                      </div>
                    </div>
                  </div>

             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "roomdesc" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Room Description</label>

                      <div class="col-md-8">
                           <input class="form-control input-sm" id="roomdesc" name="roomdesc" placeholder=
                            "Room Description" type="text" value="<?php echo $object->ROOM_DESC;?>" style="font-size:15px;">
                      </div>
                    </div>
                  </div>
             <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>

                      <div class="col-md-8">
                        <a href="index.php" class="btn btn-default" style="background-color:#780000;">Back</a>
                        <button class="btn btn-primary" name="save" type="submit" style="background-color:#780000; font-family:Poppins;">Save</button>
                      </div>
                    </div>
                  </div>

              
          </fieldset> 
          
        </form>
        </div><!--End of well-->

        </div><!--End of container-->
      