<div class="rows">

  <div class="col-12 col-sm-12 col-lg-12">
	<?php
		  	 if (isset($_GET['studentId'])){
		 
					$student = new Student();
					$cur = $student->single_student($_GET['studentId']);
				
			}
			
			  ?>
 
		  <form class="form-horizontal span6" action="controller.php?action=enroll" method="POST">

					<div class="panel panel-primary col-offset-5">
					  <div class="panel-heading">
					    <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Enroll Student</h3>
					  </div>
					  <div class="panel-body">

					   <div class="row">  
				            <div class="col-md-8 ">
      						<div class="form-group">
				              <label for=
				              "Semester">ID Number: </label> 
				                <input class="form-control input-sm" id="idno" name="idno" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->IDNO : 'ID' ;?>">
								</div>	  
				         			                       	
				            </div> 
				      	</div>
				          <div class="row" id="idno">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "Semester">Name: </label> 
				                <input class="form-control input-sm" readonly placeholder=
									  "ID Number" type="text" value="<?php echo (isset($cur)) ? $cur->LNAME.', '.$cur->FNAME : 'Fullname' ;?>">
								</div>	  
				         			                       	
				            </div>
				          </div>
				      
			          
			              <div class="row">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "Status">Status : </label> 
				                 <select class="form-control input-sm" name="Status" id="Status">
									<option value="Regular">Regular</option>
									<option value="Regular">Irregural</option>		
								</select>
				              </div>
				            </div>
				          </div>

			             <div class="row">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "course">Year and Section :</label> 
				               <select class="form-control input-sm" name="course" id="course">
				                  	<?php
				                $mydb->setQuery("SELECT DISTINCT  `COURSE_NAME` ,  `COURSE_ID` 
									FROM course");
									$cur = $mydb->loadResultList();
				                  	foreach ($cur as $course) {
				                  		echo '<option value="'. $course->COURSE_ID.'">'.$course->COURSE_NAME.'</option>';
				                  	}

				                  	?>
										
									</select>	
				              </div>
				            </div>
				          </div>
				          
			           
				           
			         
			             
			             <div class="row">
				            <div class="col-md-8">
      						<div class="form-group">
				              <label for=
				              "ay">Academic Year :</label> 
				                <select class="form-control input-sm" name="ay" id="ay">
									<option value="2019-2020">2019-2020</option>	
									<option value="2020-2021">2020-2021</option>
									<option value="2021-2022">2021-2022</option>
									<option value="2022-2023">2022-2023</option>	
								</select>	
				              </div>
				            </div>
				          </div>

				    <!--       <div class="form-group">
				            <div class="col-md-8">
				              <label for=
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

				          <div class="row" id="idno">
				            <div class="col-md-10">  
      						<div class="form-group">
							         <div class="btn-group"> 
							          <a href="index.php" name="back" class="btn btn-default">Back </a>
									    <button type="submit" name="savestep1" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
									  
									  
									  
									</div>
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