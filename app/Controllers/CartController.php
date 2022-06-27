<?php
namespace App\Controllers;

use App\Controllers\MyController;
use App\Models\ProductModel;
use App\Models\PaymentModel;
use App\Models\OrderDetailModel;
use App\Models\UserModel;
use App\Models\CouponModel;
use App\Models\CartModel;
use App\Models\ImageModel;
use App\Models\UserCouponModel;
use App\Models\AddressModel;
use CodeIgniter\I18n\Time;
class CartController extends MyController{
    public function index()
    {
        $images = new ImageModel();
        $carts = new CartModel();
        $product = new ProductModel();
        $data = [
            'title' => 'Cart Home',
        ];
       
        $items = $carts->GetField();
        if(isset($items)){
            foreach ($items->getResult() as $key=>$ite) {
                $sub_image = $images->getWhere(['id'=>$ite->image]);
                foreach($sub_image->getResult() as $row){
                  $imag = $row->images;
                  $checkid = $row->id;
                }
            }

        }
        $data['user'] = session('loggedUser');
        $data['total'] = $this->total_money();
        if(isset($_GET['voucher'])){
              $name= $_GET['voucher'] ? $_GET['voucher'] : 0;
        }else{
           $name = 'dgdfgdfgd';
        } 
        $minus = new UserCouponModel();
        $getvo = $minus->getWhere(['name'=>$name]);
        $a =0;
        $b= 0;
        foreach ($getvo->getResult() as $row){
             $a = $row->type;
             $b= $row->name;
        }
        $data['a'] = $a;
        $data['b'] = $b;
        
        $data['items'] = $carts->GetField();
        $data['imag'] = $imag;
        $data['imag'] = $imag;
        $data['imag'] = $imag;
        $data['checkid'] = $checkid;
        // echo "<pre/>";
        //         print_r($data['imag']);
        //         die();
        echo session_id();
        return view('Cart/cart_view', $data);
    }
    public function uptotal(){
        $cartmodel = new CartModel();
        $orderdetailmodel = new OrderDetailModel();
        $cart = $cartmodel->GetField();
        $order = $orderdetailmodel->GetField();
        foreach($cart->getResult() as $row){
            foreach($order->getResult() as $rows){
               if($row->id == $rows->cart_id){
                 $id = $row->id;
                $data =[
                   'total_apdiscount'=>$this->request->getpost('total_apdiscount'),
                ];
                 $cartmodel->updateWhere($id,$data);
               }
            }
        }
       
        return redirect()->to('cart_view');
    } 
    public function getvoucher(){}
    public function payment()
    {
        $payment = new PayMentModel();
        $address = new AddressModel();
        $cart = new CartModel();
        $order = new OrderDetailModel();
        $data = [
            'title' => 'Payment Home',
        ];
        $data['total'] = $this->total_money();
        $data['quantity'] = $this->getQuantity();
        $data['user'] = session('loggedUser');
        $email = $_COOKIE['email'];
        $data['payment']=$address->getWhere(['email'=>$email]);
        $data['payments'] = $payment->getWhere(['email' => $email]);
        //$data['total_money'] = $this->total_money();
        $data['time'] = $this->getcurrenttime();
        $data['cartitem'] =$cart->getField();
        $data['cartitems'] = $cart->getField();
        $data['order'] = $order->getField();
        $cartitem = $cart->getField();
        foreach($cartitem->getResult() as $key=>$value){
                $total_money =$value->total_apdiscount;
        }
        $data['total_money'] = $total_money;
        // echo "<pre/>";
        // print_r($data);
        // die();
        return view('Cart/payment', $data);
    }
    public function save_final_bill(){
        $cartmodel = new CartModel();
        $orderdetailmodel = new OrderDetailModel();
        $cart = $cartmodel->GetField();
        $order = $orderdetailmodel->GetField();
        foreach ($cart->getResult() as $row) {
            foreach ($order->getResult() as $rows) {
                if ($row->id == $rows->cart_id) {
                    $id = $rows->id;
                    $total_price = $row->total_apdiscount;
                    $data=[
                    'total_price' => $total_price,
                     'type_delivery'=>$this->request->getpost('type_delivery'),
                   ];
                //    echo "<pre/>";
                //     print_r($data);
                //     die();
                    $orderdetailmodel->updateWhere($id,$data);
                }
            }
        }
        return redirect()->to('success');
    }
    public function addCart($id){
        $cartmodel = new CartModel();
        $product = new ProductModel();
        $pro=$product->find($id);
        $color = $this->request->getpost('color');
        $images = $this->request->getpost('images');
        $capacity= $this->request->getpost('capacity');
        $quantity = $this->request->getpost('quantity');
        $pro2= 
            $item=[
                'id'=>$pro['id'],
                'name' => $pro['name'],
                'price' => $pro['price'],
                'sale_price' => $pro['sale_price'],
                'image' => $images ? $images: $pro['image'],
                'color'=>$color ? $color :0,
                'capacity'=>$capacity ? $capacity : 0,
                'quantity' =>$quantity,
            ];
        $session = session();
       
          $cart = session('shop');
          $session->set('shop', $cart);
          $cart=array($item);
        $cartcheck = $cartmodel->getId($id);
        // echo "<pre/>";
        // print_r($cartcheck);
        // die();
        foreach($cartcheck->getResult() as $result){
                 $ac = $result->product_id;
        }
        if (!isset($ac)) {
            if(isset($cart)){
            foreach($cart as $it){
                $name= $it['name'];
                $price= $it['price'];
                $sale_price= $it['sale_price'];
                $image= $it['image'];
                $color = $it['color'];
                $capacity = $it['capacity'];
                $quantity= $it['quantity'];
                $product_id = $it['id'];
            }
            $data =[
                'name' =>$name,
                'price' =>$price,
                'sale_price' =>$sale_price,
                'image'=>$image,
                'quantity' =>$quantity,
                'color'=>$color,
                'capacity'=>$capacity,
                'product_id' =>$product_id,
            ];
            $cartmodel->AddField($data);
           }
        }
       
        return redirect()->to(base_url('cart_view'))->with('status','addCArt Successfully');
    }
    private function exists($id){
        $carts = new CartModel();
        $items = $carts->getId($id);
        $a =0;
        foreach($items->getResult() as $item){
               $a = $item->id;
              $b = array($a);
        for($i=0;$i<count($b);$i++){
           if($b[$i]['id'] == $id){
               return $i;
           }
        }
        } 
        //  echo "<pre/>";
        // print_r($i);
        // die();
        return -1;
    }
    public function total_money(){

        $cartmodel = new CartModel();
        $total = $cartmodel->GetField();
        $total_money=0;
        foreach($total->getResult() as $item){
           $total_money += $item->price *$item->quantity;
        }
        return $total_money;
    }
    public function delete_cart($id){
        $cartmodel = new CartModel();
        $cartmodel->DeleteField($id);
        return redirect()->to(base_url('cart_view'))->with('status', 'delete Successfully');
    }
    public function clear(){
        $cartmodel = new CartModel();
        $cartmodel->purgeDeleted();
        return redirect()->to(base_url('cart_view'))->with('status', 'addCArt Successfully');
    }
    public function update($id){
        $cartmodel = new CartModel();
        $has = $cartmodel->find($id);
        $id = $has['id'];
        $data = ['quantity'=>$this->request->getVar('quantity')];
        // echo "<pre/>";
        // print_r($data);
        // die();
        $cartmodel->updateWhere($id,$data);
        
        return redirect()->to(base_url('cart_view'))->with('status', 'addCArt Successfully');
    }
    // public function getproid(){
    //     $carts = new CartModel();
    //     $product_id = $carts->GetField();
    //     foreach($product_id->getResult() as $pro){
    //         if($pro !=0){
    //            $a = $pro->id;
    //         }
    //     }
    //      return $a;
    // }
    public function getuserid()
    {
        $user = new UserModel();
        $email = $_COOKIE['email'];
        $query = $user->getWhere(['email'=>$email]);
        foreach($query->getResult() as $key => $value){
             $a1 = $value->id;
        }
        return $a1;
    }
    public function getQuantity(){
        $cartmodel = new CartModel();
        $quan = $cartmodel->GetField();
        $quantity = 0;
       foreach($quan->getResult() as $value){
         $quantity += $value->quantity; 
       }
        return $quantity;
    }
    public function save_payment(){
        $payment= new PayMentModel();
        $detail = new OrderDetailModel();
        $bill_code = rand(0,999);
        $data=[
            'fullname'=>$this->request->getpost('fullname'),
            'email'=>$this->request->getpost('email'),
            'phone'=>$this->request->getpost('phone'),
            'note'=>$this->request->getpost('note'),
            'checkbox'=>$this->request->getpost('checkbox'),
            'bill_code'=>$bill_code,
        ]; 
        $payment->AddField($data);
        $carts = new CartModel();
        $product_id = $carts->GetField();
         foreach ($product_id->getResult() as $row){
         $data2=[
            'customer_id' =>$this->getuserid(),
            'cart_id'=>$row->id, 
            'status'=>1,
        ]; 
         $detail->AddField($data2);
       }
        return redirect()->to(base_url('payment'))->with('status','Your information has been sent.thank you!');
    }
    public function coupon(){
        $couponmodel = new CouponModel();
        $data=[
            'title' => 'Coupon View',
        ];
        $data['coupon'] = $couponmodel->paginate(6,'coupon');
        $data['pager']=$couponmodel->pager;
        return view('Admin/coupon_view',$data);
    }
    public function add_coupon(){
        $couponmodel = new CouponModel();
        $data = [
            'title' => 'Coupon View',
        ];
        $data['coupon'] = $couponmodel->GetField();
        return view('Admin/admin_site/add_coupon', $data);
    }
    public function save_coupon(){
        $couponmodel = new CouponModel();
        $data=[
            'name' =>$this->request->getpost('name'),
            'type' =>$this->request->getpost('type'),
            'amount' =>$this->request->getpost('amount'),
            'expired_day' => $this->request->getpost('expired_day'),
        ];
        $couponmodel->AddField($data);
        return redirect()->to(base_url('coupon'))->with('status','add successfully');
    }
    public function delete_coupon($id){
        $couponmodel = new CouponModel();
        $couponmodel->DeleteField($id);
        return redirect()->to(base_url('coupon'))->with('status', 'add successfully');
    }
    public function getCoupon($id){
        $getusercoupon = new UserCouponModel();
        $coupon = new CouponModel();
        $cou = $coupon->find($id);
        $voucher = [
            'id' => $cou['id'],
            'name' => $cou['name'],
            'type' => $cou['type'],
            'amount' =>1,
            'expired_day' => $cou['expired_day'],
        ];
        
        $session = session();
        if ($session->has('voucher')) {
            $indexs = $this->existid($id);
            $ca = session('voucher');
            if ($indexs == -1) {
                array_push($ca, $voucher);
            } else {
                $ca[$indexs]['amount']++;
            }
            $session->set('voucher', $ca);
        } else {
            $ca = array($voucher);
            $session->set('voucher', $ca);
        }
        if(isset($ca)){
            foreach($ca as $val){
                   $coupid = $val['id'];
                   $name = $val['name'];
                   $type = $val['type'];
                   $expired_day = $val['expired_day'];
                   $number = $val['amount'];
                 $data = [
                     'coupid'=>$coupid,
                     'name'=>$name,
                     'type'=>$type,
                     'expired_day'=>$expired_day,
                     'number'=>$number,
                 ]; 
            }
             $getusercoupon->AddField($data);
        }
        // $vou = array($voucher);
        // $session->set('voucher', $vou);
        
        // echo '<pre/>';
        // print_r($voucher);
        // die();
        return redirect()->to(base_url('coup_view'));
    }
    private function existid($id)
    {
        $ite= session('voucher');
        for ($i = 0; $i < count($ite); $i++) {
            if ($ite[$i]['id'] == $id) {
                return $i;
            }
        }
        return -1;
    }
    public function coup_view()
    {
        $getusercoupon = new UserCouponModel();
        $email = $_COOKIE['email'];
        $data = [
            'title' => 'Coupon view',
        ];
        $product = new ProductModel();
        $data['product'] = $product->getLimit(20);
        $userModel = new UserModel();
        $data['user'] = $userModel->getWhere(['email' => $email]);
        $data['vou'] = $getusercoupon->GetField();
        $data['today'] = $this->getcurrenttime();
        // echo '<pre/>';
        // print_r($data['stopcoupon']);
        // die();
        return view('User_site/coup_view', $data);
    }
    public function unsetcoupon($id){
        $getusercoupon = new UserCouponModel();
        $indexs = $this->existid($id);
        $ca = session('voucher');
        unset($ca[$indexs]);
        $getusercoupon->where('coupid',$id)->delete();;
        $session = session();
        $session->set('voucher', $ca);
        return redirect()->to(base_url('coup_view'))->with('status', 'Delete Successfully');
    }
    public function getcurrenttime(){
        $today = Time::createFromDate();
        $a =$today;
        return $a->format('Y-m-d');
    }
}