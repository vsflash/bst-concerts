<?php

class Controller_Concerts extends Controller {

    function action_index() {
	echo 'all concerts';
//        $this->view->content_view = 'main_view.php';
//        $this->view->portfolios = $this->model->get_data();
//        $this->view->render();
	//TODO взять из модели все записи, передать в view и вывести
    }

    function action_order() {
	echo 'form';
	//TODO вывести форму с заполненными полями о концерте, кол-во билетов редактируемое
    }

    function action_order_process() {
	echo 'Order accept';
	//TODO принять данные с формы и проверить, добавить в БД, сообщение о поступлении заказа в обработку
    }

}
