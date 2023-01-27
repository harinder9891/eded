

  <script>

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', () => {

  navLinks.classList.toggle("open");
  links.forEach(link => {
    // link.classList.toggle("fade");
  });


  hamburger.classList.toggle("toggle");
});
</script>
<script>
            
            filterSelection("all")
            function filterSelection(c) {
              var x, i;
              x = document.getElementsByClassName("column");
              if (c == "all") c = "";
              for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
              }
            }
            
            function w3AddClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
              }
            }
            
            function w3RemoveClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);     
                }
              }
              element.className = arr1.join(" ");
            }
            
            
            // Add active class to the current button (highlight it)
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
              btns[i].addEventListener("click", function(){
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
              });
            }
            </script>
                <!-----------------end of portfolio part----------------->
    
<script>

$(document).ready(function () {
  count = 1;

  $("#clickme").click(function () {
    var num = count++;

    if (num == 2) {
      window.location.href = "https://www.google.com";
    }
  });

});

var $bannerSlider = jQuery('.banner-slider');
var $bannerFirstSlide = $('div.banner-slide:first-child');

$bannerSlider.on('init', function (e, slick) {
  var $firstAnimatingElements = $bannerFirstSlide.find('[data-animation]');
  slideanimate($firstAnimatingElements);
});
$bannerSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
  var $animatingElements = $('div.slick-slide[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
  slideanimate($animatingElements);
});
$bannerSlider.slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: true,
  dots: false,
  swipe: true,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 4000,
        swipe: true,
      }
    }
  ]
});
function slideanimate(elements) {
  var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
  elements.each(function () {
    var $this = $(this);
    var $animationDelay = $this.data('delay');
    var $animationType = 'animated ' + $this.data('animation');
    $this.css({
      'animation-delay': $animationDelay,
      '-webkit-animation-delay': $animationDelay
    });
    $this.addClass($animationType).one(animationEndEvents, function () {
      $this.removeClass($animationType);
    });
  });
}

// data color
jQuery("[data-color]").each(function () {
  jQuery(this).css('color', jQuery(this).attr('data-color'));
});
// data background color
jQuery("[data-bgcolor]").each(function () {
  jQuery(this).css('background-color', jQuery(this).attr('data-bgcolor'));
});
</script>

<script type="text/javascript">
$(document).on('ready', function () {
  $('.industry').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1200,
    centerPadding: '20px',
    pauseOnDotsHover: true,
    arrows: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }]
  });

  $('.client-slider').slick({
    dots: false,
    infinite: true,
    speed: 500,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1200,
    pauseOnDotsHover: true,
    arrows: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }]
  });
});
</script>



<script>
function DropDown(el) {
this.dd = el;
this.placeholder = this.dd.children('span');
this.opts = this.dd.find('ul.drop li');
this.val = '';
this.index = -1;
this.initEvents();
}

DropDown.prototype = {
initEvents: function () {
    var obj = this;
    obj.dd.on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).toggleClass('active');
    });
    obj.opts.on('click', function () {
        var opt = $(this);
        obj.val = opt.text();
        obj.index = opt.index();
        obj.placeholder.text(obj.val);
        opt.siblings().removeClass('selected');
        opt.filter(':contains("' + obj.val + '")').addClass('selected');
    }).change();
},
getValue: function () {
    return this.val;
},
getIndex: function () {
    return this.index;
}
};

$(function () {
// create new variable for each menu
var dd1 = new DropDown($('#new_service'));
// var dd2 = new DropDown($('#other-gases'));
$(document).click(function () {
    // close menu on document click
    $('.wrap-drop').removeClass('active');
});
});
</script>
<script type="text/javascript">

let number = 0;
let footercode = 0;
  var input = document.querySelector("#new_phone"),errorMsg = document.querySelector("#new_error-msg");
//validMsg = document.querySelector("#valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
var iti = window.intlTelInput(input, {
separateDialCode: true,
initialCountry: "in",
geoIpLookup: function(callback) {
$.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
  var countryCode = (resp && resp.country) ? resp.country : "";
  callback(countryCode);
    
});
},
utilsScript: "https://masterinfotech.com/assets/js/utils.js?<?php echo  time() ;?>"
});


var reset = function() {
input.classList.remove("error-code");
errorMsg.innerHTML = "";
errorMsg.classList.add("country-code-hide");
// validMsg.classList.add("country-code-hide");
};

var isvalidformfooter = 0;
// on blur: validate
input.addEventListener('blur', function() {
reset();

if (input.value.trim()) {
if (iti.isValidNumber()) {
     number = iti.getSelectedCountryData();
      footercode = number['dialCode'];
    
    isvalidformfooter = 1;
 // validMsg.classList.remove("country-code-hide");
} else {
  input.classList.add("error-code");
  var errorCode = iti.getValidationError();
  errorMsg.innerHTML = errorMap[errorCode]; 
  errorMsg.classList.remove("country-code-hide");
}
}
});


// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);

var pagename = window.location.href ;	

function validateForm() {
        var valid = true;
        if (isFormValid()) {
            console.log('in if');
            var name = $("#new_name").val();
            var email = $("#new_email").val();
            var mob = $("#new_phone").val();
            var code = footercode;
            var phone = "+" + code + "-" + mob;
            var msg = 'null';
            //var service = 'null';
            var service = $("#new_service").val();
            var token = $("#token").val();
            
            //var budget = $("#budgetfoot").val();
            var budget = 'null';
            var values = {"_token":token,"name":name,"email":email,"phone":phone,"message":msg,"service":service,"budget":budget,"pagename":pagename};
            
            console.log(values);
            $.ajax({
            url: "{{url('savemaildata')}}",
            type: "post",
            data: values ,
            success: function (response) {
                //console.log(response);
               // sendmail(values);
            //$(".success").html("Thank you for your enquiry. We will revert you soon.");
            if(response ==1){
              window.location.href= "{{url('/thank-you')}}";
            }
          
            valid = false;
            },
            error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
            console.log(res);				
         // alert("Your form fields are validated. Now you can implement insert logic");
        }
        });
            
        }
 }

function isFormValid() {
    
    //Initially default values;
        errorMessage = "";
        $(".error").html("");
        var isValid = true;
        var regName = /^[a-zA-Z ]+$/;
        var regemail=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var regphn = /^[0-9]*$/;
        

        //Validate First name
        if ($("#new_name").val() == "") {
            $("#new_name").siblings("#new_error_name").html("Please Enter Your Name").css("color", "red");
            isValid = false;
        }
        else {
            if (!regName.test($("#new_name").val())) {
                $("#new_name").siblings("#new_error_name").html("Please Enter Your Valid Name").css("color", "red");
                isValid = false;
            }
        }
        
         if ($("#new_email").val() == "") {
            $("#new_email").siblings("#new_error_email").html("Please Enter Your Email ").css("color", "red");
            isValid = false;
        }
        else {
            if (!regemail.test($("#new_email").val())) {
                $("#new_email").siblings("#new_error_email").html("Please Enter Your Valid Email").css("color", "red");
                isValid = false;
            }
        }
                
         if ($("#new_phone").val() == "" || $("#new_phone").val() == null ) {
            $("#new_phone").siblings("#new_error_phone").html("Please Enter Your Phone Number").css("color", "red");
            isValid = false;
        }

         else if(isvalidformfooter == 0){
            isValid = false;
        }
        
        /* if ($("#budgetfoot").val() == "none") {
            $("#error_budgetfoot").html("Please Select A Budget ")
            isValid = false;
        } */
            if ($("#new_service").val() == "none") {
            $("#new_error_service").html("Please Select A Service ").css("color", "red");
            isValid = false;
        }
        // console.log(verifythiscaptcharesponse);
        // if(verifythiscaptcharesponse == "" || verifythiscaptcharesponse == null ){
        // 	$("#captcha").siblings(".error").html("Please Select Checkbox")
        // 	isValid = false;
        // } 
     return isValid;
}

</script>