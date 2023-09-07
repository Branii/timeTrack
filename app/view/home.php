
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="../assets/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../assets/css/style.css">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
		<style>

.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* You can adjust the opacity here */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    display:none;
    z-index: 1000; /* Set a high z-index to ensure it appears on top of other elements */
}

.overlays {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* You can adjust the opacity here */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    display:none;
    z-index: 1000; /* Set a high z-index to ensure it appears on top of other elements */
}

.fab {
  border: none;
  color: white;
  background-color: #fff;
  border-radius: 50%;
  width: 70px;
  height: 70px;
  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  position: fixed;
  right: 25px;
  bottom: 25px;
  transition: all 0.5s;
}

/* Style for the top-right div */
.top-right {
	position: absolute;
	top: 0; /* Place it at the top */
	right: 0; /* Place it at the right */
	background-color: #fff; /* Background color */
	padding: 10px; /* Add some padding for visibility */
	cursor:pointer;
}




.user-list tbody td .user-link {
    display: block;
    font-size: 1.25em;
    padding-top: 3px;
    margin-left: 60px;
}
a {
    color: #3498db;
    outline: none!important;
}
.user-list tbody td>img {
    position: relative;
    max-width: 50px;
    float: left;
    margin-right: 15px;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
}


.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    padding: 12px 8px;
}
a:hover{
text-decoration:none;
}

.count{
	width:50px;
	height:auto;
	border:solid 1px #eee;
	text-align: center;
	font:bold 18px arial;
}

/* position the toggle button */
.menu-container {
  bottom: 0;
  right: 0;
  position: relative;
}

/* position the toggle button */
.menu-toggle-btn {
  height: 56px;
  width: 56px;
  bottom: 0;
  right: 0;
  position: absolute;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #FF008B;
  box-shadow: 3px 3px 2px 1px rgb(0 0 0 / 20%);
  z-index: 2;
  cursor: pointer;
}

.menu-toggle-btn i {
  font-size: 2rem;
  color: #eeeeee;
  transition: 0.5s;
}

.menu-toggle-btn.effect i {
  transform: rotate(135deg);
}

.menu-list {
  list-style: none;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: 1;
}

.menu-list .menu-item {
  height: 2.3rem;
  width: 2.3rem;
  bottom: 0.25rem;
  right: 0.25rem;
  position: absolute;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #fff;
  transition: 0.5s;
}

.menu-list .menu-item a {
  text-decoration: none;
  color: #FF008B;
}

.menu-list .menu-item:hover {
  background-color: #8864fd;
}

.menu-list.effect .menu-item {
  box-shadow: 3px 3px 2px 1px rgba(0, 0, 0, 0.2);
}

.menu-list.effect .menu-item:nth-of-type(1) {
  bottom: 4.25rem;
  right: 0.5rem;
  transition-delay: 0.2s;
}

.menu-list.effect .menu-item:nth-of-type(2) {
  bottom: 3.5rem;
  right: 3.5rem;
  transition-delay: 0.1s;
}

.menu-list.effect .menu-item:nth-of-type(3) {
  bottom: 0.5rem;
  right: 4.25rem;
}

/* add more items here */

</style>

	</head>

	<body>

	   

		<div class="wrapper" >
			<div class="inner">
			<form id="myform">
      <div class="top-right close">
				<span class="bx bx-log-in" style="font-size:30px;"></span>
				</div>
  			<h3>Time Track</h3>
				Current Time: <div id="timer"> 00 : 00 : 00</div><br>
			  <table class="table user-list" border="1" style="width:100%;background-color:#fff">
                            
                            <tbody>

							<?php 
						   include "../controller/Controller.php";
							$data = (new Controller)->gettask();
							if($data){
                foreach ($data as $item) {
                  $show  = "";
                  if($item['motion'] == "Running"){
                    $show = "<i class='bx bxs-circle' style='color:green'></i>";
                  }else if($item['motion'] == "Paused"){
                    $show = "<i class='bx bxs-circle' style='color:orangered'></i>";
                  }
                  ?>
                   <tr>
                                      <td>
                      <span class='taskid' hidden><?=$item['taskid'];?></span>
                                          <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                          <span class="user-subhead"><b><?=$item['username'];?></b></span><br>
                                          <span class="user-subhead">Member</span>
                                      </td>
                                      <td class="text-center"><?=$item['starttime'];?></td>
                                      <td class="text-center"><?=$item['endtime'];?></td>
                                      <td class="text-center"><span class='count'><?=$item['duration'];?> Min left</span> </td>
                                      <td class="text-center"><span class='count'><?=$item['motion'];?> </span> <?=$show?></td>
                                      <td style="width: 20%;">  
                                          <a href="#" class="table-link danger">
                                              <span class="fa-stack">
                                            <i class='bx bx-play-circle play'  style="font-size:25px;"></i>
                                            <i class='bx bx-stop-circle pause'  style="font-size:25px;"></i>
                                            <i class='bx bx-trash delete'  style="font-size:25px;"></i>
                                              </span>
                                          </a>
                                      </td>
                                  </tr>
                  <?php
                }
              }else{
                ?>
                <tr><td><i class='bx bx-info-circle'style='font-size:15px;' ></i> Nothing to track</td></tr>
                <?php
              }
							?>

                               
                            </tbody>
                        </table>

			</form>
				<img src="../assets/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		
<!-- <div class="radialx">
  <button class="fab">
	<span class="lnr lnr-plus-circle" style="color:black;font-size:20px;"></span>
  </button>
</div>  -->


<div style="position: relative;top:-20px;right:20px">
<div class="menu-container">
  <div class="menu-toggle-btn">
    <i class="bx bx-plus plus"></i>
  </div>
  <ul class="menu-list">
    <li class="menu-item userr">
      <a href="#"><i class="bx bx-user-plus"></i></a>
    </li>
	<li class="menu-item radial">
      <a href="#"><i class="bx bx-timer timex "></i></a>
    </li>
    <li class="menu-item">
      <a href="#"><i class="bx bx-menu menu"></i></a>
    </li>
    
  </ul>
</div>
</div>


<div class="overlay">
        <center><br><br><br><br><br><br><br>
        <div class="inner">
		
				<form id="myform">
				<div class="top-right">
				<span class="lnr lnr-cross-circle" style="font-size:30px;"></span>
				</div>
					<h3>New Task</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<select class="form-control username">
						 <?php
						  $row = (new Controller)->getEmployees();
						  foreach ($row as $item) {
							?>
								<option><?=$item['empname']?></option>
							<?php
						  }
						 ?>
						</select>
					</div>
					<div class="form-holder">
					<span class="lnr lnr-history"></span>
						<input type="time" class="form-control start" placeholder="Start time" autocomplete="off" >
					</div>
                    <div class="form-holder">
					<span class="lnr lnr-history"></span>
						<input type="time" class="form-control end" placeholder="end time" autocomplete="off" >
					</div>
					
					
					<button class="task">
						<span>Create Task</span>
					</button>
				</form>

			</div>
            
        </center>
</div>

<div class="overlays">
        <center><br><br><br><br><br><br><br>
        <div class="inner">
		
				<form id="myform">
				<div class="top-right">
				<span class="lnr lnr-cross-circle" style="font-size:30px;"></span>
				</div>
					<h3>New Employee</h3>
					
					<div class="form-holder">
					<span class="lnr lnr-history"></span>
						<input type="text" class="form-control name" placeholder="Employee name" autocomplete="off" >
					</div>

					<div class="form-holder">
					<span class="lnr lnr-envelop"></span>
						<input type="text" class="form-control email" placeholder="Employee name" autocomplete="off" >
					</div>
					
					
					<button class="employee">
						<span>Add Employee</span>
					</button>
				</form>
	
			</div>
            
        </center>
</div>
		 
		
		<script src="../assets/js/jquery-3.3.1.min.js"></script>
		<script src="../assets/js/main.js"></script>
        <script src="../assets/js/app.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>