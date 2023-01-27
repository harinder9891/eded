<div class="footer-form" id="contact-form">
      <div>
        <div>
          <img src="{{asset('assets/images/Contact-info.png')}}">
        </div>
        <div class="form-ft">
          <h2> Set and accomplish your <br>Dream goal with<span> Master Infotech</span></h2>
          <form>
            <div class="form-input">
              <div class="from-feild">
                <div class="from-feild-inner">
                  <label>Name:</label>
                  <input type="text" placeholder="Name" name="name" id="new_name"><br>
                  <span id="new_error_name"></span>
                </div>
                <div class="from-feild-inner">
                  <label>e-mail:</label>
                  <input type="email" placeholder="Mail" name="email" id="new_email"><br>
                  <span id="new_error_email"></span>
                </div>
                <div class="from-feild-inner">
                  <label>Phone No:</label>
                  <input type="tel" id="new_phone" name="phone" placeholder="1234567890"><br>
                  <span id="new_error-msg" class="country-code-hide"></span>
                  <span id="new_error_phone"></span>
                </div>
        
                <div class="from-feild-inner">
                  <label>Select Service:</label>
                  <div class="wrap-drop" id="new_service">

                    <span>Select services</span>
                    <ul class="drop">
                      <!-- <li class="selected"><a>Select services</a></li> -->
                      <li value="Blockchain"><a>Blockchain</a></li>
                      <li value="AI and ML"><a>AI and ML</a></li>
                      <li value="Digital Marketing"><a>Digital Marketing</a></li>
                      <li value="UX/UI"><a>UX/UI</a></li>
                      <li value="Mobile App Development"><a>Mobile App Development</a></li>
                      <li value="Web Development"><a>Web Development</a></li>
                      <li value="Branding"><a>Branding</a></li>
                      <li value="E-Commerce"><a>E-commerce</a></li>
                      <li value="Training and Internship"><a>Training and Internship</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <div class="form-submit">
              <button class="main-btn radius-class read-btn" type="button" id="btn-sub"
                onclick="validateForm()">Submit</button>
            </div>
          </form>
        </div>

      </div>
    </div>