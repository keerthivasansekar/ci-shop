<?php foreach($products as $product): ?>
<div class="col-lg-4 col-md-6 col-sm-12 pb-1">
    <div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="<?= base_url() ?>/assets/img/product-<?= $product['id'] ?>.jpg" alt="">
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
            <h6 class="text-truncate mb-3"><?= $product['name'] ?></h6>
            <div class="d-flex justify-content-center">
                <h6>$<?= $product['price'] ?></h6>
                <h6 class="text-muted ml-2"><del>$<?= $product['price'] ?></del></h6>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light border">
            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
            <form method="post" action="cart/add-to-cart/<?= $product['id'] ?>" id="form_<?= $product['id'] ?>">
                <label for="quantity">QTY:</label><input style="width:40px; height:25px; margin-left:5px; margin-right:5px" type="number" name="quantity" id="<?= $product['id'] ?>_quantity" onchange="qtyCheck(<?= $product['id'] ?>)" placeholder="0" min="0">
                <button type="submit" class="btn btn-sm text-dark p-0" id="btnAddToCart_<?= $product['id'] ?>" onclick="cart(event, <?= $product['id'] ?>)" disabled><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
            </form>
        </div>
    </div>
</div>
<?php endforeach; ?>