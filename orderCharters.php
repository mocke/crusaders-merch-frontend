<?php

$page_name = "orderCharters";
include 'includes/header.php'

?>
<!-- Cart Items -->
<section class="orderCharters cart-items bg-white">
    <div class="container xs-mb-55">
        <div class="row">
            <div class="col-sm-12">
                <h1>Charter orders</h1>
            </div>
            <div class="col-sm-12 col-md-10 col-lg-8 xs-mt-25">
                <div class="alert alert-danger" role="alert">
                    Herewith orders placed by your charter members. Please approve an order in order for Nationals to process.
                    <br>The charter Treasurer will receive a statement from Nationals once an order has been processed
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-light-gray border-radius-20">
            <!-- Product Items Description -->
            <div class="row">
                <div class="col-sm-12 col-md-6 my-auto">
                    <h1>#265 - R2100.00</h1>
                    <h4 class="text-dark-gray xs-mb-10">Placed on: 2022-06-09 10:33:13</h4>
                    <h4 class="text-dark-gray">By: Rohan Mocke</h4>
                </div>
                <div class="col-sm-12 col-md-6 my-auto text-end">
                    <div class="pill pill-danger">
                        PENDING
                    </div>
                </div>
            </div>
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
            <!-- Status Update -->
            <div class="row">
                <div class="col-sm-12 xs-mb-25">
                    <hr>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                    <label class="form-label" for="selectStatusAdmin">Update status</label>
                    <select class="form-select" id="selectStatusAdmin" name="selectStatusAdmin">
                        <option selected value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Cancelled by charter">Cancelled by charter</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-8 col-xl-9 my-auto text-end">
                    <a href="#" class="btn btn-primary">update</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-light-gray border-radius-20">
            <!-- Product Items Description -->
            <div class="row">
                <div class="col-sm-12 col-md-6 my-auto">
                    <h1>#196 - R645.00</h1>
                    <h4 class="text-dark-gray xs-mb-10">Placed on: 2022-06-09 10:33:13</h4>
                    <h4 class="text-dark-gray">By: Rohan Mocke</h4>
                </div>
                <div class="col-sm-12 col-md-6 my-auto text-end">
                    <div class="pill pill-blue">
                        ORDERED AT SUPPLIER
                    </div>
                </div>
            </div>
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
            <!-- Status Update -->
            <div class="row">
                <div class="col-sm-12 xs-mb-25">
                    <hr>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
                    <label class="form-label" for="selectStatusSuperAdmin">Update status</label>
                    <select class="form-select" id="selectStatusSuperAdmin" name="selectStatusSuperAdmin">
                        <option value="Cancelled by nationals">Cancelled by nationals</option>
                        <option selected value="Approved">Approved</option>
                        <option value="Ordered at supplier">Ordered at supplier</option>
                        <option value="Dispatched">Dispatched</option>
                        <option value="Payment received / completed">Payment received / completed</option>
                    </select>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-9 col-xl-8 my-auto text-end">
                    <a href="#" class="btn btn-primary">update</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg-light-gray border-radius-20 opacity-half">
            <!-- Product Items Description -->
            <div class="row">
                <div class="col-sm-12 col-md-6 my-auto">
                    <h1>#126 - R645.00</h1>
                    <h4 class="text-dark-gray">Placed on: 2022-06-09 10:33:13</h4>
                    <h4 class="text-dark-gray">By: Jaco Visagie</h4>
                </div>
                <div class="col-sm-12 col-md-6 my-auto text-end">
                    <div class="pill pill-success">
                    Completed
                    </div>
                </div>
            </div>
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
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ?>