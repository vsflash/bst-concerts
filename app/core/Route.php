<?php

class Route {

    static public function start() {
        // контроллер и действие по умолчанию
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        // получаем имя контроллера
        if (!empty($routes[1])) {
            $controller_name = ucfirst($routes[1]);
        }

        // получаем имя экшена
        if (!empty($routes[2])) {
            $action_name = $routes[2];
        }

        // добавляем префиксы
        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        // подцепляем файл с классом модели (файла модели может и не быть)

        $model_file = $model_name . '.php';
        $model_path = "app/models/" . $model_file;
        if (file_exists($model_path)) {
            include $model_path;
        }

        // подцепляем файл с классом контроллера
        $controller_file = $controller_name . '.php';
        $controller_path = "app/controllers/" . $controller_file;
        if (file_exists($controller_path)) {
            include $controller_path;
        } else {
            /*
              правильно было бы кинуть здесь исключение,
              но для упрощения сразу сделаем редирект на страницу 404
             */
            Route::ErrorPage404();
        }

        // создаем контроллер
        $controller = new $controller_name;

        if (method_exists($controller, $action_name)) {
            // вызываем действие контроллера
            $controller->$action_name();
        } else {
            // здесь также разумнее было бы кинуть исключение
            Route::ErrorPage404();
        }
    }

    static public function ErrorPage404() {
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        exit('page not found');
        //TODO красивая страница 404
    }

}
