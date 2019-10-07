<?php

class homeController extends Controller
{
    public function index($id='',$name='')
    {

        $this->view('home/index', []);
        $this->view->render();

    }

    public function aboutUs()
    {

        $this->view('home/aboutus', []);
        $this->view->render();
    }
}


?>