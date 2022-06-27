<?php

namespace App\Controllers;

use CodeIgniter\View\Parser;
use App\Controllers\MyController;
use App\Models\Test;
use App\Models\UserModel;
class HelloController extends MyController
{   
    public $new;
    public function __construct(){
        $this->new = new Test();
    }
    public function index()
    {
        $test = new Test();
        $data['test'] = $test->GetField();

        // echo '<pre/>';
        // print_r($data);
        // die();
        return view('hello',$data);
    }
    public function addrecord(){
        return view('hello/addnew');
    }
    public function addnew(){
        $test = new Test();
        $data = [
            'name'=>$this->request->getpost('name'),
        ];
        $test->AddField($data);
        //  echo '<pre/>';
        //  print_r($data);
        // die();
        return redirect()->to('addrecord')->with('status','successfull');
    }
    public function editnew($id){
        $test = new Test();
        $data['test'] = $test->getId($id);
        //  echo '<pre/>';
        //  print_r($data);
        // die();
        return view('hello/editnew',$data);
    }
    public function update($id){
        $test = new Test();
        $data = [
            'name'=>$this->request->getpost('name'),
        ];
        //  echo '<pre/>';
        //  print_r([$id,$data]);
        // die();
        $test->EditField($id,$data);
        return redirect()->to(base_url('hello'))->with('status', 'successfully');
    }
    public function delete($id){
        $test = new Test();
        $test->DeleteField($id);
        return redirect()->to(base_url('hello'))->with('status','delete successfully');
    }
    public function main()
    {
        $data = ['title'=>'Main'];
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
        
        return view('layouts/main', $data);
    }
}
