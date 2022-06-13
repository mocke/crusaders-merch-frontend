<section class="main-navigation">
    <div class="container">
        <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid xs-plr-0">
                    <a class="navbar-brand" href="index.php">
                        <img class="img-fluid" src="assets/images/logo/crusaders-badge-logo@2x.png" alt="Crusaders Badge Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-end text-lg-start" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-lg-0">
                            <li class="nav-item my-auto lg-mr-5">
                                <a class="nav-link <?php if($page_name == "index"){echo "active";} else {} ?>" href="index.php">Shop</a>
                            </li>
                            <li class="nav-item my-auto">
                                <a class="nav-link <?php if($page_name == "orderHistory"){echo "active";} else {} ?>" href="orderHistory.php">My orders</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item my-auto">
                                <a class="nav-link <?php if($page_name == "orderCharters"){echo "active";} else {} ?>" href="orderCharters.php">charter orders</a>
                            </li>
                            <li class="nav-item my-auto d-lg-none">
                                <a class="nav-link <?php if($page_name == "viewCart"){echo "active";} else {} ?>" href="viewCart.php">cart (3 items)</a>
                            </li>
                            <li class="nav-item d-none d-lg-inline-block lg-ml-35">
                                <a class="btn btn-primary" href="viewCart.php">cart (3 items)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>