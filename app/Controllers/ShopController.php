<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ShopController extends BaseController
{
    public function index()
    {
        return view('layouts/shop');
    }
}
