
<!DOCTYPE html>
<html lang="en">
    <!--Head Links-->
    @include('frontend.layout.head-links')
    <body>
    @include('frontend.layout.header-common')
                <div class="banner-home" style="background-image:url('assets/images/Banner\ image.png');background-size:cover">
    <div>
      <h1> Business Growth Delivered </h1>
      <div class="banner-para">
        <p>Looking for creative solutions for your business? Need to improve conversion rate? want to boost your
          business visibility? Don’t sweat it! Master Infotech is here to help.</p>
      </div>
      <a href="#contact-form"> Get in Touch </a>
    </div>

  </div>
  <main>
@include('frontend.layout.growth')
    <!-- platforms -->
    <section id="platforms">
      <div class="title">
        <h2>Our Proud <span>Recognitions</span></h2>
      </div>
      <div class="plat-forms">
        <div class="plat-cont">
          <div>
            <h2>Recognized by Clutch<br> as one of the<br> <span>Top 15 Branding</span> Companies in India</h2>
            <h3><span class="fa fa-star checked"></span> 4.9/5</h>
          </div>
          <div>
            <img src="{{('assets/images/clutch2.png')}}")}}">
          </div>

        </div>
        <div class="plat-list">
          <div>
            <div class="list-img">
              <div><img src="{{('assets/images/glassdoor.png')}}")}}"><img src="{{('assets/images/glassdoor-white.png')}}")}}"></div>
              <div><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
            </div>
            <div class="list-det">
              <ul>
                <li>“I’m utterly happy that I went with Master Infotech. The mobile app is exactly what we wanted and
                  our business badly needed. Don’t think twice about hiring them”.</li>

              </ul>
            </div>
          </div>
          <div>
            <div class="list-img">
              <div><img src="{{('assets/images/google.png')}}")}}"><img src="{{('assets/images/google-white.png')}}")}}"></div>
              <div><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
            </div>
            <div class="list-det">
              <ul>
                <li>“We needed something to differentiate our business from others. Master Infotech gave me a website
                  that reflects my business & that I’m proud to show off to my customers”. </li>
              </ul>
            </div>
          </div>
          <div>
            <div class="list-img">
              <div><img src="{{('assets/images/bark logo black.png')}}")}}"><img src="{{('assets/images/Bark Logo white.png')}}")}}"></div>
              <div><span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
            </div>
            <div class="list-det">
              <ul>
                <li>“Master Infotech did a fabulous job. They created a rich-featured eCommerce store for my business
                  that is absolutely beautiful and user-friendly”.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- indus-sec -->
    <section id="indus-sec">
      <div class="title">
        <h2>Helping <span>Industries</span> To Grow</h2>
      </div>
      <div class="">
        <div class="industry">
          <div class="indus-list">
            <!-- <a href="#" class="not-active"> -->
            <div class="content_img ">
              <img src="{{('assets/images/indus/realestate.png')}}">
              <div class="img-text">
                <img src="{{('assets/images/indus/real-icon.png')}}">
                <p>We serve the real estate industry by providing a quality platform for the exchange of property
                  information. We provide platforms that allow users to securely store and share their property
                  information with each other conveniently. </p>
              </div>
            </div>
            <p class="text">Real Estate</p>
            <!-- </a> -->
          </div>

          <div class="indus-list">
            <!-- <a href="" class="not-active"> -->
            <div class="content_img ">
              <img src="{{('assets/images/indus/education.png')}}">
              <div class="img-text">
                <img src="{{('assets/images/indus/education-icon.png')}}">
                <p>We are experts in the field of education and e-learning. We are specialized in developing custom-made
                  software for various educational institutions which helps you in managing your data, ensuring the
                  smooth running of your applications. </p>
              </div>
            </div>
            <p class="text">Education and E-learning</p>
            <!-- </a> -->
          </div>

          <div class="indus-list">
            <!-- <a href="" class="not-active"> -->
            <div class="content_img ">
              <img src="{{('assets/images/indus/retail.png')}}">
              <div class="img-text">
                <img src="{{('assets/images/indus/retail-icon.png')}}">
                <p>Master Infotech is a leading IT solution provider to the retail industry. Our team of experts. has
                  helped thousands of businesses across the globe to become more efficient, and effective We are always
                  looking for new ways to improve our clients' businesses.
                </p>
              </div>
            </div>

            <p class="text">Retail </p>
            <!-- </a> -->
          </div>
          <div class="indus-list">
            <!-- <a href="" class="not-active"> -->
            <div class="content_img ">
              <img src="{{('assets/images/indus/health.png')}}">
              <div class="img-text">
                <img src="{{('assets/images/indus/health-icon.png')}}">
                <p>We are passionate about helping our clients to enhance their work by providing the most effective and
                  up-to-date technology available. That is why we are so excited to serve the healthcare industry.
                </p>
              </div>
            </div>

            <p class="text">Healthcare </p>
            <!-- </a> -->
          </div>
          <div class="indus-list">
            <!-- <a href="" class="not-active"> -->
            <div class="content_img ">
              <img src="{{('assets/images/indus/healthcare.png')}}">
              <div class="img-text">
                <img src="{{('assets/images/fitness.png')}}">
                <p>Build an
                  eye-catching & user-friendly website for fitness enthusiasts and include
                  customized features in it. Activity tracking, health parameters, predictions,
                  and other features that will make your customers’ fitness journey a breeze.
                </p>
              </div>
            </div>

            <p class="text"> Fitness & Wellness </p>
            <!-- </a> -->
          </div>
          <div class="indus-list">
            <!-- <a href="" class="not-active"> -->
            <div class="content_img ">
              <img src="{{('assets/images/indus/food.png')}}">
              <div class="img-text">
                <img src="{{('assets/images/indus/food-icon.png')}}">
                <p>We serve a wide range of industries and we are a leading provider of solutions to this industry. We
                  work with you to understand your specific needs and offer a solution that will fit seamlessly into
                  your operations. </p>
              </div>
            </div>
            <p class="text">Food and Restaurant </p>
            <!-- </a> -->
          </div>
          <div class="indus-list">
            <!-- <a href="" class="not-active"> -->
            <div class="content_img ">
              <img src="{{('assets/images/indus/fintech.png')}}">
              <div class="img-text">
                <img src="{{('assets/images/indus/fintech-icon.png')}}">
                <p> Are you aware that the global internet population is expected to increase by 5.6 million by 2025. So
                  online market can be said as a proven method for all businesses to expand globally and give a good
                  start to your business. </p>
              </div>
            </div>
            <p class="text">Fintech </p>
            <!-- </a> -->
          </div>

          <div class="indus-list">
            <!-- <a href="" class="not-active"> -->
            <div class="content_img ">
              <img src="{{('assets/images/indus/logistic.png')}}">
              <div class="img-text">
                <img src="{{('assets/images/indus/logistick-icon.png')}}">
                <p>The global internet population is expected to increase by 5.6 million by 2025. So are you ready to
                  expand globally and give a good start to your business? </p>
              </div>
            </div>
            <p class="text">Logistics and Distribution </p>
            <!-- </a> -->
          </div>
        </div>
      </div>
    </section>

   @include('frontend.layout.portfolio')
    <!-- client-sec-->

    <section id="client-sec">
      <div class="client-section">
        <div class="title">
          <h2>Our <span>Clientele</span> & Partners</h2>
        </div>
        <div class="client-cont">
          <div class="client-slider">
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/motor-client.png')}}"></div>
                <h4>Motor Box</h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/growease-client.png')}}"></div>
                <h4>Growease</h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/travelfox-client.png')}}"></div>
                <h4>Travel Fox</h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/hangout-client.png')}}"></div>
                <h4>Hangout Coffee</h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/west-client.png')}}"></div>
                <h4> Westgate </h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/rebel-client.png')}}"></div>
                <h4> Rebel</h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/cyfertech.png')}}"></div>
                <h4> Cyfertech </h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/login.jpg')}}"></div>
                <h4>LogINN </h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/tricky-path.png')}}"></div>
                <h4>TrickyPath</h4>
              </div>
            </div>
            <div>
              <div class="client-part">
                <div class="cl-img"><img src="{{('assets/images/incredimate-ct.png')}}"></div>
                <h4>Incredimate</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- platforms -->
    <section id="magnify">
      <div class="plat-forms plat-form2">
        <div class="plat-cont">
          <h2>Magnify Your Success With Great expertise Master Infotech</h2>
          <h4>Top Software development company</h4>

        </div>
        <div class="mag-cont">
          <div>
            <img src="{{('assets/images/mag-1.svg')}}">
            <h2><span>23+</span></h2>
            <h3>App development</h3>
          </div>
          <div>
            <img src="{{('assets/images/mag-2.svg')}}">
            <h2><span>11</span></h2>
            <h3>Blockchain Project</h3>
          </div>
          <div>
            <img src="{{('assets/images/mag-3.svg')}}">
            <h2><span>30</span></h2>
            <h3>Clients</h3>
          </div>
          <div>
            <img src="{{('assets/images/mag-4.svg')}}">
            <h2><span>8</span></h2>
            <h3>Years Experience</h3>
          </div>
        </div>
      </div>
    </section>

  @include('frontend.layout.team')

    <section id="start-grow">
      <div class="ele-left"> <img src="{{('assets/images/img/circle-left.png')}}"></div>
      <div class="ele-right"><img src="{{('assets/images/img/circle-right.png')}}"></div>
      <div class="st-growing growing-2">
        <div>
          <h2>Let Master Infotech take care of your <span> Business.</span></h2>

          <p>We understand the complexity of running a business. Have a word with our qualified business consultants and
            know how to manage your business online..</p>
          <a href="#contact-form">Book your Free Consultation </a>
        </div>
        <div class="blank"></div>
        <div class="ele-go"> <img src="{{('assets/images/img/lets-go-2.png')}}"></div>
      </div>
    </section>
    <!-- testimonial -->
 @include('frontend.layout.testimonials')
 @include('frontend.layout.technologies')


    <section id="blogs">
      <div class="">
        
      </div>

    </section>





    <section>
      <div class="ele-left"> <img src="{{('assets/images/img/circle-left.png')}}"></div>

      <div class="st-growing">
        <div>
          <h2>Get an Instant <br><span>Website Audit</span></h2>
          <p>Tired of long PDF files? Are you a quick action taker? Get in touch with our experts & learn why your
            business website is lacking.</p>
          <a href="#contact-form"> Get in Touch </a>
        </div>
        <div class="blank"></div>
        <div class="ele-go"> <img src="{{('assets/images/img/start-grow.png')}}"></div>
      </div>
    </section>



  </main>

                @include('frontend.layout.footer')
        <!--Foot Links-->
        @include('frontend.layout.foot-links')
        @include('frontend.layout.script')

    </body>
</html>

