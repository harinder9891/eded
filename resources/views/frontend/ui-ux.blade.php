@extends('frontend.layout.app')
@section('meta_keywords', 'website development company,web development services,best website development company,website development company near me')

@section('meta_description', 'Looking for website development services company? Contact Master Infotech +91 74000 18000  a one-stop-shop for all website development services.')
@section('meta_tag','Best Website Development Services Company | Master Infotech')
@section('meta_extra_seo','')
@section('content')

<main>
        <section class="service_baner ui-ux-baner">
            <div class="service_block">
                <div>
                    <h1>UI/UX Design <span>Services</span></h1>
                    <p>Our priority is always to create an aesthetic and robust UI/UX Design loaded with user- first values.
                       We offer a unique blend of advanced and traditional approaches to design. Our designs are aimed at maximizing creativity and innovation 
                       to enhance the overall experience of the user.</p>
                </div>
                <div>
                    <img src="{{asset('assets/images/ui-ux//UIUX-Design-Services.webp')}}" alt="UI/UX Design Services">
                </div>
            </div>
        </section>

        <section class="ui-ux-section">
          <div class="title"><h2 >We offer a wide range of <span>UI/UX design</span> services which includes:</h2></div>
          <div class="digital-marketing web-dev-list ">
          <div class="web-d-type digital-web">
            <img class="img-web digi-img" src="{{asset('assets/images/ui-ux/branding-design.webp')}}"  alt="Branding design">
            <div>
                <h2>Branding design</h2>
                <p>Our overall branding design eases out your way to attain superior visual recognition for your brand.</p>
            </div>
          </div>
          <div class="web-d-type digital-web">
            <img class="img-web digi-img" src="{{asset('assets/images/ui-ux/Mobile App UIUX.webp')}}"  alt="Mobile App UI/UX">
            <div>
                <h2>Mobile App UI/UX</h2>
                <p>With help of our exceptional UX/UI designers we build effective mobile interfaces for mobile applications, creating interactive experiences.</p>
            </div>
          </div>
          <div class="web-d-type digital-web">
            <img class="img-web digi-img" src="{{asset('assets/images/ui-ux/Cross-platform-experiences-design.webp')}}" alt="Cross-platform experiences design">
            <div>
                <h2>Cross-platform experiences design</h2>
                <p>
                  Each platform has its own strengths. We specialize in integrating design experiences across multiple platforms to facilitate higher growth.</p>
            </div>
          </div>
          <div class="web-d-type digital-web">
            <img class="img-web digi-img" src="{{asset('assets/images/ui-ux/uiuxconsulting.webp')}}"  alt="UI and UX consulting">
            <div>
                <h2> UI and UX consulting</h2>
                <p>
                  Our in-house team of specialist designers helps you figure out the best possible rhythm, theme, and plan of UI and UX design meeting your requirements.</p>
            </div>
          </div>
          <div class="web-d-type digital-web">
            <img class="img-web digi-img" src="{{asset('assets/images/ui-ux/promotional-designs.webp')}}" alt="Promotional designs">
            <div>
                <h2>Promotional designs</h2>
                <p>
                  Our promotional designs services help your brand connect with your customers through eye-catching and attractive visuals.</p>
            </div>
          </div>
        </div>
        </section>
        <section class="design-process">
              <div>
                <div class="title"> <h2 >Our <span>Design</span> Process</h2></div>
                <div class="box-top">
                  <div class="box-top-left" >
                    <strong>01</strong>
                    <div class="box-overlay">
                      <h3>Research</h3>
                      <p>Understanding needs and vision, through series of meetings to figure out a basic plan for an efficient solution</p>
                    </div>
                  </div>
                  <div class="box-top-right" >
                    <img src="{{asset('assets/images/ui-ux/research.webp')}}" class="img-responsive ux4img" alt="Our Design Process">
                  </div>
                </div>
                <div class="">
                  <img src="{{asset('assets/images/ui-ux/dottedline2.png')}}" class="img-responsive dotted-line " alt="dotted-line">
                </div>
                <div class="box-bottom colm-reverse">
                  <div class="box-bt-left" >
                  <img src="{{asset('assets/images/ui-ux/moodboards.webp')}}" class="img-responsive ux4img" alt="Our Design Process">
                  </div>
                  <div class="box-top-left" >
                    <strong>02</strong>
                    <div class="box-overlay">
                      <h3>Moodboards</h3>
                      <p>A collection of ideas, fonts, colors, and themes of the project and arrangement of a basic concept.</p>
                    </div>
                  </div>
                </div>
                <div class="">
                  <img src="{{asset('assets/images/ui-ux/dottedline1.png')}}" class="img-responsive dotted-line" alt="Our Design Process">
                </div>
                <div class="box-top">
                  <div class="box-top-left" >
                    <strong>03</strong>
                    <div class="box-overlay">
                      <h3>Storyboarding</h3>
                      <p>Defining the final use cases in accordance with the user’s experience and interaction with the product.</p>
                    </div>
                  </div>
                  <div class="box-top-right" >
                    <img src="{{asset('assets/images/ui-ux/storyboarding.webp')}}" class="img-responsive ux4img" alt="Our Design Process">
                  </div>
                </div>
                <div class="">
                  <img src="{{asset('assets/images/ui-ux/dottedline2.png')}}" class="img-responsive dotted-line" alt="dotted-line-2">
                </div>
                <div class="box-bottom colm-reverse">
                  <div class="box-bt-left" >
                  <img src="{{asset('assets/images/ui-ux/sketching.webp')}}" class="img-responsive ux4img" alt="Our Design Process">
                  </div>
                  <div class="box-top-left" data-aos="fade-right" data-aos-duration="1500">
                    <strong>04</strong>
                    <div class="box-overlay">
                      <h3>Sketching</h3>
                      <p>Pencil sketches to decide on the overall feel and layout of the design. Sketches of different screens under various scenarios.</p>
                    </div>
    
                  </div>
                </div>
                <div class="">
                  <img src="{{asset('assets/images/ui-ux/dottedline1.png')}}" class="img-responsive dotted-line" alt="Our Design Process">
                </div>
                <div class="box-top">
                  <div class="box-top-left" >
                    <strong>05</strong>
                    <div class="box-overlay">
                      <h3>Wireframes</h3>
                      <p>A design to take you through the product without color, pictures, and fonts with designation click-on actions.</p>
                    </div>
    
                  </div>
                  <div class="box-top-right">
                    <img src="{{asset('assets/images/ui-ux/wireframes.webp')}}" class="img-responsive ux4img" alt="Our Design Process">
                  </div>
                </div>
                <div class="">
                  <img src="{{asset('assets/images/ui-ux/dottedline2.png')}}" class="img-responsive dotted-line" alt="dotted-line-4">
                </div>
                <div class="box-bottom colm-reverse">
                  <div class="box-bt-left" >
                  <img src="{{asset('assets/images/ui-ux/visual-design.webp')}}" class="img-responsive ux4img" alt="Our Design Process">
                  </div>
                  <div class="box-top-left" >
                    <strong>06</strong>
                    <div class="box-overlay">
                      <h3>Visual Design</h3>
                      <p>A final design of the product with finalized visual design elements.</p>
                    </div>
                  </div>
                </div> 
              </div>
        </section>
        <section class="tech-stack">
              <div class="">
                  <div class="title"><h2>Our <span>Tech</span> Stack</h2></div>
                    <div class="tech-stack-logo">
                  
                    <span><img src="{{asset('assets/images/ui-ux/01.png')}}" class="img-responsive icons" alt="Ps"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/02.png')}}" class="img-responsive icons" alt="Ai"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/03.png')}}" class="img-responsive icons" alt="Xd"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/04.png')}}" class="img-responsive icons" alt="Pr"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/05.png')}}" class="img-responsive icons" alt="Ae"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/06.png')}}" class="img-responsive icons" alt="Fe"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/07.png')}}" class="img-responsive icons" alt="HTML"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/08.png')}}" class="img-responsive icons" alt="CSS"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/09.png')}}" class="img-responsive icons" alt="In"></span>
                  
                    <span><img src="{{asset('assets/images/ui-ux/10.png')}}" class="img-responsive icons" alt="Di"></span>
                    </div>
              </div>
            
        
        </section>
    </main>

 
@endsection