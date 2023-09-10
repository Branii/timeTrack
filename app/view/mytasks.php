<?php session_start(); 
$email = $_SESSION['email'];
$empid = $_SESSION['empid'];
?>
<!DOCTYPE html>
<html oncontextmenu="return false">
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

.overlayss {
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

table{
  border-collapse: collapse; /* Collapse table borders into a single border */
    width: 100%;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
    
}


.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    border: 1px solid #000; /* 1px solid border with black color */
    padding: 8px; 
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

.mylist{
  width: 100%;
  height:60px;
  border:dotted 3px #ccc;
  text-align: left;
  padding:10px;
  margin-bottom: 5px;
  text-decoration: none;
  list-style-type: none;
}
/* add more items here */


h2 {
  color: #000;
  text-align: center;
  font-size: 2em;
  margin: 20px 0;
}

.warpper {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.tab {
  cursor: pointer;
  padding: 10px 20px;
  margin: 0px 2px;
  background: #32557f;
  display: inline-block;
  color: #fff;
  border: solid 1px #eee;
  border-radius: 3px 3px 0px 0px;
  /* box-shadow: 0 0.5rem 0.8rem #00000080; */
}

.panels {
  background: #fff;
  border: solid 1px #eee;
  min-height: 200px;
  width: 100%;
  overflow: hidden;
  padding: 20px;
}

.panel {
  display: none;
  animation: fadein 0.8s;
}

@keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.panel-title {
  font-size: 1.5em;
  font-weight: bold;
}

.radio {
  display: none;
}

#one:checked ~ .panels #one-panel,
#two:checked ~ .panels #two-panel,
#three:checked ~ .panels #three-panel {
  display: block;
}

#one:checked ~ .tabs #one-tab,
#two:checked ~ .tabs #two-tab,
#three:checked ~ .tabs #three-tab {
  background: #fff;
  color: #000;
  border-top: 3px solid #32557f;
}
    </style>

	</head>

	<body>

	   

		<div class="wrapper" >
			<div class="inner">
			<form id="myform">
      <div class="top-left back">
				<a href="dashboard"><span class="bx bx-arrow-to-left" style="font-size:30px;"></span></a>
       
				</div>
  			<h3>
        <?php 
          include "../class/Controller.php";
          echo (new Controller)->getEmpInfo($empid)['empname'];
          ?>
        </h3>
			
        <div>
    
<div class="warpper">
  <input class="radio" id="one" name="group" type="radio" checked>
  <input class="radio" id="two" name="group" type="radio">
  <input class="radio" id="three" name="group" type="radio">

  <div class="tabs">
    <label class="tab" id="one-tab" for="one">Pending Tasks</label>
    <label class="tab" id="two-tab" for="two">Completed Tasks</label>
    <!-- <label class="tab" id="three-tab" for="three">Search Task</label>
    <label class="tab" id="four-tab" for="four">Print Task</label> -->
  </div>
  <div class="panels">
    <div class="panel" id="one-panel">
      <table border="1">
        <?php 
     
        $data = (new Controller)->getTaskByEmail((new Controller)->getEmpInfo($empid)['email'],"!=","100");
        if($data){
          foreach ($data as $item) {
          
            ?>
  
            <tr>
               <td>
               <span class='explain' hidden><?=$item['info'];?></span>
               <span class='taskid' hidden><?=$item['taskid'];?></span>
               <img src="../assets/images/<?=$item['avatar']?>" width="30px" style="margin-right:10px;">
               <span class="user-subhead"><b><?=$item['username'];?></b></span>
               </td> 
               <td> <span class="user-subhead"><?=$item['created'];?></span></td>  
               
               <td class="text-center"><?=$item['starttime'];?></td>
               <td class="text-center"><?=$item['endtime'];?></td>
               <td class="text-center"><span class='count'><?=$item['duration'];?> M</span> </td>
               <td class="text-center"><progress value="<?=$item['prog'];?>" max="100"></progress><?=$item['prog'];?>%</td>
               <td><i class='bx bx-info-circle exp' style="font-size:20px;"></i></td>
               <td>
               <select class="progress">
               <option value="<?=$item['prog'];?>"><?=$item['prog'];?>%</option>
               <option value="0">0%</option>
                <option value="10">10%</option>
                <option value="30">30%</option>
                <option value="50">50%</option>
                <option value="70">70%</option>
                <option value="85">85%</option>
                <option value="100">100%</option>
               </select>
               </td>
  
  
            </tr>
  
            <?php
  
          }
        }else{
          ?>
                <tr><td><i class='bx bx-info-circle'style='font-size:15px;' ></i> Currently has no pending task</td></tr>
                <?php
        }
        
        ?>
      </table>
    </div>
    <div class="panel" id="two-panel">
    <table border="1">
        <?php 
     
        $data = (new Controller)->getTaskByEmail((new Controller)->getEmpInfo($empid)['email'],"=","100");
        if($data){
          foreach ($data as $item) {
          
            ?>
  
            <tr>
               <td>
               <span class='explain' hidden><?=$item['info'];?></span>
               <span class='taskid' hidden><?=$item['taskid'];?></span>
               <img src="../assets/images/<?=$item['avatar']?>" width="30px" style="margin-right:10px;">
               <span class="user-subhead"><b><?=$item['username'];?></b></span>
               </td> 
               <td> <span class="user-subhead"><?=$item['created'];?></span></td>  
               
               <td class="text-center"><?=$item['starttime'];?></td>
               <td class="text-center"><?=$item['endtime'];?></td>
               <td class="text-center"><span class='count'><?=$item['duration'];?> M</span> </td>
               <td class="text-center"><progress value="<?=$item['prog'];?>" max="100"></progress><?=$item['prog'];?>%</td>
               <td><i class='bx bx-info-circle exp' style="font-size:20px;"></i></td>
               <!-- <td>
               <select class="progress">
               <option value="<?=$item['prog'];?>"><?=$item['prog'];?>%</option>
               <option value="0">0%</option>
                <option value="10">10%</option>
                <option value="30">30%</option>
                <option value="50">50%</option>
                <option value="70">70%</option>
                <option value="85">85%</option>
                <option value="100">100%</option>
               </select>
               </td> -->
  
            </tr>
  
            <?php
  
          }
        }else{
          ?>
                <tr><td><i class='bx bx-info-circle'style='font-size:15px;'></i> Currently has no completed task</td></tr>
                <?php
        }
        
        ?>
      </table>
    </div>
    <div class="panel" id="three-panel">
      Waiting for implementation
    </div>
    <div class="panel" id="four-panel">
      <div class="panel-title">Title3</div>
      <p>Content4</p>
    </div>
  </div>
</div>
        </div>

			</form>
				<img src="../assets/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>


    <div class="overlayss">
        <center><br><br>
        <div class="inner">
		
				<form id="myform">
				<div class="top-right">
				<span class="lnr lnr-cross-circle" style="font-size:30px;"></span>
				</div>
					<h3>Task Description</h3>
          <div  style="width:100%;border:dotted 2px #ccc;height:auto;overflow:scroll;text-align:left;padding:20px;">
          <span class="infotext"> </span>
          </div>
					
				</form>

			</div>
            
        </center>
</div>
	
		<script src="../assets/js/jquery-3.3.1.min.js"></script>
		<script src="../assets/js/main.js"></script>
        <script src="../assets/js/app.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>