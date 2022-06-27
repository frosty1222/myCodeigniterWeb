<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\mymodel;

class CartModel extends MyModel
{
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['name', 'price', 'sale_price','image','quantity','color','capacity','product_id','total_apdiscount'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function __construct()
    {
        parent::__construct($this->table);
    }
}
