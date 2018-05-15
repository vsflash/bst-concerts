<?php
namespace app\models;
use app\core\Model;
class Model_Users extends Model {
    protected $users_table = 'users';
    public function __construct() {
        parent::__construct();
    }
    public function get_all_users() {
        $query = 'select * from ' . $this->users_table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        if ($result = $stmt->fetchAll()) {
            return $result;
        }
        return false;
    }
    public function getUserByLogin($login) { //новый метод
        $query = "SELECT * FROM " . $this->users_table . " WHERE login LIKE :login;";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        if ($result = $stmt->fetch()) {
            return $result;
        }
        return false;
    }
    public function delete_user($ID) {
        $query = 'delete from ' . $this->users_table . ' where id=' . $ID;
        $stmt = $this->db->prepare($query);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function insert_user($login, $email, $password) {
        $query = 'insert into ' . $this->users_table . ' (login, email, password) values(:login, :email, :password)';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}