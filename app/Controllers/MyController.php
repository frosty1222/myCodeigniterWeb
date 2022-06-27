<?php

namespace App\Controllers;
use App\Models\Test;
use App\Models\CategoryModel;
use App\Models\ProductModel;
class MyController extends BaseController
{
    public $new;
    public $category;
    public $product;
    public function __construct(){
        $this->new = new Test();
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
    }
}
