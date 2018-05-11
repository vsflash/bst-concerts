<?php

class Model_Concerts extends Model {

    protected $concerts_table = 'concerts';
    protected $orders_table = 'orders';
    
    public function __construct() {
        parent::__construct();
        require_once 'app/config/db.php';
        $this->db = new PDO('mysql:host='.$host.';dbname='.$db, $user, $password);
    }
    
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

    public function get_all_orders() {
	
    }

    public function insert_concert($image, $date_time, $cost, $description) {
	
    }

    public function delete_concert($id) {
	
    }

    public function update_concert($id, $image, $date_time, $cost, $description) {
	
    }

    public function insert_order($fio, $phone, $concert_id, $tickets, $status) {
	
    }

    public function change_order_status($id) {
	
    }

}
