<?php

namespace App\Models;

use App\Models\mymodel;

class ProductModel extends MyModel
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','price','image','sale_price','description','category_id','hastag'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    function __construct()
    {
        parent::__construct($this->table);
    }
}
