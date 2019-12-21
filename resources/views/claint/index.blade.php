<!DOCTYPE html>
<html lang="en">
<head>
<title>Library</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('user/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('user/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/responsive.css')}}">
</head>
<body>

<div class="super_container">

  <!-- Header -->

  <header class="header d-flex flex-row">
    <div class="header_content d-flex flex-row align-items-center">
      <!-- Logo -->
      <div class="logo_container">
        <div class="logo">
          <img src="{{asset('user/images/logo.png')}}" alt="">
          <span>Library</span>
        </div>
      </div>

      <!-- Main Navigation -->
      <nav class="main_nav_container">
        <div class="main_nav">
          <ul class="main_nav_list">
            <li class="main_nav_item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catagory
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach(App\Catagory::orderBy('id','asc')->get() as $catagory)
                <a class="dropdown-item" href="{!! route('catagories.show',$catagory->id) !!}">{{$catagory->name}}</a>
                @endforeach
              </div>
            </li>
            <li class="main_nav_item"><a href="#">Books</a></li>
            <li class="main_nav_item"><a href="courses.html">For Order</a></li>
            <li class="main_nav_item"><a href="elements.html">Contact Us</a></li>
            <!-- <li class="main_nav_item"><a href="news.html">news</a></li>
            <li class="main_nav_item"><a href="contact.html">contact</a></li> -->
          </ul>
        </div>
      </nav>
    </div>
    <div class="header_side d-flex flex-row justify-content-center align-items-center">
     <!--  <img src="{{asset('user/images/phone-call.svg')}}" alt="">
      <span>01845702501</span> -->
      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <!--  {{ Auth::user()->name }}  --><span class="caret"> Logout</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                             </div>

    <!-- Hamburger -->
    <div class="hamburger_container">
      <i class="fas fa-bars trans_200"></i>
    </div>

  </header>
  
  <!-- Menu -->
  <div class="menu_container menu_mm">

    <!-- Menu Close Button -->
    <div class="menu_close_container">
      <div class="menu_close"></div>
    </div>

    <!-- Menu Items -->
    <div class="menu_inner menu_mm">
      <div class="menu menu_mm">
        <ul class="menu_list menu_mm">
          <li class="menu_item menu_mm"><a href="#">Category</a></li>
          <li class="menu_item menu_mm"><a href="#">Books</a></li>
          <li class="menu_item menu_mm"><a href="#">For Order</a></li>
          <li class="menu_item menu_mm"><a href="#">Contact Us</a></li>
          <!-- <li class="menu_item menu_mm"><a href="#">News</a></li>
          <li class="menu_item menu_mm"><a href="#">Contact</a></li> -->
        </ul>

        <!-- Menu Social -->
        
        <div class="menu_social_container menu_mm">
          <ul class="menu_social menu_mm">
            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>

        <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
      </div>

    </div>

  </div>
  
  <!-- Home -->

  <div class="home">

    <!-- Hero Slider -->
    <div class="hero_slider_container">
      <div class="hero_slider owl-carousel">
        
        <!-- Hero Slide -->
        <div class="hero_slide">
          <div class="hero_slide_background" style="background-image:url({{asset('user/images/slider_background.jpg')}})"></div>
          <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
            <div class="hero_slide_content text-center">
              <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
            </div>
          </div>
        </div>
        
        <!-- Hero Slide -->
        <div class="hero_slide">
          <div class="hero_slide_background" style="background-image:url({{asset('user/images/slider_background.jpg')}})"></div>
          <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
            <div class="hero_slide_content text-center">
              <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
            </div>
          </div>
        </div>
        
        <!-- Hero Slide -->
        <div class="hero_slide">
          <div class="hero_slide_background" style="background-image:url({{asset('user/images/slider_background.jpg)')}}"></div>
          <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
            <div class="hero_slide_content text-center">
              <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Get your <span>Education</span> today!</h1>
            </div>
          </div>
        </div>

      </div>

      <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
      <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
    </div>

  </div>


    <div class="container">
         @yield('content')
    </div>

  <!-- Footer -->

  <footer class="footer">
    <div class="container">
      
      <!-- Newsletter -->

      <div class="newsletter">
        <div class="row">
          <div class="col">
            <div class="section_title text-center">
              <h1>Subscribe to newsletter</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col text-center">
            <div class="newsletter_form_container mx-auto">
              <form action="post">
                <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                  <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
                  <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      <!-- Footer Content -->

      <div class="footer_content">
        <div class="row">

          <!-- Footer Column - About -->
          <div class="col-lg-3 footer_col">

            <!-- Logo -->
            <div class="logo_container">
              <div class="logo">
                <img src="images/logo.png" alt="">
                <span>course</span>
              </div>
            </div>

            <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

          </div>

          <!-- Footer Column - Menu -->

          <div class="col-lg-3 footer_col">
            <div class="footer_column_title">Menu</div>
            <div class="footer_column_content">
              <ul>
                <li class="footer_list_item"><a href="#">Home</a></li>
                <li class="footer_list_item"><a href="#">About Us</a></li>
                <li class="footer_list_item"><a href="courses.html">Courses</a></li>
                <li class="footer_list_item"><a href="news.html">News</a></li>
                <li class="footer_list_item"><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>

          <!-- Footer Column - Usefull Links -->

          <div class="col-lg-3 footer_col">
            <div class="footer_column_title">Usefull Links</div>
            <div class="footer_column_content">
              <ul>
                <li class="footer_list_item"><a href="#">Testimonials</a></li>
                <li class="footer_list_item"><a href="#">FAQ</a></li>
                <li class="footer_list_item"><a href="#">Community</a></li>
                <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                <li class="footer_list_item"><a href="#">Tuitions</a></li>
              </ul>
            </div>
          </div>

          <!-- Footer Column - Contact -->

          <div class="col-lg-3 footer_col">
            <div class="footer_column_title">Contact</div>
            <div class="footer_column_content">
              <ul>
                <li class="footer_contact_item">
                  <div class="footer_contact_icon">
                    <img src="{{asset('user/images/placeholder.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>
                  Blvd Libertad, 34 m05200 Arévalo
                </li>
                <li class="footer_contact_item">
                  <div class="footer_contact_icon">
                    <img src="{{asset('user/images/smartphone.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>
                  0034 37483 2445 322
                </li>
                <li class="footer_contact_item">
                  <div class="footer_contact_icon">
                    <img src="{{asset('user/images/envelope.svg')}}" alt="https://www.flaticon.com/authors/lucy-g">
                  </div>hello@company.com
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>

    </div>
  </footer>

</div>
js
<script src="{{asset('user/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('user/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('user/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('user/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('user/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('user/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('user/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('user/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('user/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('user/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('user/plugins/easing/easing.js')}}"></script>
<script src="{{asset('user/js/custom.js')}}"></script>

</body>
</html>
