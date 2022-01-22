<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        

        <!-- mobile meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>CORD DIGITAL</title>
        <!-- bootstrap css file -->
        <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous"
        />
        <!-- fontawesome -->
        <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous"
        />
        <!-- Google fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Cairo|Ubuntu"
        rel="stylesheet"
        />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{  asset('/')}}landingpage/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{  asset('/')}}landingpage/css/owl.theme.default.min.css">
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"
        />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="{{  asset('/')}}landingpage/images/favicon.png" />
        <!-- main css file -->
        <link rel="stylesheet" href="{{  asset('/')}}landingpage/css/mainstyle.css" />
    </head>

    <body>
      <!-- preloader -->
      <div class="loading"></div>

      <header>
        <!-- Header Top Area -->
        <div class="header-toparea">
          <div class="container">
            <div class="row justify-content-betwween">
              <div class="col-lg-6">
                <ul class="header-topcontact">
                  <li>
                    <i class="zmdi zmdi-phone"></i> Phone Number :
                    <a href="tel:+201093628449">+201093628449</a>
                  </li>
                  <li>
                    <i class="zmdi zmdi-email"></i> E-MAIL :
                    <a href="mailto:info@corddigital.com"
                      >info@corddigital.com</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--// Header Top Area -->

        <!-- Header navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src="https://corddigital.com/images/landingcord-resize-logo.png" alt="corddigital" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#"
                    >Home <span class="sr-only">(current)</span></a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Services</a
                  >
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="#offers"
                      >Social Media Offers</a
                    >
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#offers"
                      >SEO Offers</a
                    >

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services"
                      >Pay Per Click</a
                    >

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services"
                      >Web Solutions</a
                    >
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services"
                      >Mobile Apps</a
                    >

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services"
                      >Designs & Photography</a
                    >

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services"
                      >Video & Multimedia</a
                    >

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#services"
                      >Outsourcing & Franchising</a
                    >
                  </div>
                </li>
              
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                </li>
              </ul>

              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a href="#contact" class="nav-action-btns btn-theme">Contact</a>
                  </li>

                  <li class="nav-item">
                      <a href="tel:+201093628449" class="nav-action-btns btn-theme">01093628449</a>
                  </li>
              </ul>



            </div>
          </div>
        </nav>
        <!-- //navbar -->
      </header>

    <a target="_blank" href="https://api.whatsapp.com/send?phone=+0201093628449" class="whatsapp-link">
        <i class="fab fa-whatsapp-square whatsapp-icon"></i>
    </a>

    <div id="home" class="home section sec-margin">
        <div class="container animated fadeInDown slow delay-2s">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title-land"><span class="animated fadeIn slow delay-4s span-cord">CORD DIGITAL</span> IS THE WAY TO COMMUNICATE & GLOBALIZE</h4>
                    <p>Cord Digital is a business services company mainly in digital marketing, multimedia solutions, web solutions, graphic designs & photography, outsourcing & franchising.</p>
                </div>

                <div class="col-md-12 mt-3">
                    <h4 class="title-land">Don't Hesitate Send Message Now</h4>
                    <div class="contact-form animated fadeInRight slow delay-4s">
                             	   {!! Form::open( [ 'route' =>  'orders',
	   'id' =>  'contact_form',
	   'name' =>  'contact',
	   'method' => 'post', 
	   'class' => 'row'] ) !!}
                            <div class="messages"></div>
							<input type="hidden" name="quantity" placeholder="col-form-label-sm" value=" Landing Page  ">
                            <div class="form-group col-md-6">
                                <input id="form_name" type="text"  name="title"   class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input id="form_email" type="email"  name="email"   class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="form_phone" type="tel"    name="phone"   class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-md-12">
                                <select name="product" required class="custom-select">
                                      <option selected  value="	{{ trans('langsite.Digital Marketing')}}"  >{{ trans('langsite.select-service')}}</option>
                                    <option value="Social Media Offers">Social Media Offers</option>
                                    <option value="Social Media Offers">SEO Offers</option>
                                    <option value="Google Ads ">Pay Per Click</option>
                                    <option value="Web Solutions ">Web Solutions</option>
                                    <option value="Mobile Apps ">Mobile Apps</option>
                                    <option value="Designs & Photography ">Designs & Photography</option>
                                    <option value="Vedio & Multimedia ">Vedio & Multimedia</option>
                                    <option value="Outsourcing & Franchising ">Outsourcing & Franchising</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea id="form_message"  name="body"   class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-theme btn-radius"><span>Send Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about section sec-margin animatedBackground">
        <div class="container">
            <h2 class="title-section text-center">About</h2>
            <p class="text-center">CORD Digital is a group of specialized persons from different backgrounds, who are able to manage your projects from A to Z Regardless of your budget. Our team will work with you from the beginning and throughout your projects. Our team can help you dealing with the world of business, converting to E-Business, and trending to inbound marketing instead of outbound marketing. CORD Digital is your link to the digital business, locally and globally.</p>
            <div class="about-btns text-center">
                <a href="tel:+201093628449" class="nav-action-btns btn-theme">Get packages and prices</a>
                <a href="#contact" class="nav-action-btns btn-theme">Send Message</a>
            </div>
        </div>
    </div>
    
    <div id="offers" class="offer section sec-margin">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                    <div class="service">
                        <a href="javascript:void(0)">
                            <div class="offer-img">
                                <img src="{{  asset('/')}}landingpage/images/social media(landingpage).jpg" class="image" alt="">

                                <!--<div class="service-overlay">-->
                                <!--    <p><i class="fa fa-plus"></i> Order this service now</p>-->
                                <!--</div>-->
                            </div>

                            <div class="service-link mt-4 text-center">
                                <span class="nav-action-btns btn-theme">Get This Offer Now</span>
                            </div>
                        </a>
                    </div>
                </div>
               <div class="col-md-6">
                    <div class="service">
                        <a href="javascript:void(0)">
                            <div class="offer-img">
                                <img src="{{  asset('/')}}landingpage/images/seo(landingpage).jpg" class="image" alt="corddigital">

                                <!--<div class="service-overlay">-->
                                <!--    <p><i class="fa fa-plus"></i> Order this service now</p>-->
                                <!--</div>-->
                            </div>

                            <div class="service-link mt-4 text-center">
                                <span class="nav-action-btns btn-theme">Get This Offer Now</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="service">
                        <a href="javascript:void(0)">
                            <div class="offer-img">
                                <img src="{{  asset('/')}}landingpage/images/video(landing page.jpg" class="image" alt="">

                                <!--<div class="service-overlay">-->
                                <!--    <p><i class="fa fa-plus"></i> Order this service now</p>-->
                                <!--</div>-->
                            </div>

                            <div class="service-link mt-4 text-center">
                                <span class="nav-action-btns btn-theme">Get This Offer Now</span>
                            </div>
                        </a>
                    </div>
                </div>
                        <div class="col-md-6">
                    <div class="service">
                        <a href="javascript:void(0)">
                            <div class="offer-img">
                                <img src="{{  asset('/')}}landingpage/images/website(landingpage).jpg" class="image" alt="">

                                <!--<div class="service-overlay">-->
                                <!--    <p><i class="fa fa-plus"></i> Order this service now</p>-->
                                <!--</div>-->
                            </div>

                            <div class="service-link mt-4 text-center">
                                <span class="nav-action-btns btn-theme">Get This Offer Now</span>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
        </div>
    </div>

    <div id="services" class="services section sec-margin">
        <div class="container">
            <h2 class="title-section text-center">Services</h2>

            <div class="row">
                <div class="col-md-6">
                    <div id="s1" class="service s1 visibility-hidden">
                        <a href="javascript:void(0)">
                            <div class="service-img">
                                <img src="{{  asset('/')}}landingpage/images/social-media.jpg" class="image" alt="">

                                <div class="service-overlay">
                                    <p><i class="fa fa-plus"></i> Order this service now</p>
                                </div>
                            </div>

                            <div class="service-title">
                                <h2>Social Media</h2>
                            </div>

                            <div class="service-desc">
                                <p>
                                    Social media is a part of digital marketing that is used for promoting brand awareness and increase conversion rate, in CORD Digital we strive to deliver the best Social media services with various new perspectives which suits different types of businesses.
                                </p>
                            </div>

                            <div class="service-link">
                                <span class="nav-action-btns btn-theme">Order Now</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div id="s2" class="service s2 visibility-hidden">
                        <a href="javascript:void(0)">
                            <div class="service-img">
                                <img src="{{  asset('/')}}landingpage/images/google-ads.jpg" class="image" alt="">

                                <div class="service-overlay">
                                    <p><i class="fa fa-plus"></i> Order this service now</p>
                                </div>
                            </div>

                            <div class="service-title">
                                <h2>Pay Per Click</h2>
                            </div>

                            <div class="service-desc">
                                <p>
                                    No matter how great the content it’s still ineffective for your business if no one can find it. promoting your content to extend the reach of your brand, creates engagement & interactions, and establishes authority and trust with search engines. From where you can benefit: Higher ROI Quality Traffic Faster conversion
                                </p>
                            </div>

                            <div class="service-link">
                                <span class="nav-action-btns btn-theme">Order Now</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="s1" class="service s3 visibility-hidden">
                        <a href="javascript:void(0)">
                            <div class="service-img">
                                <img src="{{  asset('/')}}landingpage/images/seo.jpg" class="image" alt="">

                                <div class="service-overlay">
                                    <p><i class="fa fa-plus"></i> Order this service now</p>
                                </div>
                            </div>

                            <div class="service-title">
                                <h2>SEO</h2>
                            </div>

                            <div class="service-desc">
                                <p>
                                    Get higher ranking in search engines..
                                    Increase your global Brand awareness and obtain more revenue...
                                    We understand your needs for SEO, therefore we make sure you are in the right place for your audience. With our team you will get to the results you are looking for.
                                </p>
                            </div>

                            <div class="service-link">
                                <span class="nav-action-btns btn-theme">Order Now</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div id="s3" class="service s4 visibility-hidden">
                        <a href="javascript:void(0)">
                            <div class="service-img">
                                <img src="{{  asset('/')}}landingpage/images/thumbnail_web.png" class="image" alt="">

                                <div class="service-overlay">
                                    <p><i class="fa fa-plus"></i> Order this service now</p>
                                </div>
                            </div>

                            <div class="service-title">
                                <h2>Web Solutions</h2>
                            </div>

                            <div class="service-desc">
                                <p>
                                   A website is your key to launch your business online, from where your digital marketing strategy starts. The website is your online presence, where you can represent your brand and display your products & services in order to publish it on the digital platforms and achieve higher conversions and ROI.
                                </p>
                            </div>

                            <div class="service-link">
                                <span class="nav-action-btns btn-theme">Order Now</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div id="s3" class="service s5 visibility-hidden">
                        <a href="javascript:void(0)">
                            <div class="service-img">
                                <img src="{{  asset('/')}}landingpage/images/mobile (1).png" class="image" alt="">

                                <div class="service-overlay">
                                    <p><i class="fa fa-plus"></i> Order this service now</p>
                                </div>
                            </div>

                            <div class="service-title">
                                <h2>Mobile Apps</h2>
                            </div>

                            <div class="service-desc">
                                <p>
                                    Reduce the time, cost and resources needed to build enterprise-ready mobile applications CORD Digital’s Enterprise Mobile Application Platform powers the backend of the post-web enterprise by delivering the infrastructure and services you need to integrate mobile apps with backend systems, secure and manage mobile solutions, and analyze the runtime behavior of your mobile apps.
                                </p>
                            </div>

                            <div class="service-link">
                                <span class="nav-action-btns btn-theme">Order Now</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="s2" class="service s6 visibility-hidden">
                        <a href="javascript:void(0)">
                            <div class="service-img">
                                <img src="{{  asset('/')}}landingpage/images/graphics-f.jpg" class="image" alt="">

                                <div class="service-overlay">
                                    <p><i class="fa fa-plus"></i> Order this service now</p>
                                </div>
                            </div>

                            <div class="service-title">
                                <h2>Graphic & Photography</h2>
                            </div>

                            <div class="service-desc">
                                <p>
                                    It’s well known that graphic design is the process of visual communication and problem-solving through the use of type, space, image and color. Here at CORD Digital, the main objective in our designs is to understand our clients’ needs in order to deliver the best interactive designs and bring all your ideas and imagination to reality.
                                </p>
                            </div>

                            <div class="service-link">
                                <span class="nav-action-btns btn-theme">Order Now</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="s3" class="service s7 visibility-hidden">
                        <a href="javascript:void(0)">
                            <div class="service-img">
                                <img src="{{  asset('/')}}landingpage/images/video-and-animation.jpg" class="image" alt="">

                                <div class="service-overlay">
                                    <p><i class="fa fa-plus"></i> Order this service now</p>
                                </div>
                            </div>

                            <div class="service-title">
                                <h2>Vedio & Multimedia</h2>
                            </div>

                            <div class="service-desc">
                                <p>
                                    The way of delivering your message through a visual stream or a graphical signal is an ART. In CORD Digital, we take your imagination seriously in order to bring all your thoughts into reality with a professional team capable of providing the best results to entertain and deliver the desired message to your audience in the right format with the required tone.
                                </p>
                            </div>

                            <div class="service-link">
                                <span class="nav-action-btns btn-theme">Order Now</span>
                            </div>
                        </a>
                    </div>
                </div>


                <div class="col-md-6">
                    <div id="s4" class="service s8 visibility-hidden">
                        <a href="javascript:void(0)">
                            <div class="service-img">
                                <img src="{{  asset('/')}}landingpage/images/Outsourcing-&-Franchising.jpg" class="image" alt="">

                                <div class="service-overlay">
                                    <p><i class="fa fa-plus"></i> Order this service now</p>
                                </div>
                            </div>

                            <div class="service-title">
                                <h2>Outsourcing & Franchising</h2>
                            </div>

                            <div class="service-desc">
                                <p>
                                    CORD Digital links you with reputable manufacturing companies & global brands through our partnership with ESMO s.r.l in Italy “EU management and Financial consulting Company”. We are providing Outsourcing for our clients with the service of private labeling. Furthermore, we bring various franchise licenses to Egyptian companies or individuals.
                                </p>
                            </div>

                            <div class="service-link">
                                <span class="nav-action-btns btn-theme">Order Now</span>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

        </div>
        
        <div class="service-form none">
            <div class="container">
                <h2 class="text-left close-form"><i class="fa fa-backward"></i> Back</h2>
                <div class="contact-form visibility-0">
	   {!! Form::open( [ 'route' =>  'orders',
	   'id' =>  'contact_form',
	   'name' =>  'contact',
	   'method' => 'post', 
	   'class' => 'row'] ) !!}                      
	   
	   							<input type="hidden" name="quantity" placeholder="col-form-label-sm" value=" Landing Page  ">

<div class="messages"></div>
                        <div class="form-group col-md-6">
                            <input id="form_name" type="text"   name="title" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input id="form_email" type="email"   name="email"   class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group col-md-12">
                            <input id="form_phone" type="tel"   name="phone"  class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group col-md-12">
                                <select name="product" required class="custom-select">
                                      <option selected  value="	{{ trans('langsite.Digital Marketing')}}"  >{{ trans('langsite.select-service')}}</option>
                                    <option value="Social Media Offers">Social Media Offers</option>
                                    <option value="Social Media Offers">SEO Offers</option>
                                    <option value="Google Ads ">Pay Per Click</option>
                                    <option value="Web Solutions ">Web Solutions</option>
                                    <option value="Mobile Apps ">Mobile Apps</option>
                                    <option value="Designs & Photography ">Designs & Photography</option>
                                    <option value="Vedio & Multimedia ">Vedio & Multimedia</option>
                                    <option value="Outsourcing & Franchising ">Outsourcing & Franchising</option>
                                </select>
                        </div>

                        <div class="form-group col-md-12">
                            <textarea id="form_message"  name="body" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-theme btn-radius"><span>Send Message</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="portfolio desktop-portfolio section sec-margin visibility-hidden">

        <div class="container">
            <h2 class="title-section text-center">Some Of Our Clients</h2>
            <div class="row">
                
                      <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/22222.png" alt="">
                </div>

      <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/333333.png" alt="">
                </div>

      <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/1111111.png" alt="">
                </div>
 

                
                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/banque-misr-logo-.png" alt="">
                </div>

            
                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/new you.png" alt="">
                </div>

                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/hilton.png" alt="">
                </div>

                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/techno power.png" alt="">
                </div>

              

                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/diet house.png" alt="">
                </div>

            

                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/el-domiaty-logo-01.png" alt="">
                </div>

                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/premedion-logo.png" alt="">
                </div>

                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/fagor-logo.png" alt="">
                </div>

                <div class="col-md-2">
                    <img src="{{  asset('/')}}landingpage/images/panasonic-logo.png" alt="">
                </div>
            </div>

            
        </div>

    </div>

    <div class="mobile-portfolio portfolio ection sec-margin">
        <div class="container">
            <h2 class="title-section text-center">Some Of Our Clients</h2>
            <div class="owl-carousel owl-theme owl-portfolio">
                
                
                
                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/22222.png" alt="">
                </div>

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/333333.png" alt="">
                </div>

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/1111111.png" alt="">
                </div>
 

                
                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/banque-misr-logo-.png" alt="">
                </div>

            
                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/new you.png" alt="">
                </div>

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/hilton.png" alt="">
                </div>

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/techno power.png" alt="">
                </div>

              

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/diet house.png" alt="">
                </div>

            

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/el-domiaty-logo-01.png" alt="">
                </div>

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/premedion-logo.png" alt="">
                </div>

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/fagor-logo.png" alt="">
                </div>

                <div class="item">
                    <img src="{{  asset('/')}}landingpage/images/panasonic-logo.png" alt="">
                </div>
                
               
            </div>

           
        </div>
    </div>

    <div id="contact" class="contact section sec-margin animatedBackground">
        <div class="container">
            <h2 class="title-section text-center">Contact</h2>
            <div class="contact-form visibility-hidden">
	   {!! Form::open( [ 'route' =>  'orders',
	   'id' =>  'contact_form',
	   'name' =>  'contact',
	   'method' => 'post', 
	   'class' => 'row'] ) !!}             
	   							<input type="hidden" name="quantity" placeholder="col-form-label-sm" value=" Landing Page  ">

<div class="messages"></div>
                    <div class="form-group col-md-6">
                        <input id="form_name" type="text"  name="title"  class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-6">
                        <input id="form_email" type="email"   name="email"  class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-12">
                        <input id="form_phone" type="tel"   name="phone"   class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-md-12">
                                <select name="product" required class="custom-select">
                                      <option selected  value="	{{ trans('langsite.Digital Marketing')}}"  >{{ trans('langsite.select-service')}}</option>
                                    <option value="Social Media Offers">Social Media Offers</option>
                                    <option value="Social Media Offers">SEO Offers</option>
                                    <option value="Google Ads ">Pay Per Click</option>
                                    <option value="Web Solutions ">Web Solutions</option>
                                    <option value="Mobile Apps ">Mobile Apps</option>
                                    <option value="Designs & Photography ">Designs & Photography</option>
                                    <option value="Vedio & Multimedia ">Vedio & Multimedia</option>
                                    <option value="Outsourcing & Franchising ">Outsourcing & Franchising</option>
                                </select>
                    </div>
                    <div class="form-group col-md-12">
                        <textarea id="form_message"   name="body"   class="form-control" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-theme btn-radius"><span>Send Message</span></button>
                    </div>
                </form>
            </div>

            <!-- <ul class="contact-info">
                <li class="mb-4"><i class="fas fa-map-marked-alt"></i><span>Address</span>
                    <p>19 El Gihad St, Lebanon Square, Mohandseen, Giza, Egypt Seventh-floor apartment 12</p>
                </li>
                <li class="mb-4"><i class="fas fa-mail-bulk"></i><span>Email</span><a href="mailto:info@corddigital.com"> info@corddigital.com</a>
                </li>
                <li class="mb-4"><i class="fas fa-phone-volume"></i><span>HOTLINE</span><a href="tel:+201200041444">+201200041444</a>
                </li>
                <li class="mb-4"><i class="fas fa-phone"></i><span>Phone</span><a href="tel:+201093628449">+201093628449</a>
                </li>
                <li><i class="fas fa-phone"></i><span>Phone</span><a href="tel:+201093628449 ">+201093628449 </a>
                </li>
            </ul> -->
        </div>
    </div>

    <footer class="footer white-bg pos-r o-hidden bg-contain" style="background-image: url(images/01.png)">
        <div class="round-p-animation"></div>
        <div class="primary-footer">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ht-theme-info bg-contain bg-pos-r h-100 dark-bg text-white" data-bg-img="images/bg/02.png">
                            <div class="footer-logo">
                                <img src="{{  asset('/')}}landingpage/images/logo-footer.png" class="img-center" alt="">
                            </div>
                            <p class="mb-3">Cord Digital is a business services company mainly in digital marketing, multimedia solutions, web solutions, graphic designs & photography, outsourcing & franchising.</p> <a class="btn-simple btn-footer btn-theme" target="_blank" href="https://corddigital.com/"><span>Visit Our Website <i class="fas fa-long-arrow-alt-right"></i></span></a>
                            <div class="social-icons social-border circle social-hover mt-5">
                                <h4 class="title">Follow Us</h4>
                                <ul class="list-inline">
                                    <li class="social-facebook"><a target="_blank" href="https://www.facebook.com/corddigital/"><i class="fab fa-facebook-f"></i></a>
                                    </li>

                                    <li class="social-linkedin"><a target="_blank" href="https://www.linkedin.com/company/corddigital"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="social-instagram"><a target="_blank" href="https://www.instagram.com/corddigital/"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="social-youtube"><a target="_blank" href="https://www.youtube.com/c/corddigitalmarketing"><i class="fab fa-youtube"></i></a>
                                    </li>

                                    <li class="social-behance mt-p"><a target="_blank" href="https://www.behance.net/cord-digital"><i class="fab fa-behance"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 py-8 md-px-5 footer-link">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 footer-list">
                                <h4 class="title">Services & Usefull links</h4>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <ul class="list-unstyled">
                                            <li><a href="#offers">Social Media Offers</a>
                                            </li>
                                            
                                            <li><a href="#offers">SEO Offers</a>
                                            </li>
                                            
                                            <li><a href="#services">Pay Per Click</a>
                                            </li>
                                        

                                            <li><a href="#services">Web Solutions</a>
                                            </li>
                                            
                                            <li><a href="#services">Mobile Apps</a>
                                            </li>
                                            
                                            <li><a href="#services">Designs & Photography</a>
                                            </li>
                                            
                                            <li><a href="#services">Vedio & Multimedia</a>
                                            </li>

                                            <li><a href="#services">Outsourcing & Franchising</a>
                                            </li>
                                            

                                        </ul>
                                    </div>

                                    <div class="col-sm-7">
                                        <ul class="list-unstyled">
                                            <li><a href="#home">Home</a>
                                            </li>
                                            <li><a href="#about">About</a>
                                            </li>
                                            <li><a href="#services">Services</a>
                                            </li>
                                            <li><a target="_blank" href="https://corddigital.com/en/page/portfolio">Portfolio</a>
                                            </li>
                                            <li><a href="#contact">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 sm-mt-5">
                                <h4 class="title">Contact</h4>
                                <ul class="media-icon list-unstyled">
                                    <li>
                                        <p class="mb-0">19 El Gihad St, Lebanon Square, Mohandseen, Giza, Egypt Sixth-floor</p>
                                    </li>
                                    <li><a href="mailto:info@corddigital.com">info@corddigital.com</a>
                                    </li>
                                    <li><a href="tel:+201093628449">+201093628449</a></li>
                                 </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-footer">
            <div class="container">
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-md-12 text-center"> <span>All Rights Reserved | By Cord Digital </span></div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142042234-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142042234-1');
</script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142042234-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142042234-1');
</script>
    <a href="#top" class="to-top"><img src="{{  asset('/')}}landingpage/images/top.png" alt=""></a>
    <!--footer end-->

    <!-- bootstrap js files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <!-- owlcarousel js file -->
    <script src="{{  asset('/')}}landingpage/js/owl.carousel.min.js"></script>
    <!-- waypoints js cdn -->
    <script src="{{  asset('/')}}landingpage/js/noframework.waypoints.min.js"></script>
    <script type="text/javascript" src="{{  asset('/')}}landingpage/js/script.js"></script>
</body>

</html>



