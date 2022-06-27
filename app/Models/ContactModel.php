<?php

namespace App\Models;

use App\Models\mymodel;

class ContactModel extends MyModel
{
    protected $table = 'contact';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname','content','phone','email','address','customer_id','protocol'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    function __construct()
    {
        parent::__construct($this->table);
    }
}
