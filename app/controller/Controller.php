<?php 
 include "../model/Model.php";
 class Controller extends Model {

    public function register(Array $arr) : string{
        return parent::register($arr);
    }

    public function signin(Array $arr) : string{
        return parent::signin($arr);
    }

    public function newtask(Array $arr) : string{
        return parent::newtask($arr);
    }

    public function getEmployees() : array {
        return parent::getEmployees();
    }

    public function gettask() : array {
        return parent::gettask();
    }

    public function updateTime() : string {
        return parent::updateTime();
    }

    public function play($taskid) : string {
        return parent::play($taskid);
    }

    public function pause($taskid) : string {
        return parent::pause($taskid);
    }

    public function delete($taskid) : string {
        return parent::delete($taskid);
    }

    public function addEmployee(Array $arr) : string {
        return parent::addEmployee($arr);
    }

 }

?>
