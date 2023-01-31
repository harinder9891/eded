  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Site Header
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <header>
    <nav>
      <div class="logo">
        <a href="{{url('/')}}"><img src="{{asset('assets/images/Logo-new-MI-.gif')}}" alt="Logo Image"></a>
      </div>
      <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
      <ul class="nav-links">
        <li><a href="{{url('home')}}" class="{{ Request::is('/') ? 'active-nav' : '' }}">HOME</a></li>
        <li><a href="{{url('portfolio')}}" class="{{ Request::is('portfolio') ? 'active-nav' : '' }}">PORTFOLIO</a></li>
        <li><a href="{{url('blog')}}" class="{{ Request::is('blog') ? 'active-nav' : '' }}">BLOGS</a></li>
        <li>
          <label for="drop-1" class="toggle" id="clickme"> OUR SERVICES <i class="fa-regular fa-caret-down"></i></label>
          <a href="javascript:void(0);"> OUR SERVICES <i class="fa-regular fa-caret-down"></i></a>
          <input type="checkbox" id="drop-1" />
          <ul>
            <li> <a href="{{url('web-d')}}" >Website Developments</a></li>
            <li> <a href="{{url('mobile-app-development-services')}}" >Mobile App Development</a> </li>
            <li> <a href="{{url('ui-and-ux-design-services')}}" >UI/UX Design</a></li>
            <li> <a href="{{url('e-commerce-services')}}">E-commerce</a></li>
            <li> <a href="{{url('digital-marketing-services')}}" >Digital Marketing</a></li>
            <li> <a href="{{url('bussiness-consultation-services')}}" >Business Consultation</a></li>
            <li> <a href="{{url('training-and-internship')}}" >Training and Internship</a></li>
            <li> <a href="{{url('brand-identity-design')}}" >Brand Identity Design</a></li>
            <li> <a href="{{url('blockchain-development-services')}}" >Blockchain</a></li>
          </ul>
        </li>
        <li><a href="{{url('contact-us')}}"><button class="join2-button"> Get in touch </button></a></li>
      </ul>
    </nav>
  </header>
        <!--~~./ end site header ~~-->

        <!--~~~ Sticky Header ~~~-->
        <!--~./ end sticky header ~-->
