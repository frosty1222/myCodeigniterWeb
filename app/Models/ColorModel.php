<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\mymodel;

class ColorModel extends MyModel
{
    protected $table = 'add_color';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['color','product_id'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function __construct()
    {
        parent::__construct($this->table);
    }
}
