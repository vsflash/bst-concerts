<?php

require_once 'app/models/Model_Users.php';
require_once 'app/models/Model_Concerts.php';

class Controller_Admin extends Controller {

    protected $model_concerts;
    protected $model_users;
    const AVAILABLE_ORDERS_FILTERS = array('all', 'unprocessed');
    
    public function __construct() {
        parent::__construct();
        if(empty($_SESSION['login'])){
            Route::redirect("/auth/");
        }
        $this->model_users = new Model_Users();
        $this->model_concerts = new Model_Concerts();
        $this->view->template_view = 'admin.php';
    }

    public function action_index() {
        $this->view->content_view = 'app/views/admin/admin_home.php';
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
        if(!$_SESSION['filter']) {
            $_SESSION['filter'] = 'unprocessed';
        }
        $get_orders = 'get_'.$_SESSION['filter'].'_orders';
        $this->view->orders_filters = self::AVAILABLE_ORDERS_FILTERS;
        $this->view->all_orders = $this->model_concerts->$get_orders();
        $this->view->content_view = 'app/views/admin/orders.php';
        $this->view->render();
    }
    
    public function order_proceed($ID) {
        $this->model_concerts->change_order_status($ID);
        
        Route::redirect('/admin/orders');
    }

    public function order_filter($filter) {
        if(in_array($filter, self::AVAILABLE_ORDERS_FILTERS)) {
            $_SESSION['filter'] = $filter;
        }
        Route::redirect('/admin/orders');
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
        $this->view->all_users = $this->model_users->get_all_users();
        $this->view->content_view = 'app/views/admin/users.php';
        $this->view->render();
    }
    
    public function user_add() {
        $this->view->content_view = 'app/views/admin/add_user.php';
        $this->view->render();
    }

    public function user_insert() {
        if(filter_input(INPUT_POST, 'send')){
            extract(filter_input_array(INPUT_POST));
            if($password === $conf_password) {
                $this->model_users->insert_user($login, $email, password_hash($password, PASSWORD_DEFAULT));
            } else {
                Route::redirect('/admin/users/add');
            }
        } else {
            Route::redirect('/admin/users');
        }       
    }

    public function user_delete($ID) {
        $this->model_users->delete_user($ID);
        
        Route::redirect('/admin/users');
    }

}
