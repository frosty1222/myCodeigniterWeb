<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Controllers\UserController;

class UserLog implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $cart = new UserController();
        // Do something here

        if ($this == $cart->logout()) {
            return redirect()->to(base_url('login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
