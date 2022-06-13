<?php

$page_name = "orderAdmin";
include 'includes/header.php'

?>

<!-- Cart Items -->
<section class="orderAdmin cart-items bg-white">
    <div class="container">
        <div class="row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a class="active" href="#charterOrders" aria-controls="charterOrders" role="tab" data-bs-toggle="tab">Charter orders</a></li>
                <li role="presentation"><a href="#purchaseStock" aria-controls="purchaseStock" role="tab" data-bs-toggle="tab">Purchase stock</a></li>
            </ul>
        </div>
    </div>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="charterOrders">
            <?php include 'includes/charter-order-tab.php' ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="purchaseStock">
            <?php include 'includes/purchase-stock-tab.php' ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>