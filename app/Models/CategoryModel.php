<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\mymodel;
class CategoryModel extends MyModel
{
    protected $table ='categories';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['name','status','prioty'];
    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    public function __construct(){
        parent::__construct($this->table);
    }
}
