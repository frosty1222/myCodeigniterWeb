<?php

namespace App\Controllers;

use App\Controllers\MyController;
use App\Models\ColorModel;
use App\Models\ImageModel;
use App\Models\CapacityModel;
use App\Models\ProductModel;
use App\Models\DescribeModel;
class ContributeController extends MyController{
    public function add_color($id){
        $color = new ColorModel();
        $product = new ProductModel();
        
        $data = [
            'title'=>'Color Add Home',
        ];
        $data['fet'] = $product->getId($id);
        return view('Admin/admin_site/add_color',$data);
    }
    public function add_capacity($id)
    {
        $capacity = new CapacityModel();
        $product = new ProductModel();
        $data = [
            'title' => 'Capacity Add Home',
        ];
        $data['capacity'] = $product->getId($id);
        return view('Admin/admin_site/add_capacity', $data);
    }
    public function add_image($id)
    {
        $image = new ImageModel();
        $product = new ProductModel();
        $data = [
            'title' => 'Image Add Home',
        ]; 
        $data['datas'] = $product->getId($id);
        // echo '<pre/>';
        // print_r($data['datas']);
        // die();
        return view('Admin/admin_site/add_image', $data);
    }
    public function add_describe($id){
        $data=[
            'title' => 'Describe',
        ];
        $product = new ProductModel();
        $data['datas'] = $product->getId($id);
        $procode = rand(0, 999);
        $string = "ADFJL012";
        $procodes = $procode.$string;
        //  echo '<pre/>';
        // print_r($procodes);
        // die();
        $data['procodes'] = $procodes;
        return view('Admin/admin_site/add_describe',$data);
    }
    public function save_describe($id){
        $des = new DescribeModel();
        $data= [
            'productcode'=>$this->request->getpost('productcode'),
            'brand'=>$this->request->getpost('brand'),
            'origin'=>$this->request->getpost('origin'),
            'guarantee' => $this->request->getpost('guarantee'),
            'product_id' => $this->request->getpost('product_id'),
        ];
        $da = $des->addField($data);
        //   echo '<pre/>';
        // print_r($da);
        // die();
        return redirect()->to('add_describe/'.$id);
    } 
    public function save_image($id)
    {
        $image= new ImageModel();
        if ($imagefile = $this->request->getFiles()) {
            foreach ($imagefile['images'] as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $newName = $img->getName();
                    $img->move('public/upload', $newName);
                }
                $data = [
                'images'=>$img->getName(),
                'product_id'=>$this->request->getpost('product_id'),
                ];
               $image->AddField($data);
            }
        }
        return redirect()->to('index_product');
    }
    public function save_color($id)
    {
        $color = new ColorModel();
        $data = [
            'color' => $this->request->getpost('color'),
            'product_id' => $this->request->getpost('product_id'),
        ];
        $color->AddField($data);
       return redirect()->to('add_color/'.$id);
    }
    public function save_capacity($id)
    {
        $capacity = new CapacityModel();
        $muticapacity = $this->request->getpost('capacity');
        foreach($muticapacity as $capa){
            $data = [
            'capacity'=>$capa,
            'product_id'=>$this->request->getpost('product_id'),
            'quantity' => $this->request->getpost('quantity'),
            ];
            $capacity->AddField($data);
        }
        return redirect()->to('add_capacity/'.$id);
    }
}