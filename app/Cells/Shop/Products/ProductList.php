<?php

namespace App\Cells\Shop\Products;

use CodeIgniter\View\Cells\Cell;

class ProductList extends Cell
{
    protected $products;

    public function mount(?int $currentPage){
        $offset = ($currentPage-1)*9;
        $this->products = model('ProductsModel')->findAll(9, $offset);
    }

    public function show(){
        $data = ['products' => $this->products];
        return $this->view('product_list_cell', $data);
    }
}
