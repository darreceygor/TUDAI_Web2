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
        $specialities = $this->model->getSpecialities();

        $this->view->showDoctors($doctors,$specialities);
    }

    function showAbout(){

        $this->view->about();

    } 

    function showAdmin(){

        $doctors = $this->model->getDoctors();
        $this->view->admin($doctors);

    } 



}