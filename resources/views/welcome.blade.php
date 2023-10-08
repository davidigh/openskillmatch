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
  
  <header class="header-nav nav-innerpage-style bg-transparent zi9 position-relative main-menu border-0">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto px-0">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logos">
                <a class="header-logo logo2" href="index.html"><img src="images/header-logo3.svg" alt="Header Logo"></a>
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
            </div>
          </div>
          <div class="col-auto px-0">
            <div class="d-flex align-items-center">
              @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="login-info mr10-lg mr30">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ud-btn btn-thm2 add-joining">Register</a>
                        @endif
                    @endauth
                </div>
            @endif              
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
      <div class="header bdrb1">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="mobile_logo" href="#"><img src="images/header-logo3.svg" alt=""></a>
            <div class="right-side text-end">
              <a class="" href="page-login.html">join</a>
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
    <section class="hero-home6 py-0">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-6">
            <div class="pr50 pr0-xl mb30-md position-relative">
              <h1 class="animate-up-1 mb15 text-thm2">Publish your  <span class="text-thm">open science project </span> <br class="d-none d-xl-block">for the world</h1>
              <p class="animate-up-2 ff-heading mb30 text">Colaborate with others professionals and create great .</p>
              <div class="advance-search-tab at-home6 bgc-white bdrs4 p10 position-relative zi2 animate-up-3">
                <div class="row">
                  <div class="col-md-9 col-lg-8 col-xl-9">
                    <div class="advance-search-field mb10-sm">
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
                  <div class="col-md-3 col-lg-4 col-xl-3">
                    <div class="text-center">
                      <button class="ud-btn btn-thm2 bdrs4 w-100" type="button">Search</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-block d-md-flex mt30 banner-text animate-up-4">
                <p class="hero-text fz15 me-2 mb-0 text">Popular Searches</p>
                <a class="text" href=""> Designer,</a>
                <a class="text" href=""> Developer,</a>
                <a class="text" href=""> Web,</a>
                <a class="text" href=""> IOS,</a>
                <a class="text" href=""> PHP,</a>
                <a class="text" href=""> Senior,</a>
                <a class="text" href=""> Engineer</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-xl-5">
            <div class="home6-hero-content position-relative">
              <div class="iconbox-small1 d-none d-md-block wow fadeInRight default-box-shadow4 bounce-y animate-up-1">
                <span class="icon flaticon-review"></span>
                <div class="details">
                  <h6>4.9/5</h6>
                  <p class="text fz13 mb-0">Clients rate professionals</p>
                </div>
              </div>
              <div class="iconbox-small2 d-none d-md-block wow fadeInLeft default-box-shadow4 bounce-y animate-up-2">
                <span class="icon flaticon-review"></span>
                <div class="details">
                  <h6>+12M</h6>
                  <p class="text fz13 mb-0">Project Completed</p>
                </div>
              </div>
              <img src="images/about/element-10.png" alt="" class="bounce-x img-4">
              <img src="images/about/element-11.png" alt="" class="spin-right img-5 d-none d-sm-block">
              <img src="images/about/home6-hero-element-1.png" alt="" class="bounce-y img-1 d-none d-sm-block">
              <img src="images/about/home6-hero-element-2.png" alt="" class="bounce-y img-2 d-none d-sm-block">
              <img src="images/about/home6-hero-element-3.png" alt="" class="bounce-y img-3 d-none d-sm-block">
              <img src="images/about/home6-hero-img-1.png" alt="" class="animate-up-1 w-100">
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
              <h2 class="title">Browse research by category</h2>
              <p class="paragraph">Get some Inspiration.</p>
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

   <!-- Explore Apartment -->
   <section class="our-features bgc-thm2 pt60 pb35">
      <div class="container">
        <div class="row align-items-md-center wow fadeInUp" data-wow-delay="00ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title" style="color:white;">Browse talent by category</h2>
              <p class="paragraph" style="color:white;">Get some Inspirations from 1800+ skills</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-3">
              <a class="ud-btn2" href="page-service-v1.html">All Categories<i class="fal fa-arrow-right-long dark-color"></i></a>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-sm-6 col-lg-3">
            <a href="page-service-v1.html">
              <div class="position-relative mb50 mb20-md d-flex align-items-center">
                <div class="city-img flex-shrink-0"><img class="bdrs4" src="images/listings/ct-s-1.jpg" alt=""></div>
                <div class="flex-shrink-1 ms-3">
                  <h6 class="mb-1">Development & IT</h6>
                  <p class="mb-0">1.853 skills</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a href="page-service-v1.html">
              <div class="position-relative mb50 mb20-md d-flex align-items-center">
                <div class="city-img flex-shrink-0"><img class="bdrs4" src="images/listings/ct-s-2.jpg" alt=""></div>
                <div class="flex-shrink-1 ms-3">
                  <h6 class="mb-1">Design & Creative</h6>
                  <p class="mb-0">1.853 skills</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a href="page-service-v1.html">
              <div class="position-relative mb50 mb20-md d-flex align-items-center">
                <div class="city-img flex-shrink-0"><img class="bdrs4" src="images/listings/ct-s-3.jpg" alt=""></div>
                <div class="flex-shrink-1 ms-3">
                  <h6 class="mb-1">Digital Marketing</h6>
                  <p class="mb-0">1.853 skills</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a href="page-service-v1.html">
              <div class="position-relative mb50 mb20-md d-flex align-items-center">
                <div class="city-img flex-shrink-0"><img class="bdrs4" src="images/listings/ct-s-4.jpg" alt=""></div>
                <div class="flex-shrink-1 ms-3">
                  <h6 class="mb-1">Writing & Translation</h6>
                  <p class="mb-0">1.853 skills</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a href="page-service-v1.html">
              <div class="position-relative mb50 mb20-md d-flex align-items-center">
                <div class="city-img flex-shrink-0"><img class="bdrs4" src="images/listings/ct-s-5.jpg" alt=""></div>
                <div class="flex-shrink-1 ms-3">
                  <h6 class="mb-1">Music & Audio</h6>
                  <p class="mb-0">1.853 skills</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a href="page-service-v1.html">
              <div class="position-relative mb50 mb20-md d-flex align-items-center">
                <div class="city-img flex-shrink-0"><img class="bdrs4" src="images/listings/ct-s-6.jpg" alt=""></div>
                <div class="flex-shrink-1 ms-3">
                  <h6 class="mb-1">Video & Animation</h6>
                  <p class="mb-0">1.853 skills</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a href="page-service-v1.html">
              <div class="position-relative mb50 mb20-md d-flex align-items-center">
                <div class="city-img flex-shrink-0"><img class="bdrs4" src="images/listings/ct-s-7.jpg" alt=""></div>
                <div class="flex-shrink-1 ms-3">
                  <h6 class="mb-1">Engineering & Architecture</h6>
                  <p class="mb-0">1.853 skills</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-lg-3">
            <a href="page-service-v1.html">
              <div class="position-relative mb50 mb20-md d-flex align-items-center">
                <div class="city-img flex-shrink-0"><img class="bdrs4" src="images/listings/ct-s-8.jpg" alt=""></div>
                <div class="flex-shrink-1 ms-3">
                  <h6 class="mb-1">Finance & Accounting</h6>
                  <p class="mb-0">1.853 skills</p>
                </div>
              </div>
            </a>
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
              <h2>Contribute to improve science</h2>
              <p class="text"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-cv"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Great tools for research</h4>
                <p class="text"> <br class="d-none d-xxl-block">Use document classification software, process and controls flows and stadistic tools.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-web-design"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Professional around the globe</h4>
                <p class="text">It' easy to colaborate when everyone and everything is in the same place.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="iconbox-style1 border-less p-0">
              <div class="icon before-none"><span class="flaticon-secure"></span></div>
              <div class="details">
                <h4 class="title mt10 mb-3">Always free</h4>
                <p class="text">Common it's open science<br class="d-none d-xxl-block">the world it's better with open reseach.</p>
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
              <h2 class="text-white mb35">Join World's Best Marketplace <br class="d-none d-lg-block"> for Open Science Research</h2>
              <p class="text text-white mb35">By joining our open science project, you become an integral part of a movement that seeks to accelerate the pace of scientific discovery. We believe that knowledge should be shared openly and freely, breaking down barriers to collaboration and fostering innovation. Your participation contributes directly to the advancement of science and the betterment of humanity.</p>
              <div class="list-style2 light-style">
                <ul class="mb30">
                  <li><i class="far fa-check"></i>Connect to a community who wants to improve the world.</li>
                  <li><i class="far fa-check"></i>Get matched with the perfect talent by reference.</li>
                  
                </ul>
              </div>
              <a href="page-freelancer-v1.html" class="ud-btn btn-thm">Find Talent<i class="fal fa-arrow-right-long"></i></a>
            </div>
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
              <h2 class="cta-title">Just a click to improve your project.</h2>
              <p class="cta-text"></p>
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
          <div class="col-md-12">
            <div class="d-block text-center text-md-start justify-content-center justify-content-md-start d-md-flex align-items-center mb-3 mb-md-0">
              <a class="fz17 fw500 text-white mr15-md mr30" href="">Terms of Service</a>
              <a class="fz17 fw500 text-white mr15-md mr30" href="">Privacy Policy</a>
              <a class="fz17 fw500 text-white" href="">Site Map</a>
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
                <h5 class="title text-white mb20">Apps (On develop)</h5>
                <div class="row mb-4 mb-lg-5">
                  <div class="col-lg-12">
                    <a class="app-list d-flex align-items-center mb10" href="#">
                      <i class="fab fa-apple fz17 mr15"></i>
                      <h6 class="app-title fz15 fw400 mb-0">iOS App</h6>
                    </a>
                    <a class="app-list d-flex align-items-center" href="#">
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
              <p class="copyright-text mb-2 mb-md-0 text-white-light ff-heading">OpenSkillMatch, Nasa Space App Challenge.</p>
            </div>
          </div>
       
        </div>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
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
