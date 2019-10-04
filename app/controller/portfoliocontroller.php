<?php

class portfolioController extends Controller
{

    public function index()
    {
        $this->model('portfoliomodel', []);
        $this->view('portfolio/index', ['portfolio' => $this->model->getProjects()]);
        $this->view->render();

    }

}