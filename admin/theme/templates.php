<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="apple-touch-icon" sizes="76x76" href="plugins/assets/img/apple-icon.png">
 <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />   -->
  <title>
    TCUSIS
  </title>
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <!--     Fonts and icons     -->
  <link href="@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap'); "/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?php echo WEB_ROOT; ?>plugins/assets/css/bootstrap.min.css" rel="stylesheet" /> 
<link href="<?php echo WEB_ROOT; ?>plugins/assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo WEB_ROOT; ?>plugins/assets/demo/demo.css" rel="stylesheet" />
  <link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
  <link rel="icon" href="images/tcu.jpg" type="image/x-icon">
</head>   

<style type="text/css">
      /* Google Font Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        
table { 
  font-size: 9px;
}
  table tr td{
    font-size: 12px;
  }
        
*{

  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
  text-decoration: none;

  box-sizing: border-box;
}

body {  
    font-family: 'Poppins', sans-serif;
} 
    
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
}

.data {
    background: url(undefined);
    height: 100vh;
    margin-left: 142px;
    background-size: cover;
    overflow-y: hidden;
    background-repeat: no-repeat;
    min-height: calc(100vh - 90px;)
}


label {
    line-height: 55px;
    font-size: 30px;
    color: white;
    font-weight: 200;
    margin-left: 30px;
    margin-top: 5px;
    cursor: pointer;
}

.panel-header{
    position: fixed
    top:0;
    left: 0;
    z-index: 9999;
    width: 100%;
    height: 2vh;
    
}




.side-menu {
    position: fixed;
    background: #780000;
    top: 0;
    left: 0;
    width: 16%;
    height: 100%;
    overflow-y: hidden;
    z-index: 9999;
}
.sample-container{
	width: 750px;
	height: 750px;
	background-color: yellow;
	float:right;

}
    

    

  
/* Responsive Menu Bar */    
.checkbtn{
	font-size:30px; 
	color:white;
	float:left;
	line-height:10px;
	margin-right:40px;
    cursor: pointer;
    display: none;
}
    
#check{
    display: none;
        
    }
    
    @media (max-width:952px){
        label.logo{
            font-size: :20px;
            padding-left: 30px;
        }
        .side-menu ul li a{
            font-size: 16px;
        }
    }
    
  @media (max-width:858px){
      .checkbtn{
          display: block;
      }
      ul{
          position: fixed;
          width: 100%;
          height: 100vh;
          background: #780000;
          top:80px;
          left: -100;
          text-align: center;
          transition: all .5s;
      }
      nav.side-menu ul li{
          display: block;
          margin: 50px 0;
          line-height: 30px;
      }
      nav.side-menu ul li a{
          font-size: 20px;
      }
      a:hover,a.active{
          background: none;
          color: #FFCCCB;
      }
      #check:checked ~ ul{
          left: 0;
      }
    }
/* End of Responsive Side Bar */   
    

/* Hide scrollbar for Chrome, Safari and Opera */
.side-menu::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.side-menu{
  -ms-overflow-style: none;  /* IE and Edge */
}


.side-menu center img {
    height: 90px;
    width: 120px;
    border-radius: 50%;
    margin-top: 30px;
    border: 3px solid white;
}

.side-menu center h2 {
    color: white;
}

.side-menu a {
    display: block;
    line-height: 60px;
    transition: 0.5s;
}

.side-menu a:hover {
   background: #A24857;
    padding-left: 20px;
    text-decoration: none;
    border-radius: 15px;
}

.side-menu span {
    width: 100%;
    height: 2px;
    font-size: 20px;
    margin-left: 10px;
    color: white;
}

.side-menu i {
    font-size: 20px;
    margin-left: 20px;
    color: white;
}

.navbar-toggle {
  color: #fff;
  border: 0;
  margin: 0;

}
    
.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-right: 15px;
    font-size: 25px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
    
button{
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    @webkit-appearance: button;
    cursor: pointer;
    overflow: visible;
}

button, select {
    text-transform: none;
}

.navbar-collapse {
    padding-right: 15px;
    padding-left: 15px;
    overflow-x: visible;
    @webkit-overflow-scrolling: touch;
    border-top: 1px solid transparent;
    @webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 10%);
    box-shadow: inset 0 1px 0 rgb(255 255 255 / 10%);
}

.collapse.in {
    display: block;
}

.pull-left {
    float: left;
}
.collapse {
    display: none;
}
    
nav .menu-bar {
    position: absolute;
    right: 60px;
    top: -10px;
    float: right;
    margin-top: 20px;
    display: none;
    margin-right: 20px;
}

#menu {
    display: none;
}

.side-menu .Logout {
    display: none;
}

.total_div{
	margin-top: 50px;
}

@media (max-width:850px) {
    .side-menu a span {
        display: none;
    }

    .side-menu center {
        display: none;
    }

    .side-menu {
        width: 100px;
    }

    .side-menu a i {
        display: block;
        line-height: 80px;
        text-align: center;
        margin-left: 0;
        font-size: 35px;
    }

    .data {
        margin-left: 0px;
    }
}

 
@media (max-width:991px) {
    .menu-bar{
        display: block;
    }
    
    .side-menu{
        display: none;
    }
   html{
      font-size: 55%;
   }

    .navbar-collapse.pull-left {
    float: none !important;
}
    
    
@media screen and (max-width:768px) {
    .col-md-12{
      
      display: block;
    }
  
    label {
    display: inline;
    white-space: nowrap;
    line-height: 80px;
    font-size: 30px;
    color: white;
    font-weight: 200;
    margin-left: 15px;
    margin-top: 5px;
    cursor: pointer;
}

    nav ul {
        display: none;
    }

    .side-menu {
        width: 100%;
        text-align: center;
        left: 100%;
        background-color:#990F02;
        color: A24857;
        transition: all 0.5s;
    }
    
    .side-menu a:hover {
        background: #A24857;
        padding-left: 20px;
        text-decoration: none;
    }

    .side-menu a i {
        display: none;
    }

    .side-menu a span {
        display: block;
    }

    .side-menu .Logout {
        display: block;
    }

    nav .menu-bar {
        display: block;
    }
    
    
    .cards{
        font-size: 50%;
        display: grid;
        grid-template-columns: repeat(1fr);
        grid-gap:1.5rem;
        align-items: flex-start;
    }
}
    
    @media (min-width:450px) {
         html{
      font-size: 50%;
             
             
   }
    }

#menu:checked~.side-menu {
    left: 0;
}

</style>
  <?php
  //login confirmation
 confirm_logged_in();

  ?>

<body class="">
    <input type="checkbox" id="menu">
 
  <nav>
    <div class="side-menu" style="overflow-y:scroll;">
       
        <ul class="nav-list" >
            <label class="logo" style="font-family:poppins; font-size:25px; font-weight:700; text-decoration:none; color:#fff;">
         <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/tculogo.png'; ?>" style=" width:70px; font-family:Poppins;  height:70px;" ><br>TCUSIS 
          <span href="<?php echo WEB_ROOT; ?>admin/index.php" class="simple-text logo-normal" ></span>
           </label>
            
            
           
            
         
            
         
            <li>
                <a class="active" href="<?php echo WEB_ROOT; ?>admin/index.php"> 
             <i class='bx bx-home-alt' ></i>
              <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Home</span>
            </a>
            </li>
  
              <?php if($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
                ?> 
            
              <li class="<?php echo (currentpage_admin() == 'student') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/student/index.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Students</span>
                </a>
                
              </li>
            
              <li class="<?php echo (currentpage_admin() == 'subject') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/subject/index.php">
                    <i class='bx bxs-book-bookmark'></i>
                    <span class="links_name" class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Subjects</span> 
                </a>
                  
              </li>
            
              <li class="<?php echo (currentpage_admin() == 'course') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/course/index.php">
                    <i class='bx bxs-objects-vertical-bottom'></i>
                    <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Year/Sem</span>  
                </a>
                  
              </li>
            
              <li class="<?php echo (currentpage_admin() == 'instructor') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/instructor/index.php">
                   <i class='bx bx-user-circle' ></i>
                    <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Faculty</span>  
                </a>
                  
              </li>
            
              <li class="<?php echo (currentpage_admin() == 'department') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/department/index.php">
                   <i class='bx bxs-building'></i>
                    <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Department</span>  
                </a>
                  
              </li>
            
              <li class="<?php echo (currentpage_admin() == 'room') ? "active" : false;?>">
                <a href="<?php echo WEB_ROOT; ?>admin/modules/room/index.php">
                   <i class='bx bx-store-alt'></i>
                    <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Rooms</span>  
                </a>
                  
              </li>
              
                 <li  class="<?php echo (currentpage_admin() == 'class') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/class/index.php">
                     <i class='bx bxs-buildings'></i>
                      <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Class</span>   
                   </a>
                     
                 </li>   
            
                <li  class="<?php echo (currentpage_admin() == 'class') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/chatbot/index.php"> 
                  <i class='bx bxs-chat'></i>
                      <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Chatbot</span>
                         </a>
                 </li>  

                
               <?php
              }?> 
                   
              <?php if($_SESSION['ACCOUNT_TYPE']=='Teacher'){ 
                ?> 
                   <li class="<?php echo (currentpage_admin() == 'inst_front') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/modules/inst_front/index.php?view=record">
                      <i class='bx bxs-user'></i>
                      <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Record</span>    
                    </a>
                       
                   </li>  
              <?php
              }?> 
            
            <?php if($_SESSION['ACCOUNT_TYPE']=='Teacher'){ 
                ?>
            <li  class="<?php echo (currentpage_admin() == 'logout') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/logout.php">
                      <i class='bx bx-log-out-circle'></i>
                      <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Logout</span>   
                   </a>
                
                 </li>
            <?php
              }?> 
            
            
                 <?php if($_SESSION['ACCOUNT_TYPE']=='Administrator'){ 
                ?>
                <li class="<?php echo (currentpage_admin() == 'user') ? "active" : false;?>">
                  <a href="<?php echo WEB_ROOT; ?>admin/modules/user/index.php">
                       <i class='bx bx-user'></i>
                      <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Manage Users</span>     
                  </a>
                    
                </li>
            
                <li  class="<?php echo (currentpage_admin() == 'logout') ? "active" : false;?>">
                    <a href="<?php echo WEB_ROOT; ?>admin/logout.php">
                     <i class='bx bx-log-out-circle'></i>
                      <span class="links_name" style="font-family:Poppins; font-weight:500; font-size:15px;">Logout</span>   
                   </a>
                     <span class="tooltip">Logout</span>
                 </li> 
               
                 <?php
              }?> 
                <!-- <li><a href="<?php echo WEB_ROOT; ?>admin/logout.php">Logout</a></li>  -->

          </ul> 
      </div>
    </nav>
   
    <div class="data" id="main-panel">
      <!-- Navbar -->
        
        <header>
             <div class="panel-header panel-header-sm" style="background:#780000;">
             
              <label for="nav-toggle" class="checkbtn">
            <span><i class='bx bx-menu'></i></span> 
            </label>
            
      </div>
        
        </header>
       
        
        
          <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
             <ul class="nav navbar-nav">
                 <li>
                     
                 </li>
             </ul>
             
        </div>
 <div class="data " >
  <div class="row total_div">
    <div class="col-md-12">
      <div class="card">
       <div class="container">
        <?php check_message(); ?>
        <?php require_once $content;?>
         
       </div>
        </div>
    </div>
  </div>
</div> 

      <!-- End Navbar -->
     
    
    </div>
		<!-- Sample Container -->
	
	

  <!--   Core JS Files   -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/popper.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo WEB_ROOT; ?>plugins/assets/demo/demo.js"></script> 
    <script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
     <script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
     <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
     <script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
    
    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
</script>
<script>
  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      function calculate(){  

     var first = document.getElementById('first').value; 
     var second = document.getElementById('second').value; 
     var third = document.getElementById('third').value;  
     var fourth = document.getElementById('fourth').value;  

    var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth) ;
    document.getElementById('finalave').value = totalVal;
     document.getElementById('finalave').value = Math.round((parseInt(totalVal)/4));  
        }
  </script>     
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>

  <script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 1
        } ],
        "order": [[ 3, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

/*$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 2
        } ],
        //vertical scroll
         "scrollY":        "400px",
        "scrollCollapse": true,
        //ordering start at column 2
       "order": [[ 2, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
*/
/*$(document).ready(function() {
    $('#example').dataTable( {
        "pagingType": "full_numbers"
    } );
} );*/
/*$(document).ready(function() {
    $('#example').dataTable();
} );
*///scroll vertical
/*$(document).ready(function() {
    $('#example').dataTable( {
        "scrollY":        "200px",
        "scrollCollapse": true,
        "paging":         false
    } );
} );
*/       
    </script>
    
    <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>

</html>