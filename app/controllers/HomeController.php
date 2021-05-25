<?php

namespace app\controllers;

use src\controller\Controller;

class HomeController extends Controller {

    public function index() {
        return $this->view('index');
    }


}
