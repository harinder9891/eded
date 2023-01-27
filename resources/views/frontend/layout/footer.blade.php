       <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start SITE FOOTER
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        
  <footer>
   @include('frontend.layout.footform')
    <div class="footer-sec-cont">
      <div class="footer-sec">
        <div>
          <ul>
            <li>Contact</li>
            <li><a href="tel:+91 74000 18000">+91 74000 18000</a></li>
            <li><a href="tel:+1 (718) 514-2776">+(718) 514-2776</a></li>
            <li><a href="mailto:info@masterinfotech.com">Info@masterinfotech.com</a></li>
          </ul>
          <ul>
            <li>INDIA</li>
            <li>Plot no 169 Sector 82 JLPL, Mohali Punjab, INDIA</li>
          </ul>
          <ul>
            <li>USA</li>
            <li>3rd floor, 30 W 47th St #301, Etech7, Newyork, UNITED STATES</li>
          </ul>
        </div>
        <div>
          <ul>
            <li>Menu</li>
            <li><a href="{{url('home')}}">Home</a></li>
            <li><a href="{{url('portfolio')}}">Portfolio</a></li>
            <li><a href="{{url('services')}}">Our Services</a></li>
            <li><a href="{{url('blog')}}">Blogs</a></li>
            <li><a href="{{url('career')}}">Careers</a></li>
            <li><a href="{{url('contact-us')}}">Get a Quote</a></li>
            <li><a href="{{url('contact-us')}}">Contact</a></li>
          </ul>
        </div>
        <div>
          <ul>
            <ul>
              <li>Services</li>
              <li><a href="">Blockchain </a></li>
              <li><a href="">Mobile App Development</a></li>
              <li><a href="{{url('web-d')}}">Website Development</a></li>
              <li><a href="">UI/Ux Design</a></li>
              <li><a href="">E-Commerce</a></li>
              <li><a href="">Digital Marketing</a></li>
              <li><a href="">Business Consulation</a></li>
              <li><a href="">Brand Identity Design</a></li>
              <li><a href="">Training and Internship</a></li>
            </ul>
          </ul>
        </div>
        <div class="follow">
          <ul>
            <li>About</li>
            <li><a href="{{url('who-we-are')}}">Who we are</a></li>
            <li><a href="{{url('who-we-are#ourvision')}}">Our Vision</a></li>
            <li><a href="{{url('who-we-are#ourvalue')}}">Our Value</a></li>
            <li><a href="{{url('write-for-us')}}">Write for Us</a></li>
          </ul>
          <ul>
            <li>Follow us</li>
            <li>
              <ul>
                <li><a href="https://www.facebook.com/masterinfotech/"><img src="{{asset('assets/images/facebook-ftr.png')}}"></a>
                </li>
                <li><a href="https://twitter.com/masterinfotech_"><img src="{{asset('assets/images/twitter-ftr.png')}}"></a></li>
                <li><a href="https://www.instagram.com/masterinfotechofficial/"><img
                      src="{{asset('assets/images/instagram-ftr.png')}}"></a></li>
                <li><a href="https://www.linkedin.com/company/master-infotechofficial/"><img
                      src="{{asset('assets/images/linkedin-ftr.png')}}"></a></li>
                <li><a
                    href="https://www.behance.net/ab941400?tracking_source=search_users_recommended%7Cmaster%20infotech"><img
                      src="{{asset('assets/images/behance-ftr.png')}}"></a></li>
                <li><a href="https://dribbble.com/MasterInfotechOfficial"><img src="{{asset('assets/images/dribble-ftr.png')}}"></a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="newsletter-div">
          <ul>
            <li>Newsletter</li>
            <li>Signup for Freshly Brewed Update</li>
            <li>
              <div class="news-input"><input type="text" placeholder="Your email address">
                <button class=""> Subscribe</button>
              </div>
            </li>
          </ul>
          <div>
            <img src="{{asset('assets/images/clutch2.png')}}">
          </div>
        </div>
      </div>
      <div class="copyright">
        <div> © Copyrights 20221-2022. <a href="#"> Masterinfotech </a> | All Rights Reserved </div>

        <a href="{{url('privacy-policy')}}">Privacy Policy</a>
        <a href="{{url('terms-condition')}}">Term and Condition</a>
      </div>
    </div>
  </footer>


        <!--~./ end site footer ~-->
