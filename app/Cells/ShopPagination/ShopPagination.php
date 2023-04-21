<?php

namespace App\Cells\ShopPagination;

use CodeIgniter\View\Cells\Cell;

class ShopPagination extends Cell
{
    protected $totalProducts;
    protected $totalPages;

    public function render(): string {
        $this->totalProducts = model('ProductsModel')->countAllResults();
        $this->totalPages = round($this->totalProducts/9, 0);
        if ($this->totalProducts%9 !== 0) {
            $this->totalPages += 1;
        }
        
        return $this->view('shop_pagination', ['totalPages' => $this->totalPages]);
    }
}
