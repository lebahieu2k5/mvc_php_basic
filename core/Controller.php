<?php
class Controller
{
    public function view($view, $data = [])
    {
        extract($data);

        ob_start();
        require_once __DIR__ . '/../app/views/' . $view . '.php';
        $content = ob_get_clean();

        require_once __DIR__ . '/../app/views/layouts/main.php';
    }

    public function model($model)
    {
        require_once __DIR__ . '/../app/models/' . $model . '.php';
        return new $model();
    }
}
