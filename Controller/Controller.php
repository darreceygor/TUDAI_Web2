<?php

require_once './Model/Model.php';
require_once './View/View.php';

class Controller {

    private $model;
    private $view;

    function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    function showHome(){

        $this->view->home();

    }


    function showList(){

        $doctors = $this->model->getDoctors();

        $this->view->showDoctors($doctors);
    }

    function showAbout(){

        $this->view->about();

    }
}