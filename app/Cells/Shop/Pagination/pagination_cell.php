<div class="col-12 pb-1">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mb-3">
            <li class="page-item <?= $disable = ($currentPage == 1) ? 'disabled' : '' ; ?>">
                <a class="page-link" href="<?= base_url('shop/').$currentPage-1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <?php for($i=1; $i<= $totalPages; $i++): ?>
            <li class="page-item <?= $active = ($i === $currentPage) ? 'active' : '' ; ?>"><a class="page-link" href="<?= base_url('shop/').$i ?>"><?= $i ?></a></li>
            <?php endfor; ?>
            <li class="page-item <?= $disable = ($currentPage == $totalPages) ? 'disabled' : '' ; ?>">
                <a class="page-link" href="<?= base_url('shop/').$currentPage+1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </nav>
</div>