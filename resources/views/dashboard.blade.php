<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>OpenSkillMatch</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ud-custom-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashbord_navitaion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

    <!-- Apple Touch Icon -->
    <link href="{{ asset('images/apple-touch-icon-60x60.png') }}" sizes="60x60" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }}" sizes="72x72" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }}" sizes="114x114" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-180x180.png') }}" sizes="180x180" rel="apple-touch-icon">

</head>
<body>
<div class="wrapper">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-6 col-lg-auto">
            <div class="text-center text-lg-start d-flex align-items-center">
              <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                <a href="index.html" class="logo"><img src="images/header-logo-dark.svg" alt=""></a>
              </div>
              <div class="fz20 ml90">
                <a href="#" class="dashboard_sidebar_toggle_icon vam"><img src="images/dashboard-navicon.svg" alt=""></a>
              </div>
              <a class="login-info d-block d-xl-none ml40 vam" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span class="flaticon-loupe"></span></a>
              <div class="ml40 d-none d-xl-block">
             
              </div>
            </div>
          </div>
          <div class="col-6 col-lg-auto">
            <div class="text-center text-lg-end header_right_widgets">
              <ul class="dashboard_dd_menu_list d-flex align-items-center justify-content-center justify-content-sm-end mb-0 p-0">
                
              
               
                <li class="user_setting">
                  <div class="dropdown">
                    <a class="btn" href="#" data-bs-toggle="dropdown">
                      <img src="images/resource/user.png" alt="user.png"> 
                    </a>
                    <div class="dropdown-menu">
                      <div class="user_setting_content">
                   
                        <p class="fz15 fw400 ff-heading mt30 pl30">Account</p>
                        <a class="dropdown-item" href="page-dashboard-profile.html"><i class="flaticon-photo mr10"></i>My Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Search Modal -->
  <div class="search-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fal fa-xmark"></i></button>
          </div>
          <div class="modal-body">
            <div class="popup-search-field search_area">
              <input type="text" class="form-control border-0" placeholder="What service are you looking for today?">
              <label><span class="far fa-magnifying-glass"></span></label>
              <button class="ud-btn btn-thm" type="submit">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header bdrb1">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="mobile_logo" href="#"><img src="images/header-logo3.svg" alt=""></a>
            <div class="right-side text-end">
              
              <a class="menubar ml30" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="posr"><div class="mobile_menu_close_btn"><span class="far fa-times"></span></div></div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>
        <li><span>Home</span>
          
        </li>
        <li><span>Projects</span>
          
        </li>
    
        <li><span>Messages</span>
          <ul>
            <li><span>About</span>
              <ul>
                <li><a href="page-about.html">About v1</a></li>
                <li><a href="page-about-v2.html">About v2</a></li>
              </ul>
            </li>
            <li><span>Shop</span>
              <ul>
                <li><a href="page-shop.html">List</a></li>
                <li><a href="page-shop-single.html">Single</a></li>
                <li><a href="page-shop-cart.html">Cart</a></li>
                <li><a href="page-shop-checkout.html">Checkout</a></li>
                <li><a href="page-shop-order.html">Order</a></li>
              </ul>
            </li>
            <li><a href="page-contact.html">Contact</a></li>
            <li><a href="page-error.html">404</a></li>
            <li><a href="page-faq.html">Faq</a></li>
            <li><a href="page-help.html">Help</a></li>
            <li><a href="page-invoice.html">Invoices</a></li>
            <li><a href="page-login.html">Login</a></li>
            <li><a href="page-pricing.html">Pricing</a></li>
            <li><a href="page-register.html">Register</a></li>
            <li><a href="page-terms.html">Terms</a></li>
            <li><a href="page-ui-element.html">UI Elements</a></li>
          </ul>
        </li>
        <li><span>Repositories</span>
        </li>
        <li><span>My Profile</span>
        </li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>

  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <p class="fz15 fw400 ff-heading pl30">Start</p>
          <div class="sidebar_list_item">
            <a href="page-dashboard.html" class="items-center -is-active"><i class="flaticon-home mr15"></i>Home</a>
          </div>
          <div class="sidebar_list_item">
            <a href="page-dashboard-proposal.html" class="items-center"><i class="flaticon-document mr15">Projects</i></a>
          </div>
          <div class="sidebar_list_item">
            <a href="page-dashboard-save.html" class="items-center"><i class="flaticon-like mr15"></i>Academics</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-message.html" class="items-center"><i class="flaticon-chat mr15"></i>Message</a>
          </div>
          
          <div class="sidebar_list_item">
            <a href="page-dashboard-invoice.html" class="items-center"><i class="flaticon-receipt mr15"></i>Repositories</a>
          </div>
          
          
          <p class="fz15 fw400 ff-heading pl30 mt30">Organize and Manage</p>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-manage-service.html" class="items-center"><i class="flaticon-presentation mr15"></i>Manage Services</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-manage-jobs.html" class="items-center"><i class="flaticon-briefcase mr15"></i>Manage Jobs</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-manage-project.html" class="items-center"><i class="flaticon-content mr15"></i>Manage Project</a>
          </div>
          <p class="fz15 fw400 ff-heading pl30 mt30">Account</p>
          <div class="sidebar_list_item ">
            <a href="page-dashboard-profile.html" class="items-center"><i class="flaticon-photo mr15"></i>My Profile</a>
          </div>
          <div class="sidebar_list_item ">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
            </form>
          </div>
        </div>
      </div>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content hover-bgc-color">
          <div class="row pb40">
            <div class="col-lg-9">
              <div class="dashboard_title_area">
                <h2>{{ __('Dashboard') }}</h2>
                <p class="text">{{ __("You're logged in!") }}</p>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="text-lg-end">
                <a href="{{('createpost')}}" class="ud-btn btn-dark default-box-shadow2">Add Service<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div>

          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="ps-widget bgc-white bdrs4 p30 mb30 position-relative">
                <div class="navtab-style1">
                  <nav>
                    <div class="nav nav-tabs mb30" id="nav-tab2" role="tablist">
                      <button class="nav-link active fw500 ps-0" id="nav-item1-tab" data-bs-toggle="tab" data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1" aria-selected="true">My Projects</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-item1" role="tabpanel" aria-labelledby="nav-item1-tab">
                        <div class="col-md-12">
                          <div class="bdrb1 pb20">
                            <div class="mbp_first position-relative d-sm-flex align-items-center justify-content-start mb30-sm mt30">
                              <img src="images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                              <div class="ml20 ml0-xs mt20-xs">
                                <div class="del-edit"><span class="flaticon-flag"></span></div>
                                <h6 class="mt-0 mb-1">Ali Tufan</h6>
                                <div class="d-flex align-items-center">
                                  <div><i class="fas fa-star vam fz10 review-color me-2"></i><span class="fz15 fw500">4.98</span></div>
                                  <div class="ms-3"><span class="fz14 text">Published 2 months ago</span></div>
                                </div>
                              </div>
                            </div>
                            <p class="text mt20 mb20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <a href="page-service-single.html" class="ud-btn bgc-thm4 text-thm">Respond</a>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="bdrb1 pb20">
                            <div class="mbp_first position-relative d-sm-flex align-items-center justify-content-start mb30-sm mt30">
                              <img src="images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                              <div class="ml20 ml0-xs mt20-xs">
                                <div class="del-edit"><span class="flaticon-flag"></span></div>
                                <h6 class="mt-0 mb-1">Ali Tufan</h6>
                                <div class="d-flex align-items-center">
                                  <div><i class="fas fa-star vam fz10 review-color me-2"></i><span class="fz15 fw500">4.98</span></div>
                                  <div class="ms-3"><span class="fz14 text">Published 2 months ago</span></div>
                                </div>
                              </div>
                            </div>
                            <p class="text mt20 mb20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            <a href="page-service-single.html" class="ud-btn bgc-thm4 text-thm">Respond</a>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mbp_first position-relative d-sm-flex align-items-center justify-content-start mb30-sm mt30">
                            <img src="images/blog/comments-2.png" class="mr-3" alt="comments-2.png">
                            <div class="ml20 ml0-xs mt20-xs">
                              <div class="del-edit"><span class="flaticon-flag"></span></div>
                              <h6 class="mt-0 mb-1">Ali Tufan</h6>
                              <div class="d-flex align-items-center">
                                <div><i class="fas fa-star vam fz10 review-color me-2"></i><span class="fz15 fw500">4.98</span></div>
                                <div class="ms-3"><span class="fz14 text">Published 2 months ago</span></div>
                              </div>
                            </div>
                          </div>
                          <p class="text mt20 mb20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                          <a href="page-service-single.html" class="ud-btn bgc-thm4 text-thm">Respond</a>
                        </div>
                      </div>
                  
                  </div>
                </div>
                <div class="mbp_pagination text-center">
                  <ul class="page_navigation">
                    <li class="page-item">
                      <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">20</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
                    </li>
                  </ul>
                  <p class="mt10 mb-0 pagination_page_count text-center">1 – 20 of 300+ property available</p>
                </div>
              </div>
            </div>
            
          </div>
        
      
        </div>
        <footer class="dashboard_footer pt30 pb30">
          <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-between">
              <div class="col-auto">
                <div class="copyright-widget">
                  <p class="mb-md-0">OpenSkillMatch.</p>
                </div>
              </div>
            
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
</div>
<!-- Wrapper End -->
<script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
        <script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
        <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/dashboard-script.js') }}"></script>
</body>
</html>
