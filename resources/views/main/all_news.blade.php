@extends('main.master')
@section('content')
		   
			     
    <div class="top-banner animatedBackground" data-bg-img="{{  asset('/images') }}/05.png">

        <div class="banner-caption">

     <center>
            <h1>    	@foreach($categories_news as $categories_news_val)

						 @foreach(  $categories_news_val->get_description  as  $categoriess_val_dec)
 
 										
 {{  $categoriess_val_dec->title}}  

 @endforeach
	 	 @endforeach        
            </h1>
</center>
        </div>

    </div>
    


    <section id="news">

        <div class="container news">

            
            <div class="owl-carousel owl-blog owl-theme">

                <div class="row item">






							
					


@foreach($NEWS->sortBy('sort_num' )  as $NEWSs_val)

 	@foreach(  $NEWSs_val->get_description->sortBy('sort_num' )  as  $NEWSs_val_dec)



                    <div class="col-lg-4 col-md-12 news1 more-news">

                        <a href=" {!! $NEWSs_val->get_NEWS_path()  !!} ">

                            <div class="post">

                                <div class="post-image">

                                    <img class="img-fluid h-100 w-100" src=" {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt="{{  $NEWSs_val_dec->title}}   ">

                                </div>

                                <div class="post-desc">

                                    <div class="post-date">   <span>
									<?php  $newDate = date("d-m-Y", strtotime( $NEWSs_val->created_at)); echo $newDate ;?>  
									</span>

                                    </div>

                                    <div class="post-title">

                                        <h5> {{  $NEWSs_val_dec->title}}   </h5>

                                    </div>

                                    <p>  {{  $NEWSs_val_dec->meta_description}} </p>

                                    <span class="link-more"> {{ trans('langsite.More')}}  </span>

                                </div>

                            </div>

                        </a>

                    </div>
					
					
																		 @endforeach
									 @endforeach

                    
     </div>


 
   </div>

          {{ $NEWS->links() }}  

        </div>

    </section>


			 
				  
   @endsection