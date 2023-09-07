<?php 
    # database configurations
    class Config {

        public function getDsn() : String {
            return "mysql:host=localhost;dbname=timetrack";
        }

        public function getUser() : String {
            return "root";
        }

        public function getPass() : String {
            return "root";
        }

    }
