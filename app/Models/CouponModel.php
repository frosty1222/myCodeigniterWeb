<?php

namespace App\Models;

use App\Models\mymodel;

class CouponModel extends MyModel
{
    protected $table = 'coupon';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'type', 'amount','expried_day'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    function __construct()
    {
        parent::__construct($this->table);
    }
}
