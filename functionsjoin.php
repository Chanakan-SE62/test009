<?php

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'km_rice');

    class DB_conn {
        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM group_project INNER JOIN km_unit ON group_project.group_id = km_unit.km_id");
            return $result;
        }

        public function update() {
            
        }

    }


?>