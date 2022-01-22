@extends('main.master')
@section('content') 


@foreach(  $singel_portfolio  as  $NEWS_val)

	@foreach(  $NEWS_val->get_description  as  $NEWS_val_dec)
	 
 
				  <div class="top-banner animatedBackground" data-bg-img="images/05.png">

        <div class="banner-caption">

            <h2>   {{  $NEWS_val_dec->title}} </h2>

        </div>

    </div>



    <div class="single-blog">

        <div class="container">
            <section id="lazy-img"></section>

            <div class="row">

                <div class="col-md-12">

                                  <div class="single-blog-img">

                        <img src=" {{ URL::to('/').'/images/'.$NEWS_val->single_photo}} " alt="  {{  $NEWS_val_dec->main_img_alt}} ">

                    </div>




                    <div class="single-blog-desc">


                        <h2>  {{  $NEWS_val_dec->title}}   </h2>

                        <p>  {!! $NEWS_val_dec->description !!} </p>

                    </div>


				 
										 	 @endforeach
											 @endforeach
											 
                    

                

                </div>

            </div>


   </div>

    </div>



    <div class="popup-overlay none">

        <div class="popup-img text-center">

            <i class="far fa-times-circle"></i>

            <img class="img-src" src="{{ URL::to('/').'/images/'}}cord-resize-logo.png" alt="  CORD Digital is the Way to Communicate & Globalize ">

        </div>

    </div>
 
 
 
 
 
								
								
								
   @endsection