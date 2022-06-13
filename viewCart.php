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
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-12 lg-mb-50">
                <!-- Product Item -->
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-xl-2 my-auto">
                        <img class="img-fluid border-radius-20" src="assets/images/products/t-shirt.jpg" alt="Full patch members T-shirts">
                    </div>
                    <div class="col-sm-12 col-lg-4 col-xl-3 my-auto">
                        <h3 class="xs-mt-20 lg-mt-0">Charter t-shirt with logo</h3>
                        <h5>CRUSAP 000039</h5>
                        <h3 class="text-vivid-red">R645.00</h3>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-xl-7 my-auto">
                        <div class="row xs-plr-0 xs-mt-20 lg-mt-0">
                            <div class="col-8 col-lg-7 col-xl-4 my-auto">
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
                            <div class="col-4 col-lg-5 col-xl-2 my-auto">
                                <label class="form-label" for="inputQTY">QTY</label>
                                <input type="text" id="inputQTY" name="inputQTY" class="form-control" />
                            </div>
                            <div class="col-md-6 col-xl-5 xs-pt-20 my-auto text-xl-center">
                                <h3 class="text-vivid-red xs-mt-25 xl-mt-0">R1100.00</h3>
                            </div>
                            <div class="col-md-6 col-xl-1 xs-pt-20 text-md-end text-xl-start my-auto">
                                <button class="thumb-grow-small d-none d-md-inline-block xs-mt-25 xl-mt-0"><img src="assets/images/icons/ico-remove.png" alt="Red and White Exit Icon"></button>
                                <a class="btn btn-primary d-md-none" href="#">Place order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-md-none xs-mtb-60">
                <hr>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-12 lg-mb-50">
                <!-- Product Item -->
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-xl-2 my-auto">
                        <img class="img-fluid border-radius-20" src="assets/images/products/hoodies.jpg" alt="Full patch members Hoodies">
                    </div>
                    <div class="col-sm-12 col-lg-4 col-xl-3 my-auto">
                        <h3 class="xs-mt-20 lg-mt-0">Hoodie</h3>
                        <h5>CRUSAP 000039</h5>
                        <h3 class="text-vivid-red">R645.00</h3>
                    </div>
                    <div class="col-sm-12 col-lg-4 col-xl-7 my-auto">
                        <div class="row xs-plr-0 xs-mt-20 lg-mt-0">
                            <div class="col-8 col-lg-7 col-xl-4 my-auto">
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
                            <div class="col-4 col-lg-5 col-xl-2 my-auto">
                                <label class="form-label" for="inputQTY">QTY</label>
                                <input type="text" id="inputQTY" name="inputQTY" class="form-control" />
                            </div>
                            <div class="col-md-6 col-xl-5 xs-pt-20 my-auto text-xl-center">
                                <h3 class="text-vivid-red xs-mt-25 xl-mt-0">R1000.00</h3>
                            </div>
                            <div class="col-md-6 col-xl-1 xs-pt-20 text-md-end text-xl-start my-auto">
                                <button class="thumb-grow-small d-none d-md-inline-block xs-mt-25 xl-mt-0"><img src="assets/images/icons/ico-remove.png" alt="Red and White Exit Icon"></button>
                                <a class="btn btn-primary d-md-none" href="#">Place order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Place Order -->
        <div class="row xs-mt-100 lg-mt-50">
            <div class="col-sm-12 text-end xs-mb-20">
                <h3>Cart total:<span class="text-vivid-red xs-ml-25">R2100.00</span></h3>
            </div>
            <div class="col-sm-12 text-end">
                <a class="btn btn-primary thumb-grow-small" href="#">Place order</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>