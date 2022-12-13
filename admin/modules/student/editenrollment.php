<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['studentId'])){
		 
					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);
				
			}
			
			  ?>
 
		  <form class="form-horizontal span6" action="controller.php?action=enroll" method="POST">

					<div class="panel panel-primary">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span><span class="glyphicon glyphicon-user" ></span><a href="index.php" style="color:#780000;"><ion-icon name="arrow-back-outline"></ion-icon></a> Enroll Student</h3>
					  </div>
					  <div class="panel-body">

					   <div class="row">
			            <div class="col-8 col-sm-6 col-lg-8">
			             <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester" style="color:#780000; font-family:Poppins; font-size:14px;">ID Number: </label>
				              <div class="col-md-6">
				                <input class="form-control input-sm" id="idno" name="idno" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				          <div class="form-group" id="idno">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester" style="color:#780000; font-family:Poppins; font-size:14px;">Name: </label>
				              <div class="col-md-6">
				                <input class="form-control input-sm" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				      
			          
			              <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Status" style="color:#780000; font-family:Poppins; font-size:14px;">Status : </label>

				              <div class="col-md-6">
				                 <select class="form-control input-sm" name="Status" id="Status">
									<option value="Regular">Regular</option>
									<option value="Regular">Irregural</option>	
								</select>
				              </div>
				            </div>
				          </div>
			             <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "course" style="color:#780000; font-family:Poppins; font-size:14px;">Year and Section :</label>

				              <div class="col-md-6">
				               <select class="form-control input-sm" name="course" id="course">
				                  	<?php
				                  	$course = new Course();
				                  	$cur = $course->listOfcourse();	
				                  	foreach ($cur as $course) {
				                  		echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_DESC.'</option>';
				                  	}

				                  	?>
										
									</select>	
				              </div>
				            </div>
				          </div>
				          
			           
				           
			         
			             
			             <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "ay" style="color:#780000; font-family:Poppins; font-size:14px;">Academic Year :</label>

				              <div class="col-md-6">
				                <select class="form-control input-sm" name="ay" id="ay">
									<option value="2019-2020">2019-2020</option>	
									<option value="2020-2021">2020-2021</option>
									<option value="2021-2022">2021-2022</option>
									<option value="2022-2023">2022-2023</option>
								</select>	
				              </div>
				            </div>
				          </div>

				         <!--  <div class="form-group">
				            <div class="col-md-8">
				              <label class="col-md-6 control-label" for=
				              "Semester">Semester : </label>

				              <div class="col-md-6">
				                 <select class="form-control input-sm" name="Semester" id="Semester">
									<option value="First">First</option>
									<option value="Second">Second</option>	
									<option value="Summer">Summer</option>	
								</select>
				              </div>
				            </div>
				          </div> -->
				           <input class="form-control input-sm" id="Semester" name="Semester" placeholder=
                      "First" type="hidden" value="First">
				          <div class="form-group" id="idno">
				            <div class="col-md-10">
				               <label class="col-md-4 control-label"></label>

				                <div class="col-md-8">
				                	<?php
				                	if($_SESSION['ACCOUNT_TYPE']=='Administrator'){
						echo '
							         <div > 
							          
									    <button type="submit" name="savestep1" class="btn btn-default" style="background-color:#780000; font-family:Poppins; border-radius:5px;"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
									  
									  
									  
									</div>';
								}
								?>
				                </div>

				            </div>

				          </div>
				       
				          
			            </div><!--/span-->


			           

			        </div><!--End or row-->
				          



					  </div>
					</div>
									
				</form>
				  
		  </div>

		</div>