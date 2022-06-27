<?php

namespace App\Controllers;

use App\Controllers\MyController;

class AdminController extends MyController
{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data=['title'=>'Admin'];
        return view('layouts/layout',$data);
    }
    public function Css(){
        return view('layouts/css.php');
    }
}
