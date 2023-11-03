<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">


                        @if(Auth::user())

                             <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="icon fa fa-shopping-cart"></i>
                                     Log Out
                                </button>
                            </form>
                             @else
                            <li><a href="{{ route('login') }}"><i class="icon fa fa-shopping-cart"></i>
                                Log in

                         @endif



                            </a></li>
                        <li><a href="{{ route('feedback.create') }}"><i class="icon fa fa-check"></i>
                              CreatFeedback
                            </a></li>
                        <li>
                        </li>
                        <li>

                    </li>
                    </ul>
                </div>
                <!-- /.cnt-account -->

                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo"> <a href="home.html"> <img
                                src="{{ asset('frontend/assets/images/logo.png') }}" alt="logo"> </a> </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->

                    <!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div>
                <!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                            data-toggle="dropdown">

                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <!--Mini cart start-->
                                <div id="miniCart">

                                </div>


                                <!--End of Mini cart -->
                                <div class="clearfix cart-total">
                                    <div class="pull-right"> <span class="text">Sub Total :</span><span
                                            class='price' id="cartSubtotal"></span> </div>
                                    <div class="clearfix"></div>
                                    <a href="checkout.html"
                                        class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div>
                                <!-- /.cart-total-->

                            </li>
                        </ul>
                        <!-- /.dropdown-menu-->
                    </div>
                    <!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div>
                <!-- /.top-cart-row -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw"> <a href="{{ route('home') }}" data-hover="dropdown"
                                        >Home</a> </li>


                                <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img
                                        class="img-responsive"
                                        src="{{ asset('frontend/assets/images/banners/top-menu-banner.jpg') }}"
                                        alt=""> </div>
                                <!-- /.yamm-content -->
                        </div>
                    </div>
                    </li>
                    </ul>
                    </li>
                    <!-- End  catagory data foreach-->

                    <li class="dropdown  navbar-right special-menu"> <a href="#"></a> </li>

                    <li class="dropdown  navbar-right special-menu"> <a href="#"></a>
                    </li>

                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.nav-outer -->
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
    </div>
    <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>
