
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

    </style>

	</head>

	<body>

	   

		<div class="wrapper" >
			<div class="inner">
			<form id="myform">
      <div class="top-left back">
				<a href="home.php"><span class="bx bx-arrow-to-left" style="font-size:30px;"></span></a>
				</div>
  			<h3>Time Track History</h3>
				Employee List: <p></p><br>
        <div style="overflow:scroll;max-height:300px;height:auto">
          <?php
           include "../controller/Controller.php";
						  $row = (new Controller)->getEmployees();
              $counter = 0;
						  foreach ($row as $item) {
                $counter++;
							?>
								<a href="tasks.php?empid=<?=$item['empid']?>"><li class="mylist" style="cursor:pointer">
                <span style="margin-right:10px;">
                <?=$counter?>
                </span>
                <span>
                  <img src="../assets/images/<?=$item['avatar']?>" width="30px" style="margin-right:10px;">
                  <?=$item['empname']?> 
                  </span>
              </li></a>
							<?php
						  }
						 ?>
        </div>

			</form>
				<img src="../assets/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>

	
		<script src="../assets/js/jquery-3.3.1.min.js"></script>
		<script src="../assets/js/main.js"></script>
        <script src="../assets/js/app.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>