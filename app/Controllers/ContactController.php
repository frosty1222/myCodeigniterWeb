<?php

namespace App\Controllers;

use App\Controllers\MyController;
use App\Models\ContactModel;
use App\Models\UserModel;
class ContactController extends MyController{
    public function index()
    {
        $data = [
            'title' => 'Contact Home',
        ];
        $contact = new UserModel();
        $data['rand'] = $this->rand(0,999);
        $data['contact'] = $contact->orderby('id','DESC')->get();
        return view('Cart/contact', $data);
    }
    public function rand($a){
        return rand($a,999);
    }
    public function save(){
        $contact = new ContactModel();
        $user = new UserModel();
        $a = $user->orderby('id', 'DESC')->get();
        foreach($a->getResult() as $key=>$value){
           $value->id;
        }
        $data = [
            'fullname'=>$this->request->getpost('fullname'),
            'content'=>$this->request->getpost('content'),
            'phone'=>$this->request->getpost('phone'),
            'email'=>$this->request->getpost('email'),
            'address' => $this->request->getpost('address'),
            'customer_id'=> $value->id,
            'protocol'=>$this->request->getpost('protocol'),
        ];
        // echo '<pre/>';
        // print_r($data);
        // die();
        $contact->AddField($data);
        return redirect()->to('contact');
    }
    public function contact_view(){
        $contact = new ContactModel();
        $data = ['title'=>'Contact Home View'];
        $data['contact'] = $contact->paginate(6,'contact');
        $data['pager'] = $contact->pager;
        return view('Admin/contact/index',$data);
    }
    public function contact_delete($id){
        $contact = new ContactModel();
        $contact->DeleteField($id);
        return redirect()->back();
    }
}