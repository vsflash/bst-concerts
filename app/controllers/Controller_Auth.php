<?php
require_once 'app/models/Model_Users.php';
class Controller_Auth extends Controller {
    public function __construct() {
        parent::__construct();
        $this->model = new Model_Users();
        $this->view->template_view = 'authorization.php';
    }
    public function action_index() {
        $this->view->content_view = 'login_view.php';
        $this->view->render();
    }
    public function action_register() {
        $this->view->content_view = 'register_view.php';
        $this->view->render();
    }
    public function action_adduser() {
        $user = filter_input_array(INPUT_POST);
        if ($user['pass'] !== $user['confPass']) {
            Route::redirect('auth/register');
        }
        if ($this->model->insert_user($user['login'], $user['email'], password_hash($user['pass'], PASSWORD_DEFAULT))) {
            Route::redirect('/admin');
        }
    }
    public function action_signin() { //TODO пересмотреть логику
        $user = filter_input_array(INPUT_POST);
        $user_from_db = $this->model->getUserByLogin($user['login']);
        if ($user_from_db) {
            if (password_verify($user['pass'], $user_from_db['password'])) {
                $_SESSION['login'] = $user['login'];
                Route::redirect('/admin');
            } else {
                Route::redirect('/auth');
            }
        } else {
            Route::redirect('/auth');
        }
    }
    public function action_signout() {
        unset($_SESSION['login']);
        Route::redirect("/auth/");
    }
    public static function checkAuthUser() {
        if (!empty($_SESSION['login'])) {
            return true;
        }
        return false;
    }
}