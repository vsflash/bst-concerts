<?php

require_once 'app/models/Model_Users.php';
require_once 'app/models/Model_Concerts.php';

class Controller_Admin extends Controller {

    protected $model_concerts;
    protected $model_users;

    public function __construct() {
        parent::__construct();
        $this->model_users = new Model_Users();
        $this->model_concerts = new Model_Concerts();
        $this->view->template_view = 'admin.php';
    }

    public function action_index() {
        $this->view->render();
    }

    public function action_concerts($params = null) {
        $additional_action = 'concert_all';
        if ($params) {
            $additional_action = 'concert_' . $params[0];
            $id = null;
            if (count($params) > 0) {
                $id = $params[1];
            }
        } 
        $this->$additional_action($id);
    }

    public function concert_all() {
        $this->view->all_concerts = $this->model_concerts->get_all_concerts();
        $this->view->content_view = 'app/views/admin/concerts.php';
        $this->view->render();
    }
    
    public function concert_add() {
        $this->view->content_view = 'app/views/admin/add_concert.php';
        $this->view->render();
    }

    public function concert_insert() {
        if(filter_input(INPUT_POST, 'send')) {
            extract(filter_input_array(INPUT_POST));
            $image = $_FILES['image'];
            if($image) {
                if(file_exists('public/images/concerts/'.$image['name'])) {
                    $image['name'] = 'new_'.$image['name'];
                }
                move_uploaded_file($image['tmp_name'], 'public/images/concerts/'.$image['name']);
            }
            $this->model_concerts->insert_concert($image['name'], $date, $price, $description);
        }
        
        Route::redirect('/admin/concerts');
    }

    public function concert_edit($ID) {
        $this->view->concert = $this->model_concerts->get_one_concert($ID);
        $this->view->content_view = 'app/views/admin/edit_concert.php';
        $this->view->render();
    }

    public function concert_update() {
        if(filter_input(INPUT_POST, 'send')) {
            extract(filter_input_array(INPUT_POST));
            $this->model_concerts->update_concert($id, $date, $price, $description);
        }   
        
        Route::redirect('/admin/concerts');
    }

    public function concert_delete($ID) {
        $this->model_concerts->delete_concert($ID);
        
        Route::redirect('/admin/concerts');
    }

    public function action_orders($params = null) {
        $additional_action = 'order_all';
        if ($params) {
            $additional_action = 'order_' . $params[0];
            $id = null;
            if (count($params) > 0) {
                $id = $params[1];
            }
        } 
        $this->$additional_action($id);
    }

    public function order_all() {
        echo 'all orders';
    }
    
    public function order_proceed() {
        echo 'Change order status';
    }

    public function action_users($params = null) {
        $additional_action = 'user_all';
        if ($params) {
            $additional_action = 'user_' . $params[0];
            $id = null;
            if (count($params) > 0) {
                $id = $params[1];
            }
        } 
        $this->$additional_action($id);
    }

    public function user_all() {
        echo 'all users';
    }
    
    public function user_add() {
        echo 'form';
    }

    public function user_insert() {
        
    }

    public function user_delete() {
        
    }

}
