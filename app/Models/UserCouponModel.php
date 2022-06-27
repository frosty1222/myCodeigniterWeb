<?php

namespace App\Models;

use App\Models\mymodel;

class UserCouponModel extends MyModel
{
    protected $table = 'user_coupon';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'type','expried_day','number','coupid'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    function __construct()
    {
        parent::__construct($this->table);
    }
}
