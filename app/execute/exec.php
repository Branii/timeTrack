<?php 
include "../controller/Controller.php";
$arr = $_POST;

if($arr['flag'] == "register"){
    echo (new Controller)->register($arr);
}else if($arr['flag'] == "signin"){
    echo (new Controller)->signin($arr);
}else if($arr['flag'] == "task"){
    echo (new Controller)->newtask($arr);
}else if($arr['flag'] == "timer"){
    echo (new Controller)->updateTime();
}else if($arr['flag'] == "play"){
    echo (new Controller)->play($arr['taskid']);
}else if($arr['flag'] == "pause"){
    echo (new Controller)->pause($arr['taskid']);
}else if($arr['flag'] == "delete"){
    echo (new Controller)->delete($arr['taskid']);
}else if($arr['flag'] == "add"){
    echo (new Controller)->addEmployee($arr);
}

?>