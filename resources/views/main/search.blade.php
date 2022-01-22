 
 @extends('main.master')
@section('content')


    <div class="top-banner animatedBackground" data-bg-img="images/animated-bg.png">

        <div class="banner-caption">

            <h2>{{ trans('langsite.results')}}</h2>

        </div>

    </div>





    <div class="search-results">

        <div class="container">


<?php  
 if( $search_News_en->isEmpty()) {    ?>

									 
								
            <div class="result">

                <a href=" ">

                    <div class="row no-gutters">

                      


                        <div class="col-md-10">

                            <p class="result-title">

                               no results found

                            </p>

                        </div>

                    </div>

                </a>

            </div>



            <div class="dropdown-divider"></div> 	 
									 <?php  }else { ?>
									 
							@foreach($search as $NEWSs_val)
							@foreach($NEWSs_val as $NEWSs_val_discbtion)

 

 	@foreach(  $NEWSs_val_discbtion->get_description  as  $NEWSs_val_dec)




            <div class="result">

                <a href="{!! $NEWSs_val_discbtion->get_NEWS_path()  !!}">

                    <div class="row no-gutters">

                        <div class="col-md-2">

                            <img src="{{ URL::to('/').'/images/'.$NEWSs_val_discbtion->single_photo}}" alt="   {{  $NEWSs_val_dec->title}} ">

                        </div>



                        <div class="col-md-10">

                            <p class="result-title">

                               {{  $NEWSs_val_dec->title}} 

                            </p>

                        </div>

                    </div>

                </a>

            </div>



 
 									 @endforeach
 									 @endforeach
 									 @endforeach 


 									 
				 <?php  } ?>					 
									 
									 
 
        </div>

    </div>


    @endsection