<?php

$page_name = "orderSuccess";
include 'includes/header.php'

?>

<!-- Order Success Hero Banner -->
<section class="orderSuccess">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 text-center xs-mb-25">
                <h1>Order #265 placed</h1>
            </div>
            <div class="col-sm-12 col-sm-10 col-md-8 col-lg-7 text-center xs-mb-15">
                <div class="alert alert-success" role="alert">
                    Your order has been placed successfully. Your charter Secretary or Treasurer will have to approve your order before Nationals will process your order.
                </div>
            </div>
            <div class="col-sm-12 col-sm-10 col-md-8 col-lg-7 text-center xs-mb-15">
                <div class="alert alert-danger" role="alert">
                    <img class="xs-mr-35" src="assets/images/icons/ico-delivery-truck.svg" alt="Red Delivery Truck Icon">
                    Estimated delivery would be from 10 July 2022
                </div>
            </div>
            <div class="col-sm-12 col-sm-10 col-md-8 col-lg-7">
                <div class="alert alert-dark" role="alert">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6 col-xl-3 offset-xl-2">
                            <img class="img-fluid" src="assets/images/logo/crusaders-badge-logo@2x.png" alt="Crusaders Badge Logo">
                        </div>
                        <div class="col-sm-12 col-lg-6 offset-xl-1">
                            <h4>Order number: #265</h4>
                            <h4>Total: R2100.00</h4>
                            <h4>Placed on: 2022-06-09 10:33:13</h4>
                            <h4>Member: Rohan Mocke</h4>
                            <h4>Charter: Far East</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Heading -->
<div class="container xs-mb-35">
    <div class="row">
        <div class="col-sm-12">
            <h1>Order summary</h1>
        </div>
    </div>
</div>

<!-- Cart Items -->
<section class="cart-items">
    <div class="container">
        <!-- Product Item -->
        <div class="row">
            <div class="col-sm-12 col-xl-2 my-auto">
                <img class="img-fluid border-radius-20" src="assets/images/products/t-shirt.jpg" alt="Full patch members T-shirts">
            </div>
            <div class="col-sm-12 col-xl-3 my-auto">
                <h3>Charter t-shirt with logo</h3>
                <h5>CRUSAP 000039</h5>
                <h3 class="text-vivid-red">R645.00</h3>
            </div>
            <div class="col-sm-12 col-xl-2 my-auto xs-pb-20">
                <label class="form-label" for="selectSize">Select size</label>
                <select class="form-select" id="selectSize" name="selectSize">
                    <option selected disabled>Select Size</option>
                    <option value="XSmall">XSmall</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="XLarge">XLarge</option>
                    <option value="XXLarge">XXLarge</option>
                </select>
            </div>
            <div class="col-sm-12 col-xl-1 my-auto xs-pb-20">
                <label class="form-label" for="inputQTY">QTY</label>
                <input type="text" id="inputQTY" name="inputQTY" class="form-control" />
            </div>
            <div class="col-sm-12 col-xl-3 my-auto text-center">
                <h3 class="text-vivid-red">R1100.00</h3>
            </div>
        </div>
        <!-- Product Item -->
        <div class="row">
            <div class="col-sm-12 col-xl-2 my-auto">
                <img class="img-fluid border-radius-20" src="assets/images/products/hoodies.jpg" alt="Full patch members Hoodies">
            </div>
            <div class="col-sm-12 col-xl-3 my-auto">
                <h3>Hoodie</h3>
                <h5>CRUSAP 000039</h5>
                <h3 class="text-vivid-red">R645.00</h3>
            </div>
            <div class="col-sm-12 col-xl-2 my-auto xs-pb-20">
                <label class="form-label" for="selectSize">Select size</label>
                <select class="form-select" id="selectSize" name="selectSize">
                    <option selected disabled>Select Size</option>
                    <option value="XSmall">XSmall</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
                    <option value="XLarge">XLarge</option>
                    <option value="XXLarge">XXLarge</option>
                </select>
            </div>
            <div class="col-sm-12 col-xl-1 my-auto xs-pb-20">
                <label class="form-label" for="inputQTY">QTY</label>
                <input type="text" id="inputQTY" name="inputQTY" class="form-control" />
            </div>
            <div class="col-sm-12 col-xl-3 my-auto text-center">
                <h3 class="text-vivid-red">R1000.00</h3>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>