<?php
class Model_Concerts extends Model {
    protected $concerts_table = 'concerts';
    protected $orders_table = 'orders';
    
    public function __construct() {
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
    
    public function get_all_orders() {
	$query = 'select orders.id, orders.name, orders.phone, orders.count_of_tickets, orders.status, concerts.description from '.$this->orders_table.' join '.$this->concerts_table.' on orders.concert_id=concerts.id';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        if($result = $stmt->fetchAll()) {
            return $result;
        }
        return false;
    }
    public function get_unprocessed_orders() {
        $query = 'select orders.id, orders.name, orders.phone, orders.count_of_tickets, orders.status, concerts.description from '.$this->orders_table.' join '.$this->concerts_table.' on orders.concert_id=concerts.id where orders.status=0';
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        if($result = $stmt->fetchAll()) {
            return $result;
        }
        return false;
    }
    
    public function insert_concert($image, $date_time, $price, $description) {
	$query = 'insert into '.$this->concerts_table.' (image, date, price, description) values(:image, :date,:price,:desc)';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':date', $date_time);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':desc', $description);
        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function delete_concert($id) {
	$query = 'delete from '.$this->concerts_table.' where id='.$id;
        $stmt = $this->db->prepare($query);
        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function update_concert($id, $date_time, $price, $description) {
	$query = 'update '.$this->concerts_table.' set date=:date, price=:price, description=:desc where id=:id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':date', $date_time);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':desc', $description);
        $stmt->bindParam(':id', $id);
        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    
    public function change_order_status($id) {
	$query = 'update '.$this->orders_table.' set status=1 where id=:id';
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id);
        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    
    public function insert_order($name, $phone, $concert_id, $count_of_tickets) {    
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
    }

}