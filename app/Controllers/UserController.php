<?php

namespace App\Controllers;

use App\Controllers\MyController;
use App\Models\UserModel;
use App\Models\ProductModel;
use App\Models\AddressModel;
use App\Models\OrderDetailModel;
use App\Models\CartModel;
use App\Models\ImageModel;
class UserController extends MyController
{
    protected $user;
    public function __construct(){
        helper(['url','form']);
        $this->user = new UserModel();
    }
    public function index(){
        $data = [
            'title'=>'User View',
        ];
        $user = new UserModel();
        $data['user'] = $user->paginate(6,'user');
        $data['pager'] = $user->pager;
        return view('Admin/contact/user_view',$data);
    }
    public function delete($id){
        $user = new UserModel();
        $user->DeleteField($id);
        return redirect()->to(base_url('user_view'))->with('status','delete successful');
    }
    public function login(){
        $user = new UserModel();
        $data=[
            'title'=>'Login',
        ];
        $data['user'] = $user->GetField();
        return view('Cart/login',$data);
    }
    public function register()
    {
        $data=[
            'title' => 'Register',
        ];
        return view('Cart/register', $data);
    }
    public function save(){
        $userModel = new UserModel;
        $validation = $this->validate([
          'name' => 'required',
          'email'=>'required|valid_email|is_unique[user.email]',
          'password'=>'required|min_length[5]|max_length[12]',
          'confirm_password'=> 'required|min_length[5]|max_length[12]|matches[password]',
        ]);
        if(!$validation){
            return redirect('register',['validation'=>$this->validator]);
        }else{
            $name =$this->request->getpost('name');
            $email = $this->request->getpost('email');
            $password = $this->request->getpost('password');
            $data= [
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ];
            $userModel->AddField($data);
            $last_id = $userModel->insertID();
            session()->set('loggedUser', $last_id);
            return redirect()->to(base_url('/'));
        }
        return view('register');
    }
    function check()
    {
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_not_unique[user.email]',
                'errors' => [
                    'required' => 'email is required',
                    'valid_email' => 'Enter a valid email address',
                    'is_not_unique' => 'This email is not registered on our server'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[12]',
                'errors' => [
                    'required' => 'password is required',
                    'min_length' => 'password has not have at least 5 characters in length',
                    'max_length' => 'password must not have more than 12 characters in length',
                ]
            ]
        ]);
        if (!$validation) {
            return view('login', ['validation' => $this->validator]);
        } else {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $_COOKIE['email'] = $email;
            $_COOKIE['password'] = $password;
            setcookie("email", $email, time() + (86400 * 30), "/"); //;
            setcookie("password", $password, time() + (86400 * 30), "/");//
            $userModel = new UserModel();
            $user_info = $userModel->where('email', $email)->first();
            $check_password = $userModel->where('password', $password)->first();
            if ($check_password){
                $user_id = $user_info['id'];
                session()->set('loggedUser', $user_id);
                return redirect()->to(base_url('user_main'));
            }
            else{
                session()->setFlashdata('fail', 'incorrect password');
                return redirect()->to(base_url('login'))->withInput('status','unsuccessful');
            }
        }
    }
    public function logout(){
       session('loggedUser');
        session()->destroy();
        return redirect()->to('/');
    }
    public function usermain(){
        $data=[
            'title'=>'User Home',
        ];
        $product = new ProductModel();
        $data['product'] = $product->getLimit(20);
        $userModel = new UserModel();
        $email = $_COOKIE['email'];
        $data['user'] = $userModel->getWhere(['email' => $email]);
        return view('User_site/main_user',$data);
    }
    public function addava(){
        $email = $_COOKIE['email'];
        $data = [
            'title'=>'User Add new avatar',
        ];
        $product = new ProductModel();
        $data['product'] = $product->getLimit(20);
        $userModel = new UserModel();
        $data['user'] = $userModel->getWhere(['email' => $email]);
        return view('User_site/add_avatar',$data);
    }
    public function avasave(){

        
        if ($imagefile = $this->request->getFile('avatar')) {
            if ($imagefile->isValid() && !$imagefile->hasMoved()) {
                $newName = $imagefile->getName();
                $imagefile->move('public/Avatar', $newName);
            }
        }
        $data = [
            'avatar'=>$imagefile->getName(),
        ];
        $userModel = new UserModel();
        $email = $_COOKIE['email'];
        $usercheck = $userModel->getWhere(['email'=>$email]);
        foreach($usercheck->getResult() as $key=>$user) {
            $id = $user->id;
        }
        // echo '<pre/>';
        // print_r($user->id);
        // die();
        $userModel->updateWhere($id,$data);
        return redirect()->to(base_url('user_main'));
    }
    public function address(){
        $userModel = new UserModel();
        $email = $_COOKIE['email'];
        $data = [
            'title'=>'Add address home page',
        ];
        $product = new ProductModel();
        $data['product'] = $product->getLimit(20);
        $data['user'] = $userModel->getWhere(['email' => $email]);
       return view('User_site/add_address',$data);
    }
    public function save_address(){
         $address = new AddressModel();
        $user = new UserModel();
         $a=$_COOKIE['email'];
         $getusserid = $user->getWhere(['email'=>$a]);
         foreach($getusserid->getResult() as $row){
              $user_id = $row->id;
         }
         $data = [
             'city'=>$this->request->getpost('city'),
             'name'=>$this->request->getpost('name'),
             'email' => $this->request->getpost('email'),
             'phone' => $this->request->getpost('phone'),
             'district'=>$this->request->getpost('district'),
             'village'=>$this->request->getpost('village'),
             'alley'=>$this->request->getpost('alley'),
             'home_number' => $this->request->getpost('home_number'),
             'user_id' =>$user_id,
         ];
        $address->AddField($data);
         return redirect()->to('index_add');
    }
    public function index_add(){
        $userModel = new UserModel();
        $address = new AddressModel();
        $email = $_COOKIE['email'];
        $data = [
            'title'=>'Address Home',
        ];
        $data['user'] = $userModel->getWhere(['email' => $email]);
        $product = new ProductModel();
        $data['product'] = $product->getLimit(20);
        $user =  $userModel->getWhere(['email' => $email]);
        foreach($user->getResult() as $row) {
                 $user_id = $row->id;
        }
        $data['address'] = $address->getWhere(['user_id'=>$user_id]);
        return view('User_site/address',$data);
    }
    public function delete_address($id){
        $address = new AddressModel();
        $address->DeleteField($id);
        return redirect()->to('index_add');
    }
    public function success(){
        $userModel = new UserModel();
        $email =$_COOKIE['email'];
        $data =[
            'title'=>'Success Home',
        ];
        $data['user'] = $userModel->getWhere(['email' => $email]);
        $product = new ProductModel();
        $data['product'] = $product->getLimit(20);
        return view('User_site/success',$data);
    }
    public function orderview(){
        $userModel = new UserModel();
        $images = new ImageModel();
        $carts = new CartModel();
        $data = ['title' => 'Orderview Home'];
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
        foreach ($gettotal->getResult() as $row) {
            $total_apdiscount = $row->total_apdiscount;
        }
        $data['total_apdiscount'] = $total_apdiscount;
        //    echo '<pre/>';
        //    print_r($data);
        //    die();
        $email = $_COOKIE['email'];
        $data['user'] = $userModel->getWhere(['email' => $email]);
        $product = new ProductModel();
        $data['product'] = $product->getLimit(20);
        $data['imag'] = $imag;
        $data['checkid'] = $checkid;
        return view('User_site/orderview',$data);
    }
}
