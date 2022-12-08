
<style type="text/css">
.card-single dic:first-child span{
	color:var(--text-gray);
}

.total-div{
	margin-top: 50px;
}
@media screen and (max-width:768px) {
    .tile_stats_count .count {
        font-size: 30px !important;
    }
    .tile_stats_count .right span {
        font-size: 12px;
    }
    
}

.tile_stats_count .right span {
    text-overflow: ellipsis;
    white-space: nowrap;
}
    

    </style>

<div style="padding: 10px">
	<div class="dash"  style="position:relative; text-align:left;  grid-template-columns: repeat(3, 1fr); grid-gap: 1.5rem;  align-items: flex-start; padding-top:20px;  padding-bottom:20px; width:100%">
	<div class="row">
	<div class="col-12 col-sm-4 " style=" ">
		<div style="padding:2rem; border-radius:5px;  border: solid 2px #780000; margin-bottom: 5px">
			<span style="color:#780000; font-size:14px;"> Admins </span>
            <div class="count maroon">
                <?php
                    require 'dbconfig.php';
                
                    $query = "SELECT ACCOUNT_ID FROM useraccounts ORDER BY ACCOUNT_ID";
                    $query_run = mysqli_query($connection, $query);
                
                    $row = mysqli_num_rows($query_run);
                
                    echo '<h3 style="font-size:30px; color:#780000;">'.$row.'</h3>';
                ?>
             </div>
			 <span style="font-size:14px; font-weight:bold; color:#780000;"> Total of Admin </span>
		</div>
		<div>
		
		</div>
		</div>
		
		<div class="col-12 col-sm-4" style="">
		<div style="padding:2rem; border-radius:5px;  border: solid 2px #780000; margin-bottom: 5px ">
			<span style="color:#780000; font-size:14px;"> Students </span>
			 <div class="count maroon"> 
			 
<!-- Mema input -->
                 <?php
                    require 'dbconfig.php';
                
                    $query = "SELECT S_ID FROM tblstudent ORDER BY S_ID";
                    $query_run = mysqli_query($connection, $query);
                
                    $row = mysqli_num_rows($query_run);
                
                    echo '<h3 style="font-size:30px; color:#780000;">'.$row.'</h3>';
                ?>
            </div>
		
			 <span style="font-size:14px; font-weight:bold; color:#780000;"> Total of Student </span>
		</div>
		<div>
			
		</div>
		</div>
		<!--
		<div class="card-single"style="display:flex; justify-content:space-between; background:#fff; padding:2rem; border-radius:5px; border: solid 2px #780000;">
		<div>
			<span style="color:#780000;"> Teacher </span>
			 <div class="count maroon"> 
			 
			
                 <h3 style="font-size:30px; color:#780000;">10 </h3>
			 </div>
			 <span style="font-size:18px; font-weight:bold;color:#780000;"> Total of Teacher </span>
		</div>
		<div>
			<span class='bx bxs-user' style="color:#780000;"> </span>
		</div>
		</div>-->
		
			<div class="col-12 col-sm-4" style=" ">
		<div style="padding:2rem; border-radius:5px;  border: solid 2px #780000; margin-bottom: 5px ">
			<span style="color:#780000; font-size:14px;"> Department </span>
			 <div class="count maroon"> 
			 
			 <!-- Mema input -->
                 <?php
                    require 'dbconfig.php';
                
                    $query = "SELECT DEPT_ID FROM department ORDER BY DEPT_ID";
                    $query_run = mysqli_query($connection, $query);
                
                    $row = mysqli_num_rows($query_run);
                
                    echo '<h3 style="font-size:30px; color:#780000;">'.$row.'</h3>';
                ?>
			 </div>
			 <span style="font-size:14px; font-weight:bold;color:#780000;"> Total of Department </span>
		</div>
		<div>
		
		</div>
		</div>
		</div>
		</div>
		</div>
	




