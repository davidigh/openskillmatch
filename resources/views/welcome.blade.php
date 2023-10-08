<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!--... Other Meta Tags ...-->

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
    <link rel="stylesheet" href="{{ asset('css/ud-custom-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" />

    <!-- Apple Touch Icon -->
    <link href="{{ asset('images/apple-touch-icon-60x60.png') }}" sizes="60x60" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }}" sizes="72x72" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }}" sizes="114x114" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-180x180.png') }}" sizes="180x180" rel="apple-touch-icon">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
    <body class="antialiased">

    <div class="wrapper ovh">
  <div class="preloader"></div>
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-homepage-style stricky main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container-fluid posr menu_bdrt1 px30">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto px-0">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logos br-white-light pr30 pr5-xl">
                <a class="header-logo logo1" href="index.html"><img src="images/header-logo.svg" alt="Header Logo"></a>
                <a class="header-logo logo2" href="index.html"><img src="images/header-logo2.svg" alt="Header Logo"></a>
              </div>
              <div class="home1_style">
                <div id="mega-menu">
                  <a class="btn-mega fw500" href="#"><span class="pl30 pl10-xl pr5 fz15 vam flaticon-menu"></span> Categories</a>
                  <ul class="menu ps-0">
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-developer"></span> <span class="menu-title">Development & IT</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-web-design-1"></span> <span class="menu-title">Design & Creative</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-digital-marketing"></span> <span class="menu-title">Digital Marketing</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-translator"></span> <span class="menu-title">Writing & Translation</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-microphone"></span> <span class="menu-title">Music & Audio</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-video-file"></span> <span class="menu-title">Video & Animation</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-ruler"></span> <span class="menu-title">Engineering & Architecture</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li> <a class="dropdown" href="#"> <span class="menu-icn flaticon-goal"></span> <span class="menu-title">Finance & Accounting</span> </a>
                      <div class="drop-menu d-flex justify-content-between">
                        <div class="one-third">
                          <div class="h6 cat-title">Web & App Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Website Design</a></li>
                            <li><a href="#">App DesignUX Design</a></li>
                            <li><a href="#">Landing Page Design</a></li>
                            <li><a href="#">Icon Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Marketing Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Social Media Design</a></li>
                            <li><a href="#">Email Design</a></li>
                            <li><a href="#">Web Banners</a></li>
                            <li><a href="#">Signage Design</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Art & Illustration</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Illustration</a></li>
                            <li><a href="#">NFT Art</a></li>
                            <li><a href="#">Pattern Design</a></li>
                            <li><a href="#">Portraits & Caricatures</a></li>
                            <li><a href="#">Cartoons & Comics</a></li>
                            <li><a href="#">Tattoo Design</a></li>
                            <li><a href="#">Storyboards</a></li>
                          </ul>
                          <div class="h6 cat-title">Gaming</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">Game Art</a></li>
                            <li><a href="#">Graphics for Streamers</a></li>
                            <li><a href="#">Twitch Store</a></li>
                          </ul>
                        </div>
                        <div class="one-third">
                          <div class="h6 cat-title">Visual Design</div>
                          <ul class="ps-0 mb40">
                            <li><a href="#">Image Editing</a></li>
                            <li><a href="#">Presentation Design</a></li>
                            <li><a href="#">Infographic Design</a></li>
                            <li><a href="#">Vector Tracing</a></li>
                            <li><a href="#">Resume Design</a></li>
                          </ul>
                          <div class="h6 cat-title">Print Design</div>
                          <ul class="ps-0 mb-0">
                            <li><a href="#">T-Shirts & Merchandise</a></li>
                            <li><a href="#">Flyer Design</a></li>
                            <li><a href="#">Brochure Design</a></li>
                            <li><a href="#">Poster Design</a></li>
                            <li><a href="#">Catalog Design</a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-auto px-0">
            <div class="d-flex align-items-center">
              <!-- Responsive Menu Structure-->
              <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="visible_list"> <a class="list-item" href="#"><span class="title">Home</span></a>
                  <!-- Level Two-->
                  <ul>
                    <li><a href="index.html">Home V1</a></li>
                    <li><a href="index2.html">Home V2</a></li>
                    <li><a href="index3.html">Home V3</a></li>
                    <li><a href="index4.html">Home V4</a></li>
                    <li><a href="index5.html">Home V5</a></li>
                    <li><a href="index6.html">Home V6</a></li>
                    <li><a href="index7.html">Home V7</a></li>
                    <li><a href="index8.html">Home V8</a></li>
                    <li><a href="index9.html">Home V9</a></li>
                    <li><a href="index10.html">Home V10</a></li>
                    <li><a href="index11.html">Home V11</a></li>
                    <li><a href="index12.html">Home V12</a></li>
                    <li><a href="index13.html">Home V13</a></li>
                    <li><a href="index14.html">Home V14</a></li>
                    <li><a href="index15.html">Home V15</a></li>
                    <li><a href="index16.html">Home V16</a></li>
                    <li><a href="index17.html">Home V17</a></li>
                    <li><a href="index18.html">Home V18</a></li>
                    <li><a href="index19.html">Home V19</a></li>
                    <li><a href="index20.html">Home V20</a></li>
                  </ul>
                </li>
                <li class="visible_list"> <a class="list-item" href="#"><span class="title">Browse Jobs</span></a>
                  <ul >
                    <li> <a href="#"><span class="title">Services</span></a>
                      <ul>
                        <li><a href="page-service-v1.html">Service v1</a></li>
                        <li><a href="page-service-v2.html">Service v2</a></li>
                        <li><a href="page-service-v3.html">Service v3</a></li>
                        <li><a href="page-service-v4.html">Service v4</a></li>
                        <li><a href="page-service-v5.html">Service v5</a></li>
                        <li><a href="page-service-v6.html">Service v6</a></li>
                        <li><a href="page-service-v7.html">Service v7</a></li>
                        <li><a href="page-service-all.html">Service All</a></li>
                        <li><a href="page-service-single.html">Service Single</a></li>
                        <li><a href="page-service-single-v1.html">Single V1</a></li>
                        <li><a href="page-service-single-v2.html">Single V2</a></li>
                      </ul>
                    </li>
                    <li> <a href="#"><span class="title">Projects</span></a>
                      <ul>
                        <li><a href="page-project-v1.html">Project v1</a></li>
                        <li><a href="page-project-list-v1.html">List v1</a></li>
                        <li><a href="page-project-list-v2.html">List v2</a></li>
                        <li><a href="page-project-list-v3.html">List v3</a></li>
                        <li><a href="page-project-single.html">Project Single</a></li>
                        <li><a href="page-project-single-v1.html">Single V1</a></li>
                        <li><a href="page-project-single-v2.html">Single V2</a></li>
                      </ul>
                    </li>
                    <li> <a href="#"><span class="title">Job View</span></a>
                      <ul>
                        <li><a href="page-job-list-v1.html">Job list v1</a></li>
                        <li><a href="page-job-list-v2.html">Job list v2</a></li>
                        <li><a href="page-job-list-v3.html">Job list V3</a></li>
                        <li><a href="page-job-list-single.html">Job Single</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="visible_list"> <a class="list-item" href="#"><span class="title">Users</span></a>
                  <ul>
                    <li> <a href="#"><span class="title">Dashboard</span></a>
                      <ul>
                        <li><a href="page-dashboard.html">Dashboard</a></li>
                        <li><a href="page-dashboard-proposal.html">Proposal</a></li>
                        <li><a href="page-dashboard-save.html">Saved</a></li>
                        <li><a href="page-dashboard-message.html">Message</a></li>
                        <li><a href="page-dashboard-reviews.html">Reviews</a></li>
                        <li><a href="page-dashboard-invoice.html">Invoice</a></li>
                        <li><a href="page-dashboard-payouts.html">Payouts</a></li>
                        <li><a href="page-dashboard-statement.html">Statement</a></li>
                        <li><a href="page-dashboard-manage-service.html">Manage Service</a></li>
                        <li><a href="page-dashboard-add-service.html">Add Services</a></li>
                        <li><a href="page-dashboard-manage-jobs.html">Manage Jobs</a></li>
                        <li><a href="page-dashboard-manage-project.html">Manage Project</a></li>
                        <li><a href="page-dashboard-create-project.html">Create Project</a></li>
                        <li><a href="page-dashboard-profile.html">My Profile</a></li>
                      </ul>
                    </li>
                    <li> <a href="#"><span class="title">Employee</span></a>
                      <ul>
                        <li><a href="page-employee-v1.html">Employee V1</a></li>
                        <li><a href="page-employee-v2.html">Employee V2</a></li>
                        <li><a href="page-employee-single.html">Employee Single</a></li>
                      </ul>
                    </li>
                    <li> <a href="#"><span class="title">Freelancer</span></a>
                      <ul>
                        <li><a href="page-freelancer-v1.html">Freelancer V1</a></li>
                        <li><a href="page-freelancer-v2.html">Freelancer V2</a></li>
                        <li><a href="page-freelancer-v3.html">Freelancer V3</a></li>
                        <li><a href="page-freelancer-list-v1.html">List V1</a></li>
                        <li><a href="page-freelancer-list-v2.html">List V2</a></li>
                        <li><a href="page-freelancer-list-v3.html">List V3</a></li>
                        <li><a href="page-freelancer-single.html">Freelancer Single</a></li>
                        <li><a href="page-freelancer-single-v1.html">Single V1</a></li>
                        <li><a href="page-freelancer-single-v2.html">Single V2</a></li>
                      </ul>
                    </li>
                    <li> <a href="page-become-seller.html"><span class="title">Become Seller</span></a></li>
                  </ul>
                </li>
                <li class="visible_list"> <a class="list-item" href="#"><span class="title">Pages</span></a>
                  <ul>
                    <li> <a href="#"><span class="title">About</span></a>
                      <ul>
                        <li><a href="page-about.html">About v1</a></li>
                        <li><a href="page-about-v2.html">About v2</a></li>
                      </ul>
                    </li>
                    <li> <a href="#"><span class="title">Blog</span></a>
                      <ul>
                        <li><a href="page-blog-v1.html">List V1</a></li>
                        <li><a href="page-blog-v2.html">List V2</a></li>
                        <li><a href="page-blog-v3.html">List V3</a></li>
                        <li><a href="page-blog-single.html">Single</a></li>
                      </ul>
                    </li>
                    <li> <a href="#"><span class="title">Shop</span></a>
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
                <li> <a class="list-item" href="page-contact.html">Contact</a></li>
              </ul>
              <a class="login-info bdrl1 pl15-lg pl30" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span class="flaticon-loupe"></span></a>
              <a class="login-info mx15-lg mx30" href="page-become-seller.html"><span class="d-none d-xl-inline-block">Become a</span> Seller</a>
              <a class="login-info mr15-lg mr30" href="page-login.html">Sign in</a>
              <a class="ud-btn btn-white add-joining" href="page-register.html">Join</a>
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

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header bb-white-light">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="mobile_logo" href="#"><img src="images/header-logo.svg" alt=""></a>
            <div class="right-side text-end">
              <a class="text-white" href="page-login.html">join</a>
              <a class="menubar ml30" href="#menu"><img src="images/white-nav-icon.svg" alt=""></a>
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
          <ul>
            <li><a href="index.html">Home V1</a></li>
            <li><a href="index2.html">Home V2</a></li>
            <li><a href="index3.html">Home V3</a></li>
            <li><a href="index4.html">Home V4</a></li>
            <li><a href="index5.html">Home V5</a></li>
            <li><a href="index6.html">Home V6</a></li>
            <li><a href="index7.html">Home V7</a></li>
            <li><a href="index8.html">Home V8</a></li>
            <li><a href="index9.html">Home V9</a></li>
            <li><a href="index10.html">Home V10</a></li>
            <li><a href="index11.html">Home V11</a></li>
            <li><a href="index12.html">Home V12</a></li>
            <li><a href="index13.html">Home V13</a></li>
            <li><a href="index14.html">Home V14</a></li>
            <li><a href="index15.html">Home V15</a></li>
            <li><a href="index16.html">Home V16</a></li>
            <li><a href="index17.html">Home V17</a></li>
            <li><a href="index18.html">Home V18</a></li>
            <li><a href="index19.html">Home V19</a></li>
            <li><a href="index20.html">Home V20</a></li>
          </ul>
        </li>
        <li><span>Browse Jobs</span>
          <ul>
            <li><span>Services</span>
              <ul>
                <li><a href="page-service-v1.html">Service v1</a></li>
                <li><a href="page-service-v2.html">Service v2</a></li>
                <li><a href="page-service-v3.html">Service v3</a></li>
                <li><a href="page-service-v4.html">Service v4</a></li>
                <li><a href="page-service-v5.html">Service v5</a></li>
                <li><a href="page-service-v6.html">Service v6</a></li>
                <li><a href="page-service-v7.html">Service v7</a></li>
                <li><a href="page-service-all.html">Service All</a></li>
                <li><a href="page-service-single.html">Service Single</a></li>
                <li><a href="page-service-single-v1.html">Single V1</a></li>
                <li><a href="page-service-single-v2.html">Single V2</a></li>
              </ul>
            </li>
            <li><span>Projects</span>
              <ul>
                <li><a href="page-project-v1.html">Project v1</a></li>
                <li><a href="page-project-list-v1.html">List v1</a></li>
                <li><a href="page-project-list-v2.html">List v2</a></li>
                <li><a href="page-project-list-v3.html">List v3</a></li>
                <li><a href="page-project-single.html">Project Single</a></li>
                <li><a href="page-project-single-v1.html">Single V1</a></li>
                <li><a href="page-project-single-v2.html">Single V2</a></li>
              </ul>
            </li>
            <li><span>Job View</span>
              <ul>
                <li><a href="page-job-list-v1.html">Job list v1</a></li>
                <li><a href="page-job-list-v2.html">Job list v2</a></li>
                <li><a href="page-job-list-v3.html">Job list V3</a></li>
                <li><a href="page-job-list-single.html">Job Single</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><span>Users</span>
          <ul>
            <li><span>Dashboard</span>
              <ul>
                <li><a href="page-dashboard.html">Dashboard</a></li>
                <li><a href="page-dashboard-proposal.html">Proposal</a></li>
                <li><a href="page-dashboard-save.html">Saved</a></li>
                <li><a href="page-dashboard-message.html">Message</a></li>
                <li><a href="page-dashboard-reviews.html">Reviews</a></li>
                <li><a href="page-dashboard-invoice.html">Invoice</a></li>
                <li><a href="page-dashboard-payouts.html">Payouts</a></li>
                <li><a href="page-dashboard-statement.html">Statement</a></li>
                <li><a href="page-dashboard-manage-service.html">Manage Service</a></li>
                <li><a href="page-dashboard-add-service.html">Add Services</a></li>
                <li><a href="page-dashboard-manage-jobs.html">Manage Jobs</a></li>
                <li><a href="page-dashboard-manage-project.html">Manage Project</a></li>
                <li><a href="page-dashboard-create-project.html">Create Project</a></li>
                <li><a href="page-dashboard-profile.html">My Profile</a></li>
              </ul>
            </li>
            <li><span>Employee</span>
              <ul>
                <li><a href="page-employee-v1.html">Employee V1</a></li>
                <li><a href="page-employee-v2.html">Employee V2</a></li>
                <li><a href="page-employee-single.html">Employee Single</a></li>
              </ul>
            </li>
            <li><span>Freelancer</span>
              <ul>
                <li><a href="page-freelancer-v1.html">Freelancer V1</a></li>
                <li><a href="page-freelancer-v2.html">Freelancer V2</a></li>
                <li><a href="page-freelancer-v3.html">Freelancer V3</a></li>
                <li><a href="page-freelancer-list-v1.html">List V1</a></li>
                <li><a href="page-freelancer-list-v2.html">List V2</a></li>
                <li><a href="page-freelancer-list-v3.html">List V3</a></li>
                <li><a href="page-freelancer-single.html">Freelancer Single</a></li>
                <li><a href="page-freelancer-single-v1.html">Single V1</a></li>
                <li><a href="page-freelancer-single-v2.html">Single V2</a></li>
              </ul>
            </li>
            <li><a href="page-become-seller.html">Become Seller</a></li>
          </ul>
        </li>
        <li><span>Pages</span>
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
        <li><span>Blog</span>
          <ul>
            <li><a href="page-blog-v1.html">List V1</a></li>
            <li><a href="page-blog-v2.html">List V2</a></li>
            <li><a href="page-blog-v3.html">List V3</a></li>
            <li><a href="page-blog-single.html">Single</a></li>
          </ul>
        </li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>

  <div class="body_content">
    <!-- Home Banner Style V1 -->
    <section class="home-one p-0 space-maintain-1">
      <div class="container-fluid px-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-banner-wrapper home1_style">
              <div class="banner-style-one dots_none nav_none owl-theme owl-carousel">
                <div class="slide slide-one" style="background-image: url(images/home/home-1.jpg);"></div>
                <div class="slide slide-one" style="background-image: url(images/home/home-1.jpg);"></div>
              </div>
              <div class="carousel-btn-block banner-carousel-btn">
                <span class="carousel-btn left-btn"><i class="fas fa-chevron-left left"></i></span>
                <span class="carousel-btn right-btn"><i class="fas fa-chevron-right right"></i></span>
              </div>
              <!-- /.carousel-btn-block banner-carousel-btn --> 
            </div>
            <!-- /.main-banner-wrapper -->
          </div>
        </div>
      </div>
      <div class="home1-banner-content">
        <div class="container">
          <div class="row">
            <div class="col-xl-10 col-xxl-7">
              <div class="position-relative">
                <h3 class="banner-title">Hire the best freelancers for <br class="d-none d-lg-block">any job, online.</h3>
                <p class="banner-text text-white ff-heading mb25">Millions of people use freeio.com to turn their ideas into reality.</p>
                <div class="advance-search-tab bgc-white bgct-sm p10 p0-md bdrs4 banner-btn position-relative zi9">
                  <div class="row">
                    <div class="col-md-5 col-lg-6 col-xl-6">
                      <div class="advance-search-field mb10-sm bdrr1 bdrn-sm">
                        <form class="form-search position-relative">
                          <div class="box-search">
                            <span class="icon far fa-magnifying-glass"></span>
                            <input class="form-control" type="text" name="search" placeholder="What are you looking for?">
                            <div class="search-suggestions">
                              <h6 class="fz14 ml30 mt25 mb-3">Popular Search</h6>
                              <div class="box-suggestions">
                                <ul class="px-0 m-0 pb-4">
                                  <li>
                                    <div class="info-product">
                                      <div class="item_title">mobile app development</div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="info-product">
                                      <div class="item_title">mobile app builder</div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="info-product">
                                      <div class="item_title">mobile legends</div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="info-product">
                                      <div class="item_title">mobile app ui ux design</div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="info-product">
                                      <div class="item_title">mobile game app development</div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="info-product">
                                      <div class="item_title">mobile app design</div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-4 d-none d-md-block">
                      <div class="bselect-style1">
                        <select class="selectpicker" data-width="100%">
                          <option>Select Role</option>
                          <option data-tokens="Graphics&Design">Graphics & Design</option>
                          <option data-tokens="DigitlMarketing">Digital Marketing</option>
                          <option data-tokens="Writing&Translation">Writing & Translation</option>
                          <option data-tokens="Video&Animation">Video & Animation</option>
                          <option data-tokens="Music&Audio">Music & Audio</option>
                          <option data-tokens="Programming&Tech">Programming & Tech</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 ps-md-0">
                      <div class="text-center text-xl-end">
                        <button class="ud-btn btn-thm w-100 px-4" type="button">Search</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-none d-md-flex mt30 banner-text">
                  <p class="hero-text fz15 me-2 text-white mb-0">Popular Searches</p>
                  <a class="text-white" href=""> Designer,</a>
                  <a class="text-white" href=""> Developer,</a>
                  <a class="text-white" href=""> Web,</a>
                  <a class="text-white" href=""> IOS,</a>
                  <a class="text-white" href=""> PHP,</a>
                  <a class="text-white" href=""> Senior,</a>
                  <a class="text-white" href=""> Engineer</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Browse talent by category -->
    <section class="pb40-md pb90">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Browse talent by category</h2>
              <p class="paragraph">Get some Inspirations from 1800+ skills</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-2">
              <a class="ud-btn2" href="page-service-single.html">All Categories<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row d-none d-lg-flex wow fadeInUp">
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-developer"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Development & IT</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-web-design-1"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Design & Creative</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-digital-marketing"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Digital Marketing</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-translator"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Writing & Translation</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-microphone"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Music & Audio</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-video-file"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Video & Animation</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-ruler"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Engineering & Architecture</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="iconbox-style1">
              <div class="icon"><span class="flaticon-goal"></span></div>
              <div class="details mt20">
                <p class="text mb5">1.853 skills</p>
                <h4 class="title">Finance & Accounting</h4>
                <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row d-block d-lg-none">
          <div class="col-lg-12">
            <div class="slider-outer-dib navi_pagi_top_right slider-5-grid owl-carousel owl-theme wow fadeInUp">
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-developer"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Development & IT</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-web-design-1"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Design & Creative</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-digital-marketing"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Digital Marketing</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-translator"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Writing & Translation</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-microphone"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Music & Audio</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-video-file"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Video & Animation</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-ruler"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Engineering & Architecture</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="iconbox-style1">
                  <div class="icon"><span class="flaticon-goal"></span></div>
                  <div class="details mt20">
                    <p class="text mb5">1.853 skills</p>
                    <h4 class="title">Finance & Accounting</h4>
                    <p class="mb-0">Software Engineer, Web / Mobile Developer & More</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Trending Services -->
    <section class="pb90 pb30-md bgc-thm3">
      <div class="container">
        <div class="row align-items-center wow fadeInUp">
          <div class="col-lg-9">
            <div class="main-title">
              <h2 class="title">Trending Services</h2>
              <p class="paragraph">Most viewed and all-time top-selling services</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-4 mb-lg-2">
              <a class="ud-btn2" href="page-service-single.html">All Categories<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="slider-outer-dib vam_nav_style dots_none slider-4-grid2 owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g-1.jpg" alt="">
                    <a href="" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="images/team/fl-s-1.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g-2.jpg" alt="">
                    <a href="" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Art & Illustration</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will create modern flat design illustration</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="">
                        <span class="position-relative mr10">
                          <img class="rounded-circle wa" src="images/team/fl-s-2.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Ali Tufan</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g-3.jpg" alt="">
                    <a href="" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="images/team/fl-s-3.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g-4.jpg" alt="">
                    <a href="" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will do mobile app development for ios and android</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="images/team/fl-s-4.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g-5.jpg" alt="">
                    <a href="" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="images/team/fl-s-1.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g-6.jpg" alt="">
                    <a href="" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Web & App Design</p>
                    <h5 class="list-title"><a href="page-services-single.html">I will design modern websites in figma or adobe xd</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="images/team/fl-s-2.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="images/listings/g-7.jpg" alt="">
                    <a href="" class="listing-fav fz12"><span class="far fa-heart"></span></a>
                  </div>
                  <div class="list-content">
                    <p class="list-text body-color fz14 mb-1">Design & Creative</p>
                    <h5 class="list-title line-clamp2"><a href="page-services-single.html">I will build a fully responsive design in HTML,CSS, bootstrap, and javascript</a></h5>
                    <div class="review-meta d-flex align-items-center">
                      <i class="fas fa-star fz10 review-color me-2"></i>
                      <p class="mb-0 body-color fz14"><span class="dark-color me-2">4.82</span>94 reviews</p>
                    </div>
                    <hr class="my-2">
                    <div class="list-meta d-flex justify-content-between align-items-center mt15">
                      <a class="d-flex" href="">
                        <span class="position-relative mr10">
                          <img class="rounded-circle" src="images/team/fl-s-3.png" alt="Freelancer Photo">
                          <span class="online-badges"></span>
                        </span>
                        <span class="fz14">Wanda Runo</span>
                      </a>
                      <div class="budget">
                        <p class="mb-0 body-color">Starting at<span class="fz17 fw500 dark-color ms-1">$983</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Need something --> 
    <section class="our-features pb90">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-title text-center">
              <h2>Need something done?</h2>
              <p class="text">Most viewed and all-time top-selling services</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-cv"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Post a job</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-web-design"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Choose freelancers</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-secure"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Pay safely</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-customer-service"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">We’re here to help</h4>
                <p class="text">It’s free and easy to post a job. Simply fill <br class="d-none d-xxl-block"> in a title, description.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="p-0">
      <div class="cta-banner3 bgc-light-yellow mx-auto maxw1700 pt120 pt60-lg pb90 pb60-lg position-relative overflow-hidden">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="300ms">
              <div class="mb30">
                <div class="main-title">
                  <h2 class="title">A whole world of freelance <br class="d-none d-xl-block"> talent at your fingertips</h2>
                </div>
              </div>
              <div class="why-chose-list">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-badge"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Proof of quality</h4>
                    <p class="text mb-0 fz15">Check any pro’s work samples, client reviews, and identity <br class="d-none d-lg-block"> verification.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-money"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">No cost until you hire</h4>
                    <p class="text mb-0 fz15">Interview potential fits for your job, negotiate rates, and only pay <br class="d-none d-lg-block"> for work you approve.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-security"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h4 class="mb-1">Safe and secure</h4>
                    <p class="text mb-0 fz15">Focus on your work knowing we help protect your data and privacy. We’re here with 24/7 support if you need it.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <img class="cta-banner3-img wow fadeInLeft" src="images/about/about-5.jpg" alt="" data-wow-delay="300ms">
      </div>
    </section>

    <!-- Funfact -->
    <section class="pb0 pt60">
      <div class="container maxw1600 bdrb1 pb60">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">834</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Total Freelancer</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">732</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Positive Review</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">90</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Order recieved</p>
              </div>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="funfact_one mb20-sm text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">236</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Projects Completed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Testimonials -->
    <section class="our-testimonial">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2>Testimonials</h2>
              <p class="paragraph">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 m-auto wow fadeInUp" data-wow-delay="500ms">
            <div class="testimonial-style2">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-1st" role="tabpanel" aria-labelledby="pills-1st-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade show active" id="pills-2nd" role="tabpanel" aria-labelledby="pills-2nd-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-3rd" role="tabpanel" aria-labelledby="pills-3rd-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-4th" role="tabpanel" aria-labelledby="pills-4th-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-5th" role="tabpanel" aria-labelledby="pills-5th-tab">
                  <div class="testi-content text-md-center">
                    <span class="icon fas fa-quote-left"></span>
                    <h4 class="testi-text">"Our family was traveling via bullet train between cities in Japan with our luggage - the location for this hotel made that so easy. Agoda price was fantastic. "</h4>
                    <h6 class="name">Ali Tufan</h6>
                    <p class="design">Product Manager, Apple Inc</p>
                  </div>
                </div>
              </div>
              <div class="tab-list position-relative">
                <ul class="nav nav-pills justify-content-md-center" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link ps-0" id="pills-1st-tab" data-bs-toggle="pill" data-bs-target="#pills-1st" type="button" role="tab" aria-controls="pills-1st" aria-selected="true"><img src="images/testimonials/testi-1.png" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-2nd-tab" data-bs-toggle="pill" data-bs-target="#pills-2nd" type="button" role="tab" aria-controls="pills-2nd" aria-selected="false"><img src="images/testimonials/testi-2.png" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-3rd-tab" data-bs-toggle="pill" data-bs-target="#pills-3rd" type="button" role="tab" aria-controls="pills-3rd" aria-selected="false"><img src="images/testimonials/testi-3.png" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-4th-tab" data-bs-toggle="pill" data-bs-target="#pills-4th" type="button" role="tab" aria-controls="pills-4th" aria-selected="false"><img src="images/testimonials/testi-4.png" alt=""></button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link pe-0" id="pills-5th-tab" data-bs-toggle="pill" data-bs-target="#pills-5th" type="button" role="tab" aria-controls="pills-5th" aria-selected="false"><img src="images/testimonials/testi-5.png" alt=""></button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section Area -->
    <section class="our-about bgc-thm2">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6">
            <div class="position-relative mb30-lg">
              <div class="iconbox-small1 at-home1 d-none d-md-block wow fadeInRight">
                <span class="icon flaticon-review"></span>
                <div class="details">
                  <h6>4.9/5</h6>
                  <p class="text fz13 mb-0">Clients rate professionals</p>
                </div>
              </div>
              <div class="iconbox-small2 d-none d-md-block wow fadeInLeft">
                <span class="icon flaticon-review"></span>
                <div class="details">
                  <h6>+12M</h6>
                  <p class="text fz13 mb-0">Project Completed</p>
                </div>
              </div>
              <div class="about-img wow fadeInRight" data-wow-delay="300ms">
                <img class="w100" src="images/about/about-1.png" alt="">
              </div>
              <div class="imgbox-1 default-box-shadow1 text-center wow fadeInUp">
                <img class="img-1 bounce-y" src="images/about/happy-client.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-xl-5 offset-xl-1">
            <div class="position-relative wow fadeInLeft" data-wow-delay="300ms">
              <h2 class="text-white mb35">Join World's Best Marketplace <br class="d-none d-lg-block"> for Workers</h2>
              <p class="text text-white mb35">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
              <div class="list-style2 light-style">
                <ul class="mb30">
                  <li><i class="far fa-check"></i>Connect to freelancers with proven business experience</li>
                  <li><i class="far fa-check"></i>Get matched with the perfect talent by a customer success manager</li>
                  <li><i class="far fa-check"></i>Unmatched quality of remote, hybrid, and flexible jobs</li>
                </ul>
              </div>
              <a href="page-freelancer-v1.html" class="ud-btn btn-thm">Find Talent<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Blog -->
    <section class="pb90 pb20-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
            <div class="main-title">
              <h2 class="title">Our Blog</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="images/blog/blog-1.jpg" alt=""></div>
              <div class="blog-content">
                <a class="date" href="">December 2, 2022</a>
                <h4 class="title mt-1"><a href="page-blog-single.html">Start an online business and work from home</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="images/blog/blog-2.jpg" alt=""></div>
              <div class="blog-content">
                <a class="date" href="">December 2, 2022</a>
                <h4 class="title mt-1"><a href="page-blog-single.html">Front becomes an official Instagram Marketing Partner</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="images/blog/blog-3.jpg" alt=""></div>
              <div class="blog-content">
                <a class="date" href="">December 2, 2022</a>
                <h4 class="title mt-1"><a href="page-blog-single.html">Engendering a culture of professional development</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-3">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="images/blog/blog-4.jpg" alt=""></div>
              <div class="blog-content">
                <a class="date" href="">December 2, 2022</a>
                <h4 class="title mt-1"><a href="page-blog-single.html">Increasing engagement with Instagram</a></h4>
                <p class="text mb-0">A complete guide to starting a small business online</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners --> 
    <section class="our-partners pt0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/1.png" alt="1.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/2.png" alt="2.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/3.png" alt="3.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/4.png" alt="4.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/5.png" alt="5.png"></div>
          </div>
          <div class="col-6 col-md-4 col-xl-2">
            <div class="partner_item text-center mb30-lg"><img class="wa m-auto" src="images/partners/6.png" alt="6.png"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA --> 
    <section class="our-cta bgc-thm4 pt90 pb90 pt60-md pb60-md mt100 mt0-lg">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-6 col-lg-7 col-xl-5 wow fadeInLeft">
            <div class="cta-style3">
              <h2 class="cta-title">Find the talent needed to get your business growing.</h2>
              <p class="cta-text">Advertise your jobs to millions of monthly users and search 15.8 million CVs</p>
              <a href="page-contact.html" class="ud-btn btn-thm2">Get Started <i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 col-xl-5 position-relative wow zoomIn">
            <div class="cta-img">
              <img class="w-100" src="images/about/about-3.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Footer --> 
    <section class="footer-style1 pt25 pb-0">
      <div class="container">
        <div class="row bb-white-light pb10 mb60">
          <div class="col-md-7">
            <div class="d-block text-center text-md-start justify-content-center justify-content-md-start d-md-flex align-items-center mb-3 mb-md-0">
              <a class="fz17 fw500 text-white mr15-md mr30" href="">Terms of Service</a>
              <a class="fz17 fw500 text-white mr15-md mr30" href="">Privacy Policy</a>
              <a class="fz17 fw500 text-white" href="">Site Map</a>
            </div>
          </div>
          <div class="col-md-5">
            <div class="social-widget text-center text-md-end">
              <div class="social-style1">
                <a class="text-white me-2 fw500 fz17" href="">Follow us</a>
                <a href=""><i class="fab fa-facebook-f list-inline-item"></i></a>
                <a href=""><i class="fab fa-twitter list-inline-item"></i></a>
                <a href=""><i class="fab fa-instagram list-inline-item"></i></a>
                <a href=""><i class="fab fa-linkedin-in list-inline-item"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-3">
            <div class="link-style1 mb-4 mb-sm-5">
              <h5 class="text-white mb15">About</h5>
              <div class="link-list">
                <a href="">Careers</a>
                <a href="">Press & News</a>
                <a href="">Partnerships</a>
                <a href="">Privacy Policy</a>
                <a href="">Terms of Service</a>
                <a href="">Investor Relations</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="link-style1 mb-4 mb-sm-5">
              <h5 class="text-white mb15">Categories</h5>
              <ul class="ps-0">
                <li><a href="">Graphics & Design</a></li>
                <li><a href="">Digital Marketing</a></li>
                <li><a href="">Writing & Translation</a></li>
                <li><a href="">Video & Animation</a></li>
                <li><a href="">Music & Audio</a></li>
                <li><a href="">Programming & Tech</a></li>
                <li><a href="">Data</a></li>
                <li><a href="">Business</a></li>
                <li><a href="">Lifestyle</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="link-style1 mb-4 mb-sm-5">
              <h5 class="text-white mb15">Support</h5>
              <ul class="ps-0">
                <li><a href="">Help & Support</a></li>
                <li><a href="">Trust & Safety</a></li>
                <li><a href="">Selling on Freeio</a></li>
                <li><a href="">Buying on Freeio</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="footer-widget">
              <div class="footer-widget mb-4 mb-sm-5">
                <div class="mailchimp-widget">
                  <h5 class="title text-white mb20">Subscribe</h5>
                  <div class="mailchimp-style1">
                    <input type="email" class="form-control" placeholder="Your email address">
                    <button type="submit">Send</button>
                  </div>
                </div>
              </div>
              <div class="app-widget mb-4 mb-sm-5">
                <h5 class="title text-white mb20">Apps</h5>
                <div class="row mb-4 mb-lg-5">
                  <div class="col-lg-12">
                    <a class="app-list d-flex align-items-center mb10" href="">
                      <i class="fab fa-apple fz17 mr15"></i>
                      <h6 class="app-title fz15 fw400 mb-0">iOS App</h6>
                    </a>
                    <a class="app-list d-flex align-items-center" href="">
                      <i class="fab fa-google-play fz15 mr15"></i>
                      <h6 class="app-title fz15 fw400 mb-0">Android App</h6>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container white-bdrt1 py-4">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="text-center text-lg-start">
              <p class="copyright-text mb-2 mb-md-0 text-white-light ff-heading">© Freeio. 2023 CreativeLayers. All rights reserved.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer_bottom_right_btns text-center text-lg-end">
              <ul class="p-0 m-0">
                <li class="list-inline-item">
                  <select class="selectpicker show-tick">
                    <option>US$ USD</option>
                    <option>Euro</option>
                    <option>Pound</option>
                  </select>
                </li>
                <li class="list-inline-item">
                  <select class="selectpicker show-tick">
                    <option>English</option>
                    <option>Frenc</option>
                    <option>Italian</option>
                    <option>Spanish</option>
                    <option>Turkey</option>
                  </select>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
</div>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
        <script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
        <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/owl.js') }}"></script>
        <script src="{{ asset('js/parallax.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>

    </body>
</html>
