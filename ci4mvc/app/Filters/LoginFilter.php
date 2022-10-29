<?php
namespace App\Filters;

class LoginFilter implements \CodeIgniter\Filters\FilterInterface
{

    public function before(\CodeIgniter\HTTP\RequestInterface $request, $arguments = null)
    {
        if (  ! service('auth')->isLoggedin()) {
            return redirect()->to('/login')->with('msg', 'You are not logged in');
        }
    }

    public function after(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, $arguments = null)
    {
    }
}