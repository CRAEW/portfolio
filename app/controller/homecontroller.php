<?php

class homeController extends Controller
{
    public function contact()
    {

        $this->view('home/contact', []);
        $this->view->render();

    }

    public function aboutme()
    {

        $this->view('home/aboutme', []);
        $this->view->render();
    }
}


?>