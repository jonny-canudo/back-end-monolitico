<?php

class DataSource {

    public function getConnection() {
        $conn = mysqli_connect('localhost', 'root', '1234');
        mysqli_select_db($conn, 'meuprojeto');
        return $conn;
    }

    public function closeConnection($conn) {
        mysqli_close($conn);
    }
}


?>
