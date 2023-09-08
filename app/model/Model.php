<?php
include "../config/Database.php";
class Model extends Database {

    public function register(Array $arr) : String {

        $sql = "INSERT INTO users(username,email,mobile,password)VALUES(?,?,?,?)";
        $stmt = self::openlink()->prepare($sql);
        $params = array(
            "username"=>$arr['username'],
            "email"=>$arr['email'],
            "mobile"=>$arr['mobile'],
            "password"=>password_hash($arr['password'],PASSWORD_BCRYPT)
        );
        if($this->checkregister($arr)){
            return "User already registered";
        }
        if($stmt->execute(array_values($params))){
            return "Registered successfully";
        }else{
            return "Could not register";
        }
    }

    public function signin(Array $arr) : String {
        $sql = "SELECT uid,email,password FROM users WHERE email = ?";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$arr['email']);
        $stmt->execute();
        if($stmt->rowCount() > 0) {
             $uid = $stmt->fetch(PDO::FETCH_OBJ)->uid;
             $hash = $stmt->fetch(PDO::FETCH_OBJ)->password;
            if(password_verify($arr['password'],$hash)){
                session_start();
                $_SESSION['uid'] = $uid;
                return "success";
            }else{
                return "Wrong password";
            }

        }else{
            return "Wrong email";
        }
    }

    public function newtask(Array $arr) : String {

        $arrData = self::getEmpInfo($arr['username']);
        $username = $arrData['empname'];
        $email= $arrData['email'];
        $avatar= $arrData['avatar'];
       
        $timeA = strtotime($arr['start']);
        $timeB = strtotime($arr['end']);
        $durationMinutes = round(($timeB - $timeA) / 60);
        $motion = "---";
        $date = date("Y-m-d");
        $sql = "INSERT INTO task (username,email,starttime,endtime,duration,motion,info,created,avatar)VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$username);
        $stmt->bindParam(2,$email);
        $stmt->bindParam(3,$arr['start']);
        $stmt->bindParam(4,$arr['end']);
        $stmt->bindParam(5,$durationMinutes);
        $stmt->bindParam(6,$motion);
        $stmt->bindParam(7,$arr['info']);
        $stmt->bindParam(8,$date);
        $stmt->bindParam(9,$avatar);
        if($stmt->execute()){
            return "Task scheduled";
        }else{
            return "Something went wront";
        }
        
    }

    public function getEmpInfo (String $uid) : array {
        $sql = "SELECT * FROM employees WHERE empid = ? ";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$uid);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }

    public function getEmployees () : array {

        $sql = "SELECT * FROM employees";
        $stmt = self::openlink()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function gettask () : array {

        $sql = "SELECT * FROM task ORDER BY taskid DESC";
        $stmt = self::openlink()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getTaskByEmail (String $email, String $query, String $flag) : array {
        $sql = "SELECT * FROM task WHERE email = ? AND prog $query ? ORDER BY taskid DESC";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$email);
        $stmt->bindParam(2,$flag);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function updateTime() : string {
        $status = "Running";
        $sql = "UPDATE task SET duration = duration - 1 WHERE motion = ?";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$status);
        $stmt->execute();
        return "Updated";
    }

    public function play(String $taskid) : string {
        $status = "Running";
        $sql = "UPDATE task SET motion = ? WHERE taskid = ?";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$status);
        $stmt->bindParam(2,$taskid);
        $stmt->execute();
        return "Running";
    }
    public function pause(String $taskid) : string{
        $status = "Paused";
        $sql = "UPDATE task SET motion = ? WHERE taskid = ?";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$status);
        $stmt->bindParam(2,$taskid);
        $stmt->execute();
        return "Paused";
    }

    public function delete(String $taskid) : string{
        $sql = "DELETE FROM task WHERE taskid = ?";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$taskid);
        $stmt->execute();
        return "Deleted";
    }

    public function addEmployee(Array $arr) : string{
        $sql = "INSERT INTO employees(empname,email)VALUES(?,?)";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$arr['name']);
        $stmt->bindParam(2,$arr['email']);
        if($stmt->execute()){
            return "Employee added";
        }else{
            return "Could not add employee";
        }
        
    }

    public function updateProgress(Array $arr) : string{
        
        $sql = "UPDATE task SET prog = ? WHERE taskid = ?";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$arr['progress']);
        $stmt->bindParam(2,$arr['taskid']);
        $stmt->execute();
        return "Progress updated";
    }
    

    public function checkregister(Array $arr) : bool {
        $sql = "SELECT * FROM users WHERE email = ? OR mobile = ?";
        $stmt = self::openlink()->prepare($sql);
        $stmt->bindParam(1,$arr['email']);
        $stmt->bindParam(2,$arr['mobile']);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
}