<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\mymodel;

class ImageModel extends MyModel
{
    protected $table = 'add_image';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['images','product_id'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function __construct()
    {
        parent::__construct($this->table);
    }
}
