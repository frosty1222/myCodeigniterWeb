<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\mymodel;

class CommentModel extends MyModel
{
    protected $table = 'review';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['comment','rating_star', 'product_id','customer_id'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function __construct()
    {
        parent::__construct($this->table);
    }
}
