<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ShopController extends BaseController
{
    public function index(int $currentPage = 1)
    {
        $data['currentPage'] = $currentPage;
        return view('layouts/shop', $data);
    }
}
