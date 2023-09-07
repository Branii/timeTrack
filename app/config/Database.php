<?php 
include "Config.php";
class Database extends Config{
    public function openlink() {
        return new PDO(
            parent::getDsn(),
            parent::getUser(),
            parent::getPass()
        );
    }
}
