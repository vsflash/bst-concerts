<?php

class Model_Concerts extends Model {

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> all concerts admin
    protected $concerts_table = 'concerts';
    protected $orders_table = 'orders';
    
    public function __construct() {
<<<<<<< HEAD
        parent::__construct();        
    }
    
    public function get_all_concerts() {
	$query = 'select * from '.$this->concerts_table;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        if($result = $stmt->fetchAll()) {
            return $result;
        }
        return false;
    }

    public function get_one_concert($id) {
        $query = 'select * from '.$this->concerts_table.' where id='.$id;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        if($result = $stmt->fetch()) {
            return $result;
        }
        return false;
    }
    
=======
=======
        parent::__construct();
        require_once 'app/config/db.php';
        $this->db = new PDO('mysql:host='.$host.';dbname='.$db, $user, $password);
    }
    
>>>>>>> all concerts admin
    public function get_all_concerts() {
	$query = 'select * from '.$this->concerts_table;
//        $stmt = $dbh->prepare("INSERT INTO REGISTRY (name, value) VALUES (?, ?)");
//        $stmt->bindParam(1, $name);
//        $stmt->bindParam(2, $value);
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        if($result = $stmt->fetchAll()) {
            return $result;
        }
        return false;
    }

>>>>>>> created main structure
    public function get_all_orders() {
	
    }

<<<<<<< HEAD
    public function insert_concert($image, $date_time, $price, $description) {
        
=======
    public function insert_concert($image, $date_time, $cost, $description) {
	
>>>>>>> created main structure
    }

    public function delete_concert($id) {
	
    }

<<<<<<< HEAD
    public function update_concert($id, $date_time, $price, $description) {
	
    }

    public function insert_order($name, $phone, $concert_id, $count_of_tickets) {
//	$query = "insert into ".$this->orders_table." (name, phone, concert_id, count_of_tickets)"
//                . " values('".$name."', '".$phone."', '".$concert_id."','".$count_of_tickets."');";
//        $queryResult = $this->dbConnection->query($query);
//	if ($queryResult) {
//	    return true;
//	}
//	return false;
//        
	$query = 'insert into '.$this->orders_table.' (name, phone, concert_id, count_of_tickets)'
                . ' values(:name, :phone,:concert_id,:count_of_tickets)';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':concert_id', $concert_id);
        $stmt->bindParam(':count_of_tickets', $count_of_tickets);
        if($stmt->execute()) {
            return true;
        }
        return false;
=======
    public function update_concert($id, $image, $date_time, $cost, $description) {
	
    }

    public function insert_order($fio, $phone, $concert_id, $tickets, $status) {
	
>>>>>>> created main structure
    }

    public function change_order_status($id) {
	
    }

<<<<<<< HEAD
}
=======
}
>>>>>>> created main structure
