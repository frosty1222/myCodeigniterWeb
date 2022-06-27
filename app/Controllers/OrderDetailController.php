<?php

namespace App\Controllers;

use App\Controllers\MyController;
use App\Models\OrderDetailModel;
use App\Models\CartModel;
use App\Models\ProductModel;
use App\Models\ImageModel;
use App\Models\UserModel;
class OrderDetailController extends MyController
{
    public function order_view(){
        $images = new ImageModel();
        $carts = new CartModel();
       $data = ['title'=>'Order Home'];
       $getMix = new ProductModel();
       $getCus = new CartModel();
        $ge = new OrderDetailModel();
       $data['detail'] = $ge->paginate(6, 'detail');
       $data['order_view'] = $getCus->paginate(6, 'order_view');
       $data['pager'] = $getCus->pager;
        $items = $carts->GetField();
        if (isset($items)) {
            foreach ($items->getResult() as $key => $ite) {
                $sub_image = $images->getWhere(['id' => $ite->image]);
                foreach ($sub_image->getResult() as $row) {
                    $imag = $row->images;
                    $checkid = $row->id;
                }
            }
        }
        $gettotal = $getCus->GetField();
        foreach($gettotal->getResult() as $row) {
            $total_apdiscount =$row->total_apdiscount;
        }
        $data['total_apdiscount'] = $total_apdiscount;
    //    echo '<pre/>';
    //    print_r($data);
    //    die();
    $data['imag'] = $imag;
    $data['checkid'] = $checkid;
       return view('Admin/order/index',$data);
    }
    public function orderdetail_view()
    {
        $detail= new OrderDetailModel();
        $data = ['title' => 'Order Detail Home'];
        $data['detail'] = $detail->paginate(6,'detail');
        $data['Pager'] = $detail->Pager;
        return view('Admin/order_detail/index', $data);
    }
    public function getCustomerid()
    {
        $pro = new OrderDetailModel();
        $query = $pro->GetField();
        foreach ($query->getResult() as $row) {
            $row->customer_id;
        }
        return $row->customer_id;
    }
    public function updateStatus($id){
        $status = new OrderDetailModel();
        $has = $status->find($id);
        $id = $has['id'];
        $data = ['status' => $this->request->getVar('status')];
        // echo '<pre/>';
        // print_r($data);
        // die();
        $status->updateWhere($id, $data);
        return redirect()->to(base_url('orderdetail_view'));
    }
    public function orderdetail(){
        $userModel = new UserModel();
        $getCus = new CartModel();
        $data = [
            'title'=>'Order Detail',
        ];
        $orderdetail = new OrderDetailModel();
        $user = new UserModel();
        $email = $_COOKIE['email'];
        $users = $user->getWhere(['email'=>$email]);
        foreach($users->getResult() as $row){
              $customer_id = $row->id;
        }
        $data['orderdetail']=$orderdetail->getWhere(['customer_id'=>$customer_id]);
        $gettotal = $getCus->GetField();
        foreach ($gettotal->getResult() as $row) {
            $total_apdiscount = $row->total_apdiscount;
        }
        $data['total_apdiscount'] = $total_apdiscount;
        $email = $_COOKIE['email'];
        $data['user'] = $userModel->getWhere(['email' => $email]);
        $product = new ProductModel();
        $data['product'] = $product->getLimit(20);
        return view('User_site/order_detail',$data);
    }
}