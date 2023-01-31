@extends('frontend.layout.app')
@section('meta_keywords', 'website development company,web development services,best website development company,website development company near me')

@section('meta_description', 'Looking for website development services company? Contact Master Infotech +91 74000 18000  a one-stop-shop for all website development services.')
@section('meta_tag','Best Website Development Services Company | Master Infotech')
@section('meta_extra_seo','')
@section('content')
<main>
      <section class="service_baner brand-identity" style="background-image:url('assets/images/brand-identity/chess.jpg'); background-size: cover;" alt=" Brand Identity Design Company">
        <div class="service_block brand-identity">
            <div>
              <h1>Brand Identity Design for Brands of <span>Tomorrow!</span>
                </h1>
                <p>The new era begins with us</p>
                <a href="#contact-form" class="black_br_btn">Talk To Us!</a>
            </div>
            <div>
                <!-- <img src="assets/images/brand-identity/chess.jpg"  loading="lazy" alt=" Brand Identity Design Company"> -->
            </div>
        </div>
    </section>
    <section class="brandadd-section">
      <div class="title"><h2>Our 7 Components of Building a <span>Strong Brand Identity</span></h2></div> 
      <div class="brandadd-points">
          <div>
              <span>01</span>
              <h3>Brand Positioning</h3>
              <p>The first and foremost step is to position your brand. Here we analyze and decide upon the factors such as brand purpose and vision. Brand positioning empowers you to decide upon what shall be delivered to the users and customers and why it is better than your customers. The purpose is determined by finding the common ground between what your company does best and what is going around in the market culture.</p>
          </div>
          <div>
              <span>02</span>
              <h3>Market Research</h3>
              <p>Market research helps us in understanding the market scenarios where your brand will be placed. It is important to have a clear picture of certain factors such as markets trends and user pain points which makes market research one of the most vital components in building your brand. Research is usually conducted by interviewing people, phone calls, and conducting surveys. This helps you in understanding the details of your target customers such as behaviors, problems, and personal traits.</p>
          </div>
          <div>
              <span>03</span>
              <h3>Brand Personality</h3>
              <p>Ask yourself ‘what kind of a person would your brand be if it were a person?’. Users and potential customers love a brand whose personality they can relate to. An important aspect of establishing a brand personality will give you an idea about how you must communicate with your users. We all know that human beings are emotional animals and brand personality helps in catering to this emotional aspect of users and customers.
              </p>
          </div>
          <div>
              <span>04</span>
              <h3>Professional Typography</h3>
              <p>Typography holds the power to make your brand consistent. It is crucial to have a single and simplistic typeface that will represent your brand essence. Determine font sizes and line length to further stay consistent. The typography will have to be in harmony with your color palette and logo design.
              </p>
          </div>
          <div>
              <span>05</span>
              <h3>Memorable Logo/ Symbol</h3>
              <p>The logo is the central figure of your brand identity. The logo is like the face of your company it will be almost impossible to build a memorable brand. Our Logo Design Services are tailor-made to facilitate brand recognition and to create a logo that is memorable. We make sure that your logo is simple, scalable, and unique for these factors play an important role to make a logo that creates an impact in the minds of users.
              </p>
          </div>
          <div>
              <span>06</span>
              <h3>Attractive Color Palette </h3>
              <p>After Typography and logo comes color and it is something that holds big psychological brand value. Colors are highly recognizable when it comes to brand identity, try to think of red of coca-cola or green of Starbucks. The picture of the brand appears in your mind instantly and this is done through color psychology.
              </p>
          </div>
          <div>
              <span>07</span>
              <h3>Brand Assets and Graphics </h3>
              <p>Once everything has been put in line, it is time to build a brand style guide and create brand assets and graphics. In a world driven by technology and the internet, it is important that your graphics and brand assets like business cards, brochures, e-books etc. fall in sync and are aligned to produce a consistent brand identity. 
              </p>
          </div>
      </div>
  </section>
  <section class="imp-elements">
    <div class="title"><h2>3 Important Elements Of <span>Brand Identity Design</span> </h2></div>
    <div class="imp-elements-points">
        <div>
            <img src="{{asset('assets/images/brand-identity/hand.png')}}" loading="lazy" alt="Hand">
            <h3>Brand values</h3>
            <p>Defining why your brand exists and what it stands for.</p>
        </div>
        <div>
            <img src="{{asset('assets/images/brand-identity/target.png')}}" loading="lazy" alt="Target">
            <h3>Brand Position</h3>
            <p>Position your brand in accordance with your target audience.</p>
        </div>
        <div>
            <img src="{{asset('assets/images/brand-identity/brandtag.png')}}" loading="lazy" alt="Brand tag">
            <h3>Visual brand Components</h3>
            <p>The design elements of your brand which will boost your visual authority.</p>
        </div>
    </div>
  </section>
  <section class="laptopguy" style="background-image:url('assets/images/brand-identity/laptopguy.png')">
		<!--<img class="laptopguy" loading="lazy" src="/landingpages/images/laptopguy.png" alt="laptop guy"> -->
     
        <div>
            <h3>Want to know more About Brand Identity Design?</h3>
            <p>Get Our <span>Free Guide</span></p>
          <form id ="resetform">
					<div>
						<input type="email" name="emails" id="get_brand_email" placeholder="Please Enter E-mail" required/> <br>
						<span id="error_get_brand_email"></span>
						<input type="submit" id="submit-form" value="submit" hidden/>
					</div>
					<div >
						<!-- <input type="tel" name="phone" id="get_brand_phone" placeholder="" /> -->
            <input type="tel" id="new_phone" name="phone" placeholder="1234567890" ><br>
            <span id="new_error-msg" class="country-code-hide"></span>
            <span id="new_error_phone"></span>
					</div>
					<div>
						<span id="brand_pdfcaptcha" ></span>
						<span id="error_brand_pdfcaptcha"></span>
					</div>		
					<br>				
				</form>
				<a href="" class="black_br_btn" id="download-brand-pdf" onclick="val_brand_pdf();">Download Free PDF</a>    
        </div>       
  </section>
  <section class="brandsells">
      <h3>Brand Identity That Sells! </h3>
      <p>Presenting a brand consistently across all platforms can increase revenue by up to 43%!</p>
  </section>
  <section class="ourdesign">
    <div>
        <h3>Our Design Values separate us from the crowd!</h3>
        <ul>
            <li>Aesthetic Sense of Creativity</li>
            <li>Fresh ideas for a unique approach</li>
            <li>Embracing Simplicity</li>
        </ul>
        <button   class="join2-button"><a href="#contact-form">Book a Call With Our Expert</a></button>
    </div>
    <div>
        <img loading="lazy" src="{{asset('assets/images/brand-identity/paperboat.jpg')}}" alt="Brand Design Services">
    </div>
  </section>
  <section class="designmeetsart">
    <div>
        <img loading="lazy" src="{{asset('assets/images/brand-identity/monalisa.jpg')}}" alt="Brand Identity Design">
    </div>
    <div>
        <h3>Design meets  ART.</h3>
        <p>We owe it to our design artists who are ever-ready to take up new design challenges. Our passionate designers have helped many companies and businesses to transform into impactful brands.
        </p>
        <button  class="join2-button" ><a href="#contact-form">Book a Call With Our Expert</a></button>
    </div>
  </section>
  <section class="brands-built">
    <div class="title"><h2><span>Brands</span> That We've Built</h2></div>
    <div class="ourwork">
        
      <div>
          <div class="ourwork-cont">
              <div class="ourwork-content">
                  <h3>Naksha Architechts</h3>
                  <p>Naksha Architechts is a renowned firm, providing interior and exterior design solutions. Naksha Architechts needed a full-fledged brand identity with their customer base spreading middle to the elite class. We designed their logo in a linear style which envelops the shape of a house merging to the brand name initial. We chose teal blue and white as their brand to symbolize ‘infinity’ which is one of their brand value.</p>
                </div>
              <div><img src="{{asset('assets/images/brand-identity/van.png')}}" loading="lazy" alt="Logo and Brand Identity Design Company"></div>
          </div>
          <div class="ourwork-cont cont-reverse">
              <div class="ourwork-content">
                  <h3>Rebel Apparel</h3>
                  <p>Rebel Apparel is a 25-year-old, fully ‘made in Canada’ clothing brand. They came to for a major rebrand right from their logo to website and packing design. We created their logo using their letter initials R and A in a linear style to create logo for Rebel Apparel as well-known and famous clothing brands in casual lines. We further kept an overall minimalistic approach to all their assets and designs. A special focus was laid on creating their package design to give customers an uplifting feel.</p>
              </div>
              <div><img src="{{asset('assets/images/brand-identity/Rebel-bag.png')}}" loading="lazy" alt="Logo Design Company"></div>
          </div>
          <div class="ourwork-cont">
              <div class="ourwork-content">
                  <h3>Hangout Coffee</h3>
                  <p>Hangout Coffee prides itself on delivering top-class coffee in Mumbai. They believe in touching the hearts of people with every delicious bean they craft. We Implated a full-scale branding strategy and identity design to aggressively create brand hype in a competitive market. We used earth colors in all their designs to maintain and embrace a constant emotion of nature in the product’s experience.</p>
              </div>
              <div><img src="{{asset('assets/images/brand-identity/paper-new.png')}}" loading="lazy" alt="Brand Identity Design Services"></div>
          </div>
      </div>
  </div>

  </section>

        
    </main>

    @endsection