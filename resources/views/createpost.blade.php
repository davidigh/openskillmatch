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
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
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
                <a href="{{('dashboard')}}" class="ud-btn btn-dark default-box-shadow2">Manage Post<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
            <div>

          </div>
            <div class="row">
            <div class="col-xl-12">
              <div class="ps-widget bgc-white bdrs4 p30 mb30 overflow-hidden position-relative">
                <div class="bdrb1 pb15 mb25">
                  <h5 class="list-title">Basic Information</h5>
                </div>
                <div class="col-xl-8">
                  <form class="form-style1">
                    <div class="row">
                    <form method="POST" action="{{('form.submit') }}">
                        @csrf
                        <div class="col-sm-12">
                          <div class="mb20">
                            <label class="heading-color ff-heading fw500 mb10">Service Title</label>
                            <input type="text" class="form-control" placeholder="Service Title" id="txt_title">
                          </div>
                        </div>
                      
                        <div class="col-sm-6">
                          <div class="mb20">
                            <div class="form-style1">
                              <label class="heading-color ff-heading fw500 mb10">Category</label>
                              <div class="bootselect-multiselect">
                                <select class="selectpicker">
                                  <option>Select</option>
                                  <option>Graphics & Design</option>
                                  <option>Digital Marketing</option>
                                  <option>Writing & Translation</option>
                                  <option>Video & Animation</option>
                                  <option>Music & Audio</option>
                                  <option>Programming & Tech</option>
                                  <option>Business</option>
                                  <option>Lifestyle</option>
                                  <option>Trending</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <div class="form-style1">
                              <label class="heading-color ff-heading fw500 mb10">Research type</label>
                              <div class="bootselect-multiselect">
                                <select class="selectpicker">
                                  <option value="Experimental">Experimental</option>
                                  <option value="Observational">Observational</option>
                                  <option value="Theorical">Theorical</option>
                                
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb10">
                            <label class="heading-color ff-heading fw500 mb10">Research Brief</label>
                            <textarea cols="30" rows="6" placeholder="Research Brief"></textarea>
                          </div>
                        </div>
                      
                        <div class="col-sm-6">
                          <div class="mb20">
                            <div class="form-style1">
                              <label class="heading-color ff-heading fw500 mb10">Discipline Field</label>
                              <div class="bootselect-multiselect">
                                <select class="selectpicker">
                                  <option>Select</option>
                                
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb20">
                            <label class="heading-color ff-heading fw500 mb10">Institution/ Organisation</label>
                            <input type="text" class="form-control" placeholder="Institution/ Organisation" id="txt_instutude">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="mb20">
                            <div class="form-style1">
                              <label class="heading-color ff-heading fw500 mb10">Skills</label>
                              <div class="bootselect-multiselect">
                                <select class="selectpicker" multiple>
                                  <option>Figma</option>
                                  <option>Adobe XD</option>
                                  <option>CSS</option>
                                  <option>HTML</option>
                                  <option>Bootstrap</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="text-start">
                            <button type="submit" class="ud-btn btn-thm"><i class="fal fa-arrow-right-long"></i>Guardar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                 
                </div>
              </div>
            
              
              <div class="ps-widget bgc-white bdrs12 p30 mb30 overflow-hidden position-relative">
                <div class="bdrb1 pb15 mb30">
                  <h5 class="list-title">Gallery</h5>
                </div>
                <div class="col-xl-9">
                  <div class="d-flex mb30">
                    <div class="gallery-item me-3 bdrs4 overflow-hidden position-relative">
                      <img class="w-100" src="images/gallery/g-1.jpg" alt="">
                      <div class="del-edit">
                        <div class="d-flex justify-content-center">
                          <a href="" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><span class="flaticon-pencil"></span></a>
                          <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"><span class="flaticon-delete"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-item me-3 bdrs4 overflow-hidden position-relative">
                      <img class="w-100" src="images/gallery/g-2.jpg" alt="">
                      <div class="del-edit">
                        <div class="d-flex justify-content-center">
                          <a href="" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><span class="flaticon-pencil"></span></a>
                          <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"><span class="flaticon-delete"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-item me-3 bdrs4 overflow-hidden position-relative">
                      <img class="w-100" src="images/gallery/g-3.jpg" alt="">
                      <div class="del-edit">
                        <div class="d-flex justify-content-center">
                          <a href="" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><span class="flaticon-pencil"></span></a>
                          <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"><span class="flaticon-delete"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-item me-3 bdrs4 overflow-hidden position-relative">
                      <img class="w-100" src="images/gallery/g-4.jpg" alt="">
                      <div class="del-edit">
                        <div class="d-flex justify-content-center">
                          <a href="" class="icon me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Edit" aria-label="Edit"><span class="flaticon-pencil"></span></a>
                          <a href="" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete" aria-label="Delete"><span class="flaticon-delete"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="gallery-item bdrs4 overflow-hidden">
                      <a href=""><img class="w-100" src="images/gallery/g-1.png" alt=""></a>
                    </div>
                  </div>
                  <p class="text">Max file size is 1MB, Minimum dimension: 330x300 And Suitable files are .jpg & .png</p>
                  <a href="" class="ud-btn btn-thm mt-2">Save<i class="fal fa-arrow-right-long"></i></a>
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
