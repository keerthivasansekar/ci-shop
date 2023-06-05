<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        $this->setLoggedInFlag(1);
        echo "The user is loggedin: ".session()->get('isUserLoggedIn');
    }

    public function logout(){
        session()->destroy();
        echo "logout successful";
    }

    private function setLoggedInFlag($userId = null){

        $session = session();

        $sessionData = [
            'userId' => $userId,
            'isUserLoggedIn' => true
        ];

        $session->set($sessionData);
    }

}
