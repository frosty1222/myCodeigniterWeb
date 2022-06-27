<?php

namespace App\Models;

use App\Models\mymodel;

class PaymentModel extends MyModel
{
    protected $table = 'payment';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname','email','phone','note','checkbox','bill_code'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    function __construct()
    {
        parent::__construct($this->table);
    }
}
