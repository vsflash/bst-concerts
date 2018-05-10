<?php

class Controller_Admin extends Controller {

    function action_index() {
//        $this->view->content_view = 'main_view.php';
//        $this->view->portfolios = $this->model->get_data();
//        $this->view->render();
	echo 'main admin panel';
    }

    function action_concerts($params) {
	$additional_action = 'concert_' . $params[0];
	$id = null;
	if (count($params) > 0) {
	    $id = $params[1];
	}
	$this->$additional_action($id);
    }

    function concert_add() {
	echo 'Form to add new concert';
    }

    function concert_insert() {
	
    }

    function concert_edit($ID) {
	echo 'Form to edit some concert with ID = ' . $ID;
    }

    function concert_update() {
	
    }

    function concert_delete() {
	
    }

    function action_orders($params) {
	$additional_action = 'order_' . $params[0];
	$id = null;
	if (count($params) > 0) {
	    $id = $params[1];
	}
	$this->$additional_action($id);
    }

    function order_proceed() {
	echo 'Change order status';
    }

    function action_users($params) {
	$additional_action = 'user_' . $params[0];
	$id = null;
	if (count($params) > 0) {
	    $id = $params[1];
	}
	$this->$additional_action($id);
    }

    function user_add() {
	echo 'form';
    }

    function user_insert() {
	
    }

    function user_delete() {
	
    }

}
