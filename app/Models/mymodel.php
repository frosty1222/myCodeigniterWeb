<?php

/**
 * @author Van Dong
 * @Emai: lodong601@gmail.com
 * Create at: 29/11/2021
 */
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;
class MyModel extends Model{
    protected $table ='';
    public $pager;
    function __construct($table)
    {
        $this->table = $table;
        $this->db = db_connect();
        $this->db->table($table);
        parent::__construct();
    }
    public function GetField(){
        $builder = $this->db->table($this->table);
        $query = $builder->get();
        return $query;
    }
    public function AddField($data){
        $builder = $this->db->table($this->table);
        $query = $builder->insert($data);
        return $query;
    }
    public function getId($value){
        $builder = $this->table($this->table);
        $query = $builder->getWhere(['id'=>$value]);
        return $query; 
    }
    public function EditField($data,$id){
        $builder = $this->table($this->table);
        $query = $builder->update($data,$id);
        return $query;
    }
    public function updateWhere($id,$data){
        $builder = $this->table($this->table);
        $builder->where('id',$id);
        $query = $builder->update($id,$data);
        return $query;
    }
    public function updateWhere2($id, $data)
    {
        $builder = $this->table($this->table);
        $builder->whereIn('id', [$id]);
        $query = $builder->update($id, $data);
        return $query;
    }
    public function replaceField($data)
    {
        $builder = $this->table($this->table);
        $query = $builder->replace($data);
        return $query;
    }
    public function DeleteField($id){
        $builder = $this->table($this->table);
        $builder->where('id', $id);
        $query = $builder->delete();
        return $query;
    }
    public function uploadFile($field_name){
        if ($imagefile = $this->request->getFile($field_name)) {
            if ($imagefile->isValid() && !$imagefile->hasMoved()) {
                $newName = $imagefile->getName();
                $imagefile->move('public/uploads', $newName);
            }
        }
        return $imagefile;
    }
    public function getLimit($nb)
    {
        $builder = $this->table($this->table);
        $query =  $builder->orderBy('name', 'ASC');
        $query = $builder->limit($nb);
        $query = $builder->get();
        return $query;
    }
}
