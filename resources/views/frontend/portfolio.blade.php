@extends('frontend.layout.app')
@section('meta_keywords', 'Our Portfolio | Master Infotech')

@section('meta_description', 'Master Infotech has executed some of the greatest IT projects in the industry. Our work is our identity.')
@section('meta_tag','Our Portfolio | Master Infotech')
@section('meta_extra_seo','')
@section('content')

<main>
        <section id="port-part" style="background:#fff;">
            <div class="main portfoilio">
                <div class="title">
                    <h2>  Work <span>showcase</span></h2>
                  </div>
                <div id="myBtnContainer">
                    <button class="btn active" onclick="filterSelection('all')"> Show all</button>
                    <button class="btn" onclick="filterSelection('Branding')"> Branding</button>
                    <button class="btn" onclick="filterSelection('Web')"> Web Design</button>
                    <button class="btn" onclick="filterSelection('Mobile')"> Mobile App</button>
                </div>

            <!-- Portfolio Gallery Grid -->
                <div class="port_folio">
                    <div class="column Web">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/webdesign4.jpg')}}" alt="Growease" style="width:100%;">
                        <div class="overlays">
                            <div class="read-more-btn"><a href="#"> View More </a></div>
                            </div>

                        <div class="bottom-text"><b style="font-weight: 600;">Growease</b><br>Web Design</div>
                    </div>
                    </div>
                    <div class="column Mobile">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/mobileapp2.jpg')}}" alt="Ludhiana heights" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                        
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Travel Fox</b><br>Mobile App</div>
                    </div>
                    </div>
                    <div class="column Web">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/webdesign1.jpg')}}" alt="Motor Box" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                            
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Motor Box</b><br>Web Design</div>
                    </div>
                    </div>
                    <div class="column Branding">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/branding4.jpg')}}" alt="Motor Box" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                        
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Motor Box</b><br>Branding</div>
                    </div>
                    </div>
                    <div class="column Branding">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/branding3.jpg')}}" alt="The car club" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                        
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">The car club</b><br>Branding</div>
                    </div>
                    </div>
                    <div class="column Web">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/webdesign2.jpg')}}" alt="Tradebull" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                        
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Tradebull</b><br>Web Design</div>
                    </div>
                    </div>
                    <div class="column Web">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/webdesign3.jpg')}}" alt="The car cub" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                            
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">The car club</b><br>Web Design</div>
                    </div>
                    </div>
                    <div class="column Web">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/webdesign5.jpg')}}" alt="Planetry" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                            
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Planetry</b><br>Web Design</div>
                    </div>
                    </div>
                    <div class="column Web">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/webdesign6.jpg')}}" alt="Westgate" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                            
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Westgate</b><br>Web Design</div>
                    </div>
                    </div>
                    <!--------
                    <div class="column Branding">
                    <div class="content">
                    <img src="img/branding6.jpg" alt="Motor Box" style="width:100%;">
                        <div class="overlays">
                        <img src="img/branding6.1.jpg" alt="Motor Box" style="width:100%;">
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Motor Box</b><br>Branding</div>
                    </div>
                    </div>---------->
                    
                    <div class="column Branding">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/branding2.png')}}" alt="Tradebull" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                        
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Tradebull</b><br>Branding</div>
                    </div>
                    </div>
                    <div class="column Branding">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/branding7.jpg')}}" alt="Westgate" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                        
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Westgate</b><br>Branding</div>
                    </div>
                    </div>
                    <div class="column Branding">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/branding1.png')}}" alt="Hangout coffee" style="width:100%;">
                        <div class="overlays">
                        <div class="read-more-btn"><a href="#"> View More </a></div>
                        
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Hangout coffee</b><br>Branding</div>
                    </div>
                    </div>
                    <div class="column Branding">
                    <div class="content">
                        <img src="{{asset('assets/images/portfolio/branding8.1.jpg')}}" alt="Planetry" style="width:100%;">
                        <div class="overlays">
                            <div class="read-more-btn"><a href="#"> View More </a></div>
                        
                        </div>
                        <div class="bottom-text"><b style="font-weight: 600;">Planetry</b><br>Branding</div>
                    </div>
                    </div>
                <!-- END GRID -->
                </div>

            <!-- END MAIN -->
            </div>
        </section>

    </main>
    
@endsection