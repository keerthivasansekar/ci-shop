<?php

namespace App\Cells\Shop\Pagination;

use CodeIgniter\View\Cells\Cell;

class Pagination extends Cell
{
    protected int $totalProducts, $totalPages, $currentPage;

    public function mount(?int $currentPage){
        $this->currentPage = $currentPage;
    }

    public function getTotalPages() {
        $this->totalProducts = model('ProductsModel')->countAllResults();
        $this->totalPages = round($this->totalProducts/9, 0);
        if ($this->totalProducts%9 !== 0) {
            $this->totalPages += 1;
        }
        
        $data = ['totalPages' => $this->totalPages, 'currentPage' => $this->currentPage];
        return $this->view('pagination_cell', $data);
    }

}
