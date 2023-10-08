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
                <a class="header-logo logo2" href="https://mercamedia.net"><img src="images/Logo_osm_small.png" alt="Header Logo"></a>
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
                <li class="visible_list"> <a class="list-item" href="{{('welcome')}}"><span class="title">Home</span></a>
                  <!-- Level Two-->
                
                </li>
                <li class="visible_list"> <a class="list-item" href="{{('projects')}}"><span class="title">Projects</span></a>
                </li>
                <li class="visible_list"> <a class="list-item" href="{{('user')}}"><span class="title">Users</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-auto px-0">
            <div class="d-flex align-items-center">
              @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Account</a>
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
 

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header bdrb1">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="mobile_logo" href="#"><img src="images/Logo_osm_small.png" alt=""></a>
            <div class="right-side text-end">
              <a class="" href="href={{('register')}}">Account</a>
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
        <li><a href="{{('welcome')}}"><span>Home</span></a></li>
        <li><a href="{{('projects')}}"><span>Projects</span></a></li>
        <li><a href="{{('user')}}"><span>Users</span></a></li>
        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>


  <div class="body_content">
  
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section pt-0">
      <div class="cta-service-v1 cta-banner mx-auto maxw1700 pt120 pb120 bdrs16 position-relative overflow-hidden d-flex align-items-center mx20-lg px30-lg" style="background-image: url(https://www.microsoft.com/en-us/research/uploads/prod/2017/05/Area_IconHeader_Sys_Prog_1920x720.png);">
        <img class="left-top-img wow zoomIn" src="images/vector-img/left-top.png" alt="">
        <img class="right-bottom-img wow zoomIn" src="images/vector-img/right-bottom.png" alt="">
        <img class="service-v1-vector bounce-y d-none d-lg-block" src="https://www.tekniker.es/media/uploads/noticias/oferta-diseno-electronica-embebida.jpg" style="border-radius: 25px;" alt="">
        <div class="container">
          <div class="row wow fadeInUp">
            <div class="col-xl-5">
              <div class="position-relative">
                <h2 style="color:white; color:white; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Users</h2>
                <p style="color:white;" class="text mb-0">Find all the professionals that can contribute to your research.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Listings All Lists -->
    <section class="pt30 pb90">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="list-sidebar-style1 d-none d-lg-block">
              <div class="accordion" id="accordionExample">
              <div class="card mb20 pb5">
                  <div class="card-header active" id="heading2">
                    <h4>
                      <button class="btn btn-link ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Location</button>
                    </h4>
                  </div>
                  <div id="collapse2" class="collapse show" aria-labelledby="heading2" data-parent="#accordionExample">
                    <div class="card-body card-body px-0 pt-0">
                      <div class="search_area mb15">
                        <input type="text" class="form-control" placeholder="Search">
                        <label><span class="flaticon-loupe"></span></label>
                      </div>
                    
                    </div>
                  </div>
                </div>
                <div class="card mb20 pb10 mt-0">
                  <div class="card-header active" id="heading0">
                    <h4>
                      <button class="btn btn-link ps-0 pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="true" aria-controls="collapse0">Skills</button>
                    </h4>
                  </div>
                  <div id="collapse0" class="collapse show" aria-labelledby="heading0" data-parent="#accordionExample">
                    <div class="card-body card-body px-0 pt-0">
                      <div class="checkbox-style1 mb15">
                        <label class="custom_checkbox">UX Designer
                          <input type="checkbox">
                          <span class="checkmark"></span>
                          <span class="right-tags">(1,945)</span>
                        </label>
                        <label class="custom_checkbox">Web Developers
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                          <span class="right-tags">(8,136)</span>
                        </label>
                        <label class="custom_checkbox">Illustrators
                          <input type="checkbox">
                          <span class="checkmark"></span>
                          <span class="right-tags">(917)</span>
                        </label>
                        <label class="custom_checkbox">Node.js
                          <input type="checkbox">
                          <span class="checkmark"></span>
                          <span class="right-tags">(240)</span>
                        </label>
                        <label class="custom_checkbox">Project Managers
                          <input type="checkbox">
                          <span class="checkmark"></span>
                          <span class="right-tags">((2,460)</span>
                        </label>
                      </div>
                      <a class="text-thm" href="">+20 more</a>
                    </div>
                  </div>
                </div>
               
               
               
              
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="row align-items-center mb20">
              <div class="col-md-6">
                <div class="text-center text-md-start">
                  <p class="text mb-0 mb10-sm"><span class="fw500">5,512</span> services available</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="page_control_shorting d-md-flex align-items-center justify-content-center justify-content-md-end">
                  <div class="dropdown-lists d-block d-lg-none me-2 mb10-sm">
                    <ul class="p-0 mb-0 text-center text-md-start">
                      <li>
                        <!-- Advance Features modal trigger -->
                        <button type="button" class="open-btn filter-btn-left"> <img class="me-2" src="images/icon/all-filter-icon.svg" alt=""> All Filter</button>
                      </li>
                    </ul>
                  </div>
                
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-1.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Robert Fox</h5>
                    <p class="mb-0">Nursing Assistant</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-2.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Kristin Watson</h5>
                    <p class="mb-0">Dog Trainer</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-3.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Darrell Steward</h5>
                    <p class="mb-0">Medical Assistant</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-1.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Robert Fox</h5>
                    <p class="mb-0">Nursing Assistant</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-2.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Kristin Watson</h5>
                    <p class="mb-0">Dog Trainer</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-3.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Darrell Steward</h5>
                    <p class="mb-0">Medical Assistant</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-1.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Robert Fox</h5>
                    <p class="mb-0">Nursing Assistant</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-2.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Kristin Watson</h5>
                    <p class="mb-0">Dog Trainer</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-4">
                <div class="freelancer-style1 text-center bdr1 hover-box-shadow">
                  <div class="thumb w90 mb25 mx-auto position-relative rounded-circle">
                    <img class="rounded-circle mx-auto" src="images/team/fl-3.png" alt="">
                    <span class="online"></span>
                  </div>
                  <div class="details">
                    <h5 class="title mb-1">Darrell Steward</h5>
                    <p class="mb-0">Medical Assistant</p>
                    <div class="review"><p><i class="fas fa-star fz10 review-color pr10"></i><span class="dark-color fw500">4.9</span> (595 reviews)</p></div>
                    <div class="skill-tags d-flex align-items-center justify-content-center mb5">
                      <span class="tag">Figma</span>
                      <span class="tag mx10">Sketch</span>
                      <span class="tag">HTML5</span>
                    </div>
                    <hr class="opacity-100 mt20 mb15">
                    <div class="fl-meta d-flex align-items-center justify-content-between">
                      <a class="meta fw500 text-start">Location<br><span class="fz14 fw400">London</span></a>
                      <a class="meta fw500 text-start">Rate<br><span class="fz14 fw400">$90 / hr</span></a>
                      <a class="meta fw500 text-start">Job Success<br><span class="fz14 fw400">%98</span></a>
                    </div>
                    <div class="d-grid mt15">
                      <a href="page-freelancer-single.html" class="ud-btn btn-light-thm">View Profile<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="mbp_pagination mt30 text-center">
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
                  <li class="page-item d-inline-block d-sm-none"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">...</a></li>
                  <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="#">20</a></li>
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