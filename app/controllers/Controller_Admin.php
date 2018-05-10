<?php

class Controller_Main extends Controller {

    function action_index() {
        $this->view->content_view = 'main_view.php';
        $this->view->portfolios = $this->model->get_data();
        $this->view->render();
    }

}
