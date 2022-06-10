<?php

$page_name = "viewCart";
include 'includes/header.php'

?>

<!-- View Cart Hero Banner -->
<section class="viewCart">
    <div class="container">
        <div class="col-sm-12 d-flex">
            <h1>Confirm your order</h1>
            <div class="pill pill-danger">
                3 items
            </div>
        </div>
        <div class="col-sm-12 xs-mt-25">
            <div class="alert alert-danger" role="alert">
                Confirm your sizes and quantity before placing and order
            </div>
        </div>
    </div>
</section>

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
                <select class="form-select" id="selectSize" name="selectSize" aria-label="Default select example">
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
            <div class="col-sm-12 col-xl-1 my-auto">
                <button class="thumb-grow-small"><img src="assets/images/icons/ico-remove.png" alt="Red and White Exit Icon"></button>
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
                <select class="form-select" id="selectSize" name="selectSize" aria-label="Default select example">
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
            <div class="col-sm-12 col-xl-1 my-auto">
                <button class="thumb-grow-small"><img src="assets/images/icons/ico-remove.png" alt="Red and White Exit Icon"></button>
            </div>
        </div>
        <!-- Place Order -->
        <div class="row">
            <div class="col-sm-12 text-end xs-mb-20">
                <h3>Cart total:<span class="text-vivid-red xs-ml-25">R2100.00</span></h3>
            </div>
            <div class="col-sm-12 text-end">
                <a class="btn btn-primary" href="#">Place order</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>