@extends('layouts.master')

@include('partials.header')

@section('content')
<section class="our-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">Log In</h2>
              <p class="paragraph">It's time to find something to work in.</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInRight" data-wow-delay="300ms">
          <div class="col-xl-6 mx-auto">
            <div class="log-reg-form search-modal form-style1 bgc-white p50 p30-sm default-box-shadow1 bdrs12">
              <div class="mb30">
                <h4>We're glad to see you again!</h4>
                <p class="text">Don't have an account? <a href="register" class="text-thm">Sign Up!</a></p>
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf   
                    <div class="mb20">
                        <x-input-label class="form-label fw600 dark-color" for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="example@mail.com"/>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />    
                    </div>
                    <div class="mb15">
                    <x-input-label class="form-label fw600 dark-color" for="password" :value="__('Password')" />
                    <x-text-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" placeholder="•••••••"/>

                    <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                    </div>
                    <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb20">
                    </div>
                    <div class="d-grid mb20">

                    <x-primary-button class="ud-btn btn-thm">
                    {{ __('Log in') }} <i class="fal fa-arrow-right-long"></i>
                    </x-primary-button>
                        <!---<button class="ud-btn btn-thm" type="button">Log In <i class="fal fa-arrow-right-long"></i></button>--->
                    </div>
                    <div class="hr_content mb20"><hr><span class="hr_top_text">OR</span></div>
                    <div class="d-grid mb20">
                    <a class="ud-btn btn-google fz14 fw400 mb-2 mb-md-0" type="button" href="/auth/redirect"><i class="fab fa-github"></i> Continue with Github</a>
                    </div>
              </form>
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
                <a href="">Press &amp; News</a>
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
                <li><a href="">Help &amp; Support</a></li>
                <li><a href="">Trust &amp; Safety</a></li>
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
<!-- Wrapper End --> 
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/ace-responsive-menu.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom script for all pages -->
<script src="js/script.js"></script>
    </section>
@endsection