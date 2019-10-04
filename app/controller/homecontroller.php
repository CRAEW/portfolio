<?php

class homeController extends Controller
{
    public function index($id='',$name='')
    {

        $this->view('home/index', [
            'id' => $id,
            'name' => $name
            
        ]);
        $this->view->render();

    }

    public function aboutUs()
    {

        $this->view('home/aboutus', []);
        $this->view->render();
    }
}


?>