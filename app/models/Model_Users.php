<?php

class Model_Users extends Model {

    protected $dbConnection;
    protected $tableName = 'users';

    //TODO вынести свойства в абстрактный класс Model

    public function __construct() {
        $this->dbConnection = new mysqli("localhost", 'root', '', 'bst_concerts');
    }

    public function get_all() {
        
    }

    public function addUser($login, $email, $password) {
        $query = "insert into " . $this->tableName . "(login, email, password) values ('" . $login . "', '" . $email . "', '" . $password . "')";
        $queryResult = $this->dbConnection->query($query);
        if ($queryResult) {
            return true;
        }
        return false;
    }
        public function getUserByLogin($login) { //новый метод
        $query = "SELECT * FROM users WHERE login LIKE '" . $login . "';";
        $result = $this->dbConnection->query($query);
        if ($result) {
            $user = $result->fetch_array(MYSQLI_ASSOC);
            return $user;
        }
        return false;
    }

}
