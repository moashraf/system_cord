@extends('main.master')
@section('content')
	  
    <div class="top-banner animatedBackground" data-bg-img="{{  asset('/images') }}/animated-bg.png">
        <div class="banner-caption">
   <center>
            <h1>  {{ trans('langsite.company')}}  </h1>
</center>
        </div>
    </div>

    <section id="overview">
        <div class="overview-title">
            <h2>  {{ trans('langsite.overview')}} </h2>
            <p>  {!! site_settings('About_Us')  !!}  </p>
        </div>
        <div id="about-animation" class="row overview-desc">
            <div class="col-md-6 b-l about-add-animation">
                <div class="overview-img">
                    <img   src="{{ URL::to('/').'/images/'}}about1-1.jpg" alt="  CORD Digital is the Way to Communicate & Globalize " >
                </div>
                <div class="we-believe"> 
				 {!! site_settings('believe ')  !!} 
                </div>
            </div> 
            <div class="col-md-6 b-r about-add-animation-2">
                <div class="overview-caption">  {!! site_settings('Communicate & Globalize')  !!} 
				</div>
            </div>
        </div>
        
    </section>

    <section id="vision-mission">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="m-v">
                        <div class="icon">
                            <img src="{{  asset('/images') }}/company-vision.png"   alt="  CORD Digital is the Way to Communicate & Globalize " >
                        </div>

                        <div class="m-v-desc">
                            <span>  {{ trans('langsite.VISION')}} </span>
  {!! site_settings('Vision')  !!} 
  </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="m-v">
                        <div class="icon">
                            <img src="{{  asset('/images') }}/objective.png"  alt="  CORD Digital is the Way to Communicate & Globalize " >
                        </div>

                        <div class="m-v-desc">
                            <span>  {{ trans('langsite.Mission')}} </span>
							 {!! site_settings('Mission')  !!} 
                         </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="partners" class="partners-about">
        <div id="title1" class="sec-title text-center">
            <h2>    {{ trans('langsite.partners')}} </h2>
            <span class="line"></span>
        </div>
        <div class="container">
            <div class="owl-carousel owl-partners owl-theme">
			
			
			
			@foreach($partners->sortBy('sort_num' )  as $NEWSs_val)
 @foreach(  $NEWSs_val->get_description->sortBy('sort_num' )   as  $NEWSs_val_dec)
															
			
                <div class="item">
                    <img src="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt=" {{  $NEWSs_val_dec->title}}  ">
                </div>
 
   @endforeach
  @endforeach
 
 
            </div>
        </div>

    </section>


    <section id="our-board" class="animatedBackground" data-bg-img="images/animated-bg.png">
        <div class="container">

            <div id="title1" class="sec-title text-center">
                <h2>  {{ trans('langsite.Our_Board')}}   </h2>
                <span class="line"></span>
            </div>

            <div class="owl-carousel owl-board owl-theme">
			
			
			
			
				@foreach($Our_Board->sortBy('sort_num' )  as $NEWSs_val)
 @foreach(  $NEWSs_val->get_description->sortBy('sort_num' )  as  $NEWSs_val_dec)
															
			
			
                <div class="item">
                    <img  src="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt=" {{  $NEWSs_val_dec->title}}  " >

                    <div class="board-info">
                        <span class="b-name"> {{  $NEWSs_val_dec->title}}    </span>
                        <span class="b-position">   {{  $NEWSs_val_dec->seo_title}}  </span>
                    </div>
                </div>

               
			   
			   
			      @endforeach
  @endforeach
			   
			   
			   
            </div>
        </div>
    </section>

    
   
				 
   @endsection
