<?php

namespace App\Controllers;

use App\Controllers\MyController;
use App\Models\CategoryModel;
class CategoryController extends MyController{
    public $category;
    public function __construct()
    {
         helper("form");
        $this->category = new CategoryModel();
    }
     public function index(){
         $data = [
             'title'=>'Home Category',
         ];
        $category = new CategoryModel();
        $data['category'] = $category->paginate(10);
        $data['pager'] = $category->pager;
        // echo '<pre/>';
        // print_r($data);
        // die();
         return view('Admin/category/index_category',$data);
     }
    public function add_category()
    {
        helper('form'); 
        $data = [
            'title' => 'Home Category',
        ];
        return view('Admin/category/add_category',$data);
    }
    public function store(){
        $category = new CategoryModel();
        $data=[
              'name'=>$this->request->getPost('name'),
              'status'=>$this->request->getPost('status'),
              'prioty' =>$this->request->getPost('prioty'),
        ];
        $category->AddField($data);
        // echo '<pre/>';
        // print_r($category->AddField($data));
        // die();
        return redirect()->to(base_url('index_category'))->with('status','add fields successfull');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'Home Category',
        ];
        $category = new CategoryModel();
        $data['page']=$category->getId($id);
        return view('Admin/category/edit_category', $data);
    }
    public function update($id){
        $category = new CategoryModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'status' => $this->request->getPost('status'),
            'prioty' => $this->request->getPost('prioty'),
        ];
        $category->EditField($id,$data);
        return redirect()->to(base_url('index_category'))->with('status','edit successfull');
    }
    public function delete($id){
        $category = new CategoryModel();
        $category->DeleteField($id);
        return redirect()->to('index_category')->with('status','delete successful');
    }
}