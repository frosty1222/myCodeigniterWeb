<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\mymodel;

class DescribeModel extends MyModel
{
    protected $table = 'add_describe';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['productcode','brand','origin','guarantee','product_id'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function __construct()
    {
        parent::__construct($this->table);
    }
}
