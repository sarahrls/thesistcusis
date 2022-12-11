  <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/tcu.png')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">TCUSIS</h1>
            </div>
            <div class="col-lg-5 ml-auto"> 
            </div>
          </div>
        </div>
      </div>
    </div>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
	<style type="text/css">
        
		.ftco-cover-1.overlay h1.line-bottom:after {
		background: #780000;
		width: 50px;
	  }
        
    .floating-btn {
        background-color: #780000;
        color: #fff;
        padding: 16px 20px;
        font-size: 30px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        border-radius: 10px;
        border: solid 2px white;
        
          }

	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        

.popup{
    width: 370px;
    background: #fff;
    border-radius: 5px;
    border: 1px solid lightgrey;
    border-top: 0px;
    position: absolute;
    top: 0;
    left: 50%;*
    transform: translate(-50%,-50%) scale(0.1);
    visibility: hidden;
}
        
.open-popup{
            visibility: visible;
            top: 0%;
            /*transform: translate(-200%,-122%) scale(1);*/
            transform: translate(0%,-122%) scale(1);
                
        }

.popup .title{
    background: #780000;
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    line-height: 60px;
    text-align: left;
    padding-left: 15px;
    border-bottom: 1px solid #780000;
    border-radius: 5px 5px 0 0;
}
.popup .form{
    padding: 20px 15px;
    min-height: 400px;
    max-height: 400px;
    overflow-y: auto;
}
.popup .form .inbox{
    width: 100%;
    display: flex;
    align-items: baseline;
}
.popup .form .user-inbox{
    justify-content: flex-end;
    margin: 13px 0;
}
.popup .form .inbox .icon{
    height: 40px;
    width: 40px;
    color: #fff;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    font-size: 18px;
    background: #780000;
}
.popup .form .inbox .msg-header{
    max-width: 53%;
    margin-left: 10px;
}
.form .inbox .msg-header p{
    color: #fff;
    background: #780000;
    border-radius: 10px;
    padding: 8px 10px;
    font-size: 14px;
    word-break: break-all;
}
.form .user-inbox .msg-header p{
    color: #333;
    background: #efefef;
}
.popup .typing-field{
    display: flex;
    height: 60px;
    width: 100%;
    align-items: center;
    justify-content: space-evenly;
    background: #efefef;
    border-top: 1px solid #d9d9d9;
    border-radius: 0 0 5px 5px;
}
.popup .typing-field .input-data{
    height: 40px;
    width: 335px;
    position: relative;
}
.popup .typing-field .input-data input{
    height: 100%;
    width: 100%;
    outline: none;
    border: 1px solid transparent;
    padding: 0 80px 0 15px;
    border-radius: 3px;
    font-size: 15px;
    background: #fff;
    transition: all 0.3s ease;
}
.typing-field .input-data input:focus{
    border-color: #780000;
}
.input-data input::placeholder{
    color: #999999;
    transition: all 0.3s ease;
}
.input-data input:focus::placeholder{
    color: #bfbfbf;
}
.popup .typing-field .input-data button{
    position: absolute;
    right: 5px;
    top: 50%;
    height: 30px;
    width: 65px;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
    outline: none;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    background: #780000;
    border: 1px solid #780000;
    transform: translateY(-50%);
    transition: all 0.3s ease;
}
.popup .typing-field .input-data input:valid ~ button{
    opacity: 1;
    pointer-events: auto;
}
.typing-field .input-data button:hover{
    background: #780000;
}
	</style>

<?php 

				$student = new Student();
				$cur = $student->single_student($_SESSION['IDNO']);
            
                require_once ("includes/encryption.php");
                $aes = new AdvanceEncryptionStandard('WR7rLKlVvJdEAIzHUMpt4dcEKsXPinIU2KiWzm++bhg=','AES-256-CBC','NJ0oI9P1fytagUfPny3qTA==');
            
                $decrypted_LNAME = $aes->decryptData($cur->LNAME);
                $decrypted_FNAME = $aes->decryptData($cur->FNAME);
?>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 pr-md-5 mr-auto">
          
          </div>
          <div class="col-md-6" style="margin-left:590px;">
            <div class="quick-contact-form bg-white" style="margin-top:-620px;">
                <h2 style="font-size: 18px; color: #780000;">Login Information</h2>
                <hr/>
               <label style="font-size:20px; color:#780000; font-weight:500;"><?Php echo $decrypted_FNAME;?></label> 
               <label style="font-size:20px; color:#780000; font-weight:500;"><?Php echo $decrypted_LNAME;?></label><br/>
               <hr/>
                  <div class="form-group">
                <a href="logout.php" class="btn btn-primary px-5"  style="margin-left:150px; background-color:#780000; border: solid 1px #780000;">Logout <span class="fa fa-log-out"></span></a>
              </div>
              </div>
              <!--CHATBOT -->
               <button type="submit" class="floating-btn" onclick="openPopup()" ><i class='bx bx-conversation'></i></button>
              
               <div class="popup" id="popup" >
                <div class="title" onclick="closePopup()"><span style="margin-right:5px; font-size:20px;"><i class='bx bxs-bot' style='color:#ffffff'></i></span>TCUbot</div>
                <div class="form">

                    <div class="bot-inbox inbox">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                
                        <div class="msg-header">
                            <p>Hello there, how can I help you?</p>
                        </div>
                    </div>
                </div>
                <div class="typing-field">
                    <div class="input-data">
                        <input id="data" type="text" placeholder="Type something here.." required>
                    <button id="send-btn">Send</button>
                </div>
                </div>
            </div>
              <!--END CHATBOT -->
              <script>
              let popup = document.getElementById("popup");
                  
                  function openPopup(){
                      popup.classList.add("open-popup");
                      
                  }
                  function closePopup(){
                      popup.classList.remove("open-popup");
                      
                  }
              
              </script>
              
          </div>
            
       
        </div>
      </div>
    </div>
     <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // start ajax code
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>