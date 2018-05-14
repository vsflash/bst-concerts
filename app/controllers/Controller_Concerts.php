<?php

class Controller_Concerts extends Controller {

    protected $model_concerts;
    
    public function __construct() {
        parent::__construct();
        $this->model_concerts = new Model_Concerts();
        $this->view->template_view = 'main.php';
    }

    function action_index() {
        $this->view->all_concerts = $this->model_concerts->get_all_concerts();
        $this->view->content_view = 'app/views/main/concerts_view.php';
        $this->view->render();
    }

    function action_order() {
	$id = filter_input(INPUT_POST, 'id');
	$this->concert = $this->model_concerts->get_one_concert($id);
	$this->view->content_view = 'app/views/main/order_view.php';
        $this->view->render();
	//TODO вывести форму с заполненными полями о концерте, кол-во билетов редактируемое
    }

    function action_order_process() {
        $concert_id = filter_input(INPUT_POST, 'concert_id');
        $name = filter_input(INPUT_POST, 'name');
        $phone = filter_input(INPUT_POST, 'phone');
        $count_of_tickets = filter_input(INPUT_POST, 'count_of_tickets');
        if($this->model_concerts->insert_order($name, $phone, $concert_id, $count_of_tickets, $status=0)){
            $this->view->content_view = 'app/views/main/order_process_view.php';
            $this->view->render();
        }else{
            echo 'Произошла ошибка, заказ не принят';
        }
	//TODO принять данные с формы и проверить, добавить в БД, сообщение о поступлении заказа в обработку
    }

}
