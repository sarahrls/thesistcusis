<?php
	// $subjid = $_GET['id'];
	// $singlesubject = new Subject();
	// $object = $singlesubject->single_subject($subjid);

			if (isset($_GET['classId'])){			
			$mydb->setQuery("SELECT * 
								FROM  `subject` s,  `course` c  ,class cl
								WHERE s.`COURSE_ID` = c.`COURSE_ID` 
								AND s.`SUBJ_ID`=cl.`SUBJ_ID` 
								AND  `CLASS_ID` = ".$_GET['classId']."");
			$cur = $mydb->loadSingleResult();	
		$INST_ID =   (isset($cur)) ? $cur->INST_ID : 'INST_ID' ; 

			}
			?>
		        <form class="form-horizontal well span4" action="controller.php?action=updatetime&classId=<?php echo $_GET['classId'];?>" method="POST">

					<fieldset>
						<legend style="margin-top:5px; font-family:Poppins; font-weight:900; "><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a>Update</legend>
															

							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjcode" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Subject Code</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="subjcode" name="subjcode" readonly placeholder=
													  "Subject Code" type="text" value="<?php echo (isset($cur)) ? $cur->SUBJ_CODE : 'Code' ;?>" style="font-size:15px;">
				              </div>
				            </div>
				          </div>

				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "subjdesc" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Subject Description</label>

				              <div class="col-md-8">
				                 <input class="form-control input-sm" id="subjdesc" name="subjdesc" readonly placeholder=
													  "Subject Description" type="text" value="<?php echo (isset($cur)) ? $cur->SUBJ_DESCRIPTION  : 'Description' ;?>" style="font-size:15px;">
				              </div>
				            </div>
				          </div>

				      <!--     <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "unit">No of units</label>

				              <div class="col-md-8">-->
				                 <input class="form-control input-sm" id="unit" name="unit" readonly placeholder=
													  "No of units" type="hidden" value="<?php echo (isset($cur)) ? $cur->UNIT  : 'UNIT';?>">
				           <!--   </div>
				            </div>
				          </div>
				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "pre">Prerequisite</label>

				              <div class="col-md-8">-->
				                 <input class="form-control input-sm" id="pre" name="pre" readonly placeholder=
													  "Prerequisite" type="hidden" value="<?php (isset($cur)) ? $cur->PRE_REQUISITE  : 'PRE_REQUISITE';?>">
				          <!--    </div>
				            </div>
				          </div>-->
				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "course" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Year/Sem</label>

				              <div class="col-md-8">
				              <input class="form-control input-sm" id="course_name" name="course_name" readonly placeholder=
													  "Prerequisite" type="text" value="<?php echo (isset($cur)) ? $cur->COURSE_NAME : 'Course' ;?>" style="font-size:15px;">
				                   
										
								 
				              </div>
				            </div>
				          </div>
				           <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "ay" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Academic Year</label>

				              <div class="col-md-8">
				                <input class="form-control input-sm" id="sy" name="sy" readonly placeholder=
													  "Prerequisite" type="text" value="<?php echo (isset($cur)) ? $cur->AY : 'Course';?>">
				              </div>
				            </div>
				          </div>
						<!--  <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "Semester">Semester</label>

				              <div class="col-md-8">-->
				                  <input class="form-control input-sm" id="semester" name="semester" readonly placeholder=
													  "Prerequisite" type="hidden" value="<?php echo (isset($cur)) ? $cur->SEMESTER : 'Semester' ;?>" style="font-size:15px;">
				          <!--    </div>
				            </div>
				          </div>-->
							<div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "ay" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Days</label>

				              <div class="col-md-8">
				                <select class="form-control input-sm"   name="day" id="day" style="font-size:15px;">
									<option value="MWF">MWF</option>
									<option value="TTH">TTH</option>
									<option value="S">S</option>
								</select>	
				              </div>
				            </div>
				          </div>
				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "rmname" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Room</label>

				              <div class="col-md-8">
				                <select class="form-control input-sm"   name="rmname" id="rmname" style="font-size:15px;">
				                	<?php
				                       $room = new Room();
				                      $cur = $room->listOfroom();
										foreach ($cur as $Room) {
				                       
				                          echo '<option value='. $Room->ROOM_NAME .'>'.$Room->ROOM_NAME.'</OPTION>';
				                        }

				                        ?>
								
								</select>	
				              </div>
				            </div>
				          </div>
				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "section" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Section</label>

				              <div class="col-md-8">
				                <input type="text" name="section" id="section" class="form-control input-sm" Placeholder="Section" style="font-size:15px;">
				              </div>
				            </div>
				          </div>
				          <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "ay" style="color:#780000; font-family:Poppins; font-size:17px; font-weight:500;">Time</label>
				              <div class="col-md-8">
				                <select class="form-control input-sm"  name="time" id="time" style="font-size:15px;">
									<option value="7:30-8:30">7:30-8:30</option>
									<option value="8:30-9:30">8:30-9:30</option>
									<option value="9:30-10:30">9:30-10:30</option>
									<option value="10:30-11:30">10:30-11:30</option>
									<option value="11:30-12:30">11:30-12:30</option>
									<option value="12:30-1:30">12:30-1:30</option>
									<option value="1:30-2:30">1:30-2:30</option>
									<option value="2:30-3:30">2:30-3:30</option>
									<option value="3:30-4:30">3:30-4:30</option>
									<option value="4:30-5:30">4:30-5:30</option>
									<option value="5:30-6:30">5:30-6:30</option>
									
								</select>	
				              </div>
				            </div>
				          </div>
						 <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-4 control-label" for=
				              "idno"></label>

				              <div class="col-md-8">
                              
				                <button class="btn btn-primary" name="savecourse" type="submit" style="background-color:#780000; font-family:Poppins; ">Save</button>
				              </div>
				            </div>
				          </div>							
					</fieldset>	

									
				</form>
				</div><!--End of container-->