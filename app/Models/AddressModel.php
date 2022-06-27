<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\mymodel;

class AddressModel extends MyModel
{
    protected $table ='address';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['name','email','phone','city','district','village','alley','home_number','user_id'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function __construct()
    {
        parent::__construct($this->table);
    }
}
