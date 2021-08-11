<section class="bg-color">
    <div class="container">
        <!--first navbar start here-->
        <section>
            <nav class="first-navbar navbar navbar-expand-lg text-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="text-color collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-2">
                        <li class="nav-item">
                            <a class="nav-link" href="pre_order.html"> <span><i class="fas fa-shopping-cart"></i> </span>Pre-order</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><i class="fas fa-user-circle"></i></span> My Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="login.html">Login</a>
                                <a class="dropdown-item text-dark" href="registration.html">Register</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.html"> <span><i class="fas fa-shopping-cart"></i></span> My Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="checkout.html"> <span><i class="fas fa-credit-card"></i></span> Chcekout</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </section>
        <!--first navbar end here-->
        <!--2nd navbar start here-->
        <nav class="secound-navbar navbar navbar-expand-lg mt-2">
            <a class="h4" style="color: rgb(233, 200, 16);" href="#">Ghorer Bazar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-size form-inline my-2 my-lg-0">

                    <input class=" mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn-color nav-link btn btn-sm" href="#"> <span><i class="fas fa-shopping-cart"></i></span> Cart-TK200</a>
                    </li>


                </ul>
            </div>
        </nav>
        <!--2nd navbar start here-->
        <!--3rd navbar start here-->
        <section class="third-navbar">
            <nav class=" navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">

                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        @foreach ($categories as $item)
                        <li class="nav-item">
                            <a class="nav-link" href="category_product.html">{{$item->name}}</a>
                        </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact-Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About-Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <!--3rd navbar start here-->

    </div>

</section>
