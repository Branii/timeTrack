<?php 
    # database configurations
    class Config {

        private $dsn = "mysql:host=localhost;dbname=timetrack";
        private $user = "root";
        private $pass = "root";

        #getters
        public function getDsn() : String {
            return $this->dsn;
        }

        public function getUser() : String {
            return $this->user;
        }

        public function getPass() : String {
            return $this->pass;
        }

    }
