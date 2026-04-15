<?php
class HomeController extends Controller
{
    public function index()
    {
        $homeModel = $this->model('HomeModel');
        $message = $homeModel->getData();

        $this->view('home/index', [
            'title' => 'Trang chu MVC',
            'message' => $message
        ]);
    }
}
