
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="../assets/fonts/linearicons/style.css">
		<link rel="stylesheet" href="../assets/css/custom.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../assets/css/style.css">
		<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
		

	</head>

	<body>

	   

		<div class="wrapper" >
			<div class="inner">
			<form id="myform">
      <div class="top-right close">
				<span class="lnr lnr-cross-circle" style="font-size:30px;"></span>
				</div>
  			<h3>Time Track</h3>
				Current Time: <div id="timer"> 00 : 00 : 00</div><br>
			  <table class="table user-list"  style="width:100%;background-color:#fff">
                            
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
                  }else if($item['motion'] == "---"){
                    $show = "<i class='bx bxs-circle' style='color:#aaa'></i>";
                  }
                  ?>
                   <tr>
                                      <td>
                      <span class='taskid' hidden><?=$item['taskid'];?></span>
                      <span class='explain' hidden><?=$item['info'];?></span>
                                          <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                          <span class="user-subhead"><b><?=$item['username'];?></b></span><br>
                                          <span class="user-subhead"><b><?=$item['created'];?></span>
                                      </td>
                                      <td class="text-center"><?=$item['starttime'];?></td>
                                      <td class="text-center"><?=$item['endtime'];?></td>
                                      <td class="text-center"><span class='count'><?=$item['duration'];?> M</span> </td>
                                      <td class="text-center">
                                      <progress value="<?=$item['prog'];?>" max="100"></progress><?=$item['prog'];?>%
                                      </td>
                                      <td><i class='bx bx-info-circle exp' style="font-size:20px;"></i></td>
                                      <td class="text-center"><span class='count'></span> <?=$show?></td>
                                      <td style="width: 20%;">  
                                          <a href="#" class="table-link danger">
                                              <span class="fa-stack">
                                            <i class='bx bx-play-circle play'  style="font-size:25px;"></i>
                                            <i class='bx bx-stop-circle pause'  style="font-size:25px;"></i>
                                            <i class='bx bx-trash delete'  style="font-size:25px;"></i>
                                              </span>
                                          </a>
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
    <li class="menu-item menu">
      <a href="#"><i class="bx bx-menu"></i></a>
    </li>
    
  </ul>
</div>
</div>


<div class="overlay">
        <center><br><br>
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
								<option value='<?=$item['empid']?>'><?=$item['empname']?></option>
							<?php
						  }
						 ?>
						</select>
					</div>
              
          <div class="form-holder">
					<textarea style="height: 80px;" class="form-control info" placeholder="Description (short)"></textarea>
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

<div class="overlays">
        <center><br><br><br>
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
          <br><br>
          
          <div style="overflow:scroll;max-height:300px;height:auto">
          <?php
						  $row = (new Controller)->getEmployees();
						  foreach ($row as $item) {
							?>
								<li class="mylist">
                <span style="margin-right:10px;">
                <i class='bx bx-trash bin'  style="font-size:20px;"></i>
                </span>
                <span>
                  <img src="../assets/images/<?=$item['avatar']?>" width="30px" style="margin-right:10px;">
                  <?=$item['empname']?> 
                  </span>
              </li>
							<?php
						  }
						 ?>
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