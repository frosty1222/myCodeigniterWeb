<?php

namespace App\Controllers;

use App\Controllers\MyController;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\PaymentModel;
use App\Models\UserModel;
use App\Models\CouponModel;
use App\Models\ColorModel;
use App\Models\CapacityModel;
use App\Models\ImageModel;
use App\Models\DescribeModel;
use App\Models\CommentModel;
use App\Models\AddressModel;
use App\Models\UserCouponModel;
class ProductController extends MyController
{
    public function index(){
        $data = [
            'title'=>'Lobby',
        ];
        $user = new UserModel();
        $userModel = new UserModel();
        $a =session('loggedUser');
        if(!isset($a)){
            return redirect('login');
        }else{
            $email = $_COOKIE['email'];
         if(isset($email)){
            $data['user2'] = session('loggedUser');
            $data['user'] = $userModel->getWhere(['email' => $email]);
          }
        }
        
        $coupon = new CouponModel();
        $data['scoupon'] = $coupon->GetField();
        return view('welcome',$data);
    }
    public function naviga(){
        $email = $_COOKIE['email'];
        if(!isset($email)){
          $q = redirect('login');
        }else{
            $q = redirect('/');
        }
     return $q;
    }
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Home',
        ];
        $userModel = new UserModel();
        $a = session('loggedUser');
        if (!isset($a)) {
            return redirect('login');
        } else {
            $email = $_COOKIE['email'];
            if (isset($email)) {
                $data['user2'] = session('loggedUser');
                $data['user'] = $userModel->getWhere(['email' => $email]);
            }
        }
        
        $product = new ProductModel();
        $color = new ColorModel();
        $capacity = new CapacityModel();
        $image = new ImageModel();
        $des= new DescribeModel();
        $data['getidpro'] = $product->getId($id);
        $data['cols'] = $color->getWhere(['product_id' => $id]);
        $data['capac'] = $capacity->getWhere(['product_id' => $id]);
        $data['ima'] = $image->getWhere(['product_id'=>$id]);
        $data['des'] = $des->getWhere(['product_id' => $id]);
        $capacs= $capacity->getWhere(['product_id' => $id]);
        $Comment = new CommentModel();
        $user = $userModel->getWhere(['email' => $email]);
        if($user){
            foreach($user->getResult() as $us){
                $customer_id = $us->id;
           }
        }
        
        $comment= $Comment->getWhere(['customer_id'=>$customer_id]);
        if($comment){
            foreach($comment->getResult() as $key=> $val){
                $exist = $val->customer_id;
            }
        }
        $data['exist'] = $exist;
        //  echo '<pre/>';
        // print_r($capac);
        // die();
        if(isset($capacs)){
           foreach($capacs->getResult() as $key=> $val){
               $caps=$val->quantity;
           }
        }else{
            if(isset($caps)){
                $data['caps'] = $caps; 
            }
        }
        $getidp =$product->getId($id);
        if($getidp){
            foreach($getidp->getResult() as $key=> $val){
                  $id = $val->id;
            }
        }
        $data['id'] = $id;
       
        $data['starnum'] = $this->countstar();
        //  echo '<pre/>';
        // print_r($starnum);
        // die();
        $review = new CommentModel();
        $totalreview = $review->getField();
        $totalreviews = 0;
        foreach ($totalreview->getResult() as $review) {
             $totalreviews += $review->customer_id;
        }
        $data['totalreviews'] = $totalreviews;
        return view('Cart/detail', $data);
    }
    public function countstar(){
        $comment = new CommentModel();
        $cout = $comment->GetField();
        if($cout){
        $totalstar = 0;
        $f = 0;
          foreach($cout->getResult() as $key=> $val){
               $totalstar += $val->rating_star;
               $cout = count(array($val->rating_star));
               $f +=$cout;
               $total = $totalstar / $f;
          }
        }
        return $total;
    }
    public function galery()
    {
        $data = [
            'title' => 'Galery Home',
        ];
        $userModel = new UserModel();
        $a = session('loggedUser');
        if (!isset($a)) {
            return redirect('login');
        } else {
            $email = $_COOKIE['email'];
            if (isset($email)) {
                $data['user2'] = session('loggedUser');
                $data['user'] = $userModel->getWhere(['email' => $email]);
            }
        }
        
        return view('Cart/galery', $data);
    }
    public function newspaper()
    {
        $data = [
            'title' => 'Newspaper Home',
        ];
        $userModel = new UserModel();
        $a = session('loggedUser');
        if (!isset($a)) {
            return redirect('login');
        } else {
            $email = $_COOKIE['email'];
            if (isset($email)) {
                $data['user2'] = session('loggedUser');
                $data['user'] = $userModel->getWhere(['email' => $email]);
            }
        }
        
        return view('Cart/newspaper', $data);
    }
    public function product()
    {
        $product = new ProductModel;
        
        $data = [
            'title' => 'Product Home',
        ];
        $data['product'] =$product->paginate(15,'product');
        $data['pager']=$product->pager;
         $userModel = new UserModel();
        $a =session('loggedUser');
        if(!isset($a)){
            return redirect('login');
        }else{
            $email = $_COOKIE['email'];
         if(isset($email)){
            $data['user2'] = session('loggedUser');
            $data['user'] = $userModel->getWhere(['email' => $email]);
          }
        }
        
        return view('Cart/product', $data);
    }
    public function service()
    {
        $data = [
            'title' => 'Service Home',
        ];
         $userModel = new UserModel();
        $a =session('loggedUser');
        if(!isset($a)){
            return redirect('login');
        }else{
            $email = $_COOKIE['email'];
         if(isset($email)){
            $data['user2'] = session('loggedUser');
            $data['user'] = $userModel->getWhere(['email' => $email]);
          }
        }
        
        return view('Cart/service', $data);
    }
    public function sub_news()
    {
        $data = [
            'title' => 'Cart Home',
        ];
         $userModel = new UserModel();
        $a =session('loggedUser');
        if(!isset($a)){
            return redirect('login');
        }else{
            $email = $_COOKIE['email'];
         if(isset($email)){
            $data['user2'] = session('loggedUser');
            $data['user'] = $userModel->getWhere(['email' => $email]);
          }
        }
        
        return view('Cart/sub_news', $data);
    }
    public function support()
    {
        $data = [
            'title' => 'Support Home',
        ];
         $userModel = new UserModel();
        $a =session('loggedUser');
        if(!isset($a)){
            return redirect('login');
        }else{
            $email = $_COOKIE['email'];
         if(isset($email)){
            $data['user2'] = session('loggedUser');
            $data['user'] = $userModel->getWhere(['email' => $email]);
          }
        }
        
        return view('Cart/support', $data);
    }
    public function bill(){
        $user = new UserModel();
        $address = new AddressModel();
        $data = [
            'title' => 'Bill Home',
        ];
        $data['fill'] = $user->getId($this->getuserid());
         $userModel = new UserModel();
        $a =session('loggedUser');
        if(!isset($a)){
            return redirect('login');
        }else{
            $email = $_COOKIE['email'];
         if(isset($email)){
            $data['user2'] = session('loggedUser');
            $data['user'] = $userModel->getWhere(['email' => $email]);
          }
        }
        $user =  $userModel->getWhere(['email' => $email]);
        foreach ($user->getResult() as $row) {
            $user_id = $row->id;
        }
        $data['address'] = $address->getWhere(['user_id' => $user_id]);
        return view('Cart/bill', $data);
    }
    public function getuserid()
    {
        $cus = session('loggedUser');
        $a = array($cus);
        $user = new UserModel();
        $query = $user->getId($a);
        foreach ($query->getResult() as $key => $value) {
            $value->email;
        }
        return $value->id;
    }
    public function index_product(){
        $data=['title'=>'Product Home',];
        $product = new ProductModel();
        $data['info'] = $product->paginate(10,'category');
        $data['pager']= $product->pager;
        return view('Admin/product/index_product',$data);
    }
    public function edit_product($id){
       $product = new ProductModel();
       $data=['title'=>'Home product',];
       $data['product'] = $product->getId($id);
       return view('Admin/product/edit_product',$data);
    }
    public function add_product(){
        $category = new CategoryModel();
        $data = [
            'title'=>'Add Product Home',
        ];
        return view('Admin/product/add_product',$data);
    }
    public function store(){
        $product = new ProductModel();
        if ($imagefile = $this->request->getFile('image')) {
            if ($imagefile->isValid() && !$imagefile->hasMoved()) {
                $newName = $imagefile->getName();
                $imagefile->move('public/uploads', $newName);
            }
        }
        $data = [
            'name'=>$this->request->getpost('name'),
            'price'=>$this->request->getpost('price'),
            'sale_price'=>$this->request->getpost('sale_price'),
            'description'=>$this->request->getpost('description'),
            'image'=>$imagefile->getName(),
            'category_id' => $this->request->getpost('category_id'),
        ];
        // echo '<pre/>';
        // print_r($data);
        // die();
        $product->AddField($data);
        return redirect()->to(base_url('index_product'))->with('status','add successfull');
    }
    public function update($id){
        $product = new ProductModel();
        if ($imagefile = $this->request->getFile('image')) {
            if ($imagefile->isValid() && !$imagefile->hasMoved()) {
                $newName = $imagefile->getName();
                $imagefile->move('public/uploads', $newName);
            }
        }
        $data = [
            'name' => $this->request->getpost('name'),
            'price' => $this->request->getpost('price'),
            'sale_price' => $this->request->getpost('sale_price'),
            'description' => $this->request->getpost('description'),
            'image' => $imagefile->getName(),
            'category_id' => $this->request->getpost('category_id'),
        ];
        // echo '<pre/>';
        // print_r($data);
        // die();
        $product->EditField($id,$data);
        return redirect()->to(base_url('index_product'))->with('status', 'add successfull');
    }
    public function delete($id){
       $product = new ProductModel();
       $product->DeleteField($id);
       return redirect()->to(base_url('index_product'))->with('status', 'add successfull');
    }
    public function update_hastag($id){
        $product = new ProductModel();
        $has = $product->find($id);
        $id=$has['id'];
        $data =['hastag'=>$this->request->getVar('hastag')];
        $product->updateWhere($id,$data);
        // echo '<pre/>';
        // print_r($data);
        // die();
        return redirect()->to(base_url('index_product'))->with('status', 'add hastag successfull');
    }
    public function add_comment($id){
        $comment = new CommentModel();
        $data=[
            'comment' =>$this->request->getpost('comment'),
            'rating_star' =>$this->request->getpost('rating_star'),
            'product_id' =>$this->request->getpost('product_id'),
            'customer_id' => $this->request->getpost('customer_id'),
        ];
        $comment->AddField($data);
        return redirect()->to('detail/'.$id);
    }
}