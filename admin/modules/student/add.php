
           <div class="card-header">
             <h5 style="margin-top:20px; font-family:Poppins; font-weight:900;">Add New Student</h5>
           </div>
              <div class="card-body">
                <form action="controller.php?action=add" class="form-horizontal  span9" method="post" autocomplete="off"> 

 
                    <input name="coeId" type="hidden" value="">
                    
        <div class="row"> 
        <div class="col-md-4">
          <div class="form-group">
            <label  for="idno" style="color:#780000; font-family:Poppins; font-size:14px;">Student ID Number*</label> 
              <input class="form-control input-sm" id="idno" name="idno" placeholder=
              "ID Number" type="text" value=""> 
          </div>
        </div>  
      </div>

        <div class="row">  
          <div class="col-md-4">
            <div class="form-group">
              <label for="lName" style="color:#780000; font-family:Poppins; font-size:14px;">Last Name:*</label> 
                <input class="form-control input-sm" id="lName" name="lName"
                placeholder="Last Name" type="text">
            </div>
          </div> 

          <div class="col-md-4">
            <div class="form-group">
            <label for="fName" style="color:#780000; font-family:Poppins; font-size:14px;">First Name:*</label> 
              <input class="form-control input-sm" id="fName" name="fName"
              placeholder="First Name" type="text">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="mName" style="color:#780000; font-family:Poppins; font-size:14px;">Middle Name:*</label> 
              <input class="form-control input-sm" id="mName" name="mName"
              placeholder="Middle Name" type="text">
            </div>
          </div> 
       </div> 

        <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="gender" style="color:#780000; font-family:Poppins; font-size:14px;">Gender*</label> 
              <select class="form-control input-sm" id="gender" name="gender">
                <option value="M">
                  Male
                </option>

                <option value="F">
                  Female
                </option>
              </select>
            </div>
          </div>

           <div class="col-md-4">
            <div class="form-group">
                <label for=
                "bday" style="color:#780000; font-family:Poppins; font-size:14px;">Birth Date*</label> 
                    <div class="input-group date form_curdate col-md-15" data-date="" data-date-format="yyyy-mm-dd" data-link-field="any" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="11" type="text" value="" readonly name="bday" id="bday">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                     <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
              </div>
           </div>
          <div class="col-md-4">
      <div class="form-group">
            <label for="bplace" style="color:#780000; font-family:Poppins; font-size:14px;">Birth Place*</label> 
              <input class="form-control input-sm" id="bplace" name="bplace"
              placeholder="Birth Place" type="text">
            </div>
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-4">
         <div class="form-group">
            <label for="status" style="color:#780000; font-family:Poppins; font-size:14px;">Civil Status*</label>
              <select class="form-control  " id="status" name="status">
                <option value="Single">
                  Single
                </option>

                <option value="Married">
                  Married
                </option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="age" style="color:#780000; font-family:Poppins; font-size:14px;">Age*</label> 
              <input class="form-control input-sm" id="age" name="age" placeholder=
              "age" type="number">
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
            <label for="nationality" style="color:#780000; font-family:Poppins; font-size:14px;">Nationality*</label> 
              <input class="form-control input-sm" id="nationality" name=
              "nationality" placeholder="Nationality" type="text">
            </div>
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-4">
         <div class="form-group">
            <label for="religion" style="color:#780000; font-family:Poppins; font-size:14px;">Religion*</label> 
              <input class="form-control input-sm" id="religion" name="religion"
              placeholder="Religion" type="text">
            </div>
          </div>

          <div class="col-md-4">
         <div class="form-group">
            <label for="contact" style="color:#780000; font-family:Poppins; font-size:14px;">Contact*</label> 
              <input class="form-control input-sm" id="contact" name="contact"
              placeholder="Contact Number" type="text">
            </div>
          </div>

          <div class="col-md-4">
         <div class="form-group">
            <label for="email" style="color:#780000; font-family:Poppins; font-size:14px;">Email*</label> 
              <input class="form-control input-sm" id="email" name="email"
              placeholder="Email address" type="email">
            </div>
          </div>
        </div> 

 
        <div class="row">
          <div class="col-md-8">
         <div class="form-group">
            <label  for="home" style="color:#780000; font-family:Poppins; font-size:14px;">Home*</label> 
              <input class="form-control input-sm" id="home" name="home" placeholder=
              "Home Address" type="text">
            </div>
          </div>
        </div> 
    

    <fieldset>
      <legend style="margin-top:20px; font-family:Poppins; font-weight:900;">Secondary Details</legend>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label for="guardian" style="color:#780000; font-family:Poppins; font-size:14px;">Guardian*</label> 
              <input class="form-control input-sm" id="guardian" name="guardian"
              placeholder="Guardian" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
            <label for="guardianAdd" style="color:#780000; font-family:Poppins; font-size:14px;">Address*</label> 
              <input class="form-control input-sm" id="guardianAdd" name=
              "guardianAdd" placeholder="Guardian Address" type="text">
            </div>
          </div>
        </div> 
 
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
            <label class="" for="otherperson" style="color:#780000; font-family:Poppins; font-size:14px;">Other Person Supporting*</label> 
              <input class="form-control input-sm" id="otherperson" name=
              "otherperson" placeholder="Other Person Supporting" type="text">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">

            <label for="otherAddress" style="color:#780000; font-family:Poppins; font-size:14px;">Address*</label> 

            <label class="lbl" for="otherAddress">Address*</label> 

              <input class="form-control input-sm" id="otherAddress" name=
              "otherAddress" placeholder="Address" type="text">
            </div>
          </div>
        </div> 
    </fieldset>

    <div class="form-group">
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-6"></div>
        </div>

        <div class="col-md-6" style="text-align: right">
            <a href="index.php" name="back" class="btn btn-default" style="background-color:#780000; font-family:Poppins; border-radius:5px;">Back</a>
          <button class="btn btn-default" name="submit" type="submit" style="background-color:#780000; font-family:Poppins;">Save</button>
        </div>
      </div>
    </div>
                  
                  <style>
                    
                      .lbl{
                          color: red;
                          font-size: 100px;
                      }
                  
                  </style>
  </form>
</div><!==End of well-->
  <!--End of container-->

</div><!--End of container-->
              </div>
