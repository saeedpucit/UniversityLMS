<?php 

class Database {
    private $_conn;
    private $_server = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_db = "lms";

    public function __construct() {
        $this->$_conn = new mysqli( $this->_server, $this->_username, $this->_password, $this->_db );
    }

    public function getInstance(){
        return $this->$_conn;
    }
}
?>