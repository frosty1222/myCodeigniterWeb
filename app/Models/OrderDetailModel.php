<?php

namespace App\Models;

use App\Models\mymodel;

class OrderDetailModel extends MyModel
{
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_id','status','cart_id','total_price','type_delivery'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    function __construct()
    {
        parent::__construct($this->table);
    }
}
