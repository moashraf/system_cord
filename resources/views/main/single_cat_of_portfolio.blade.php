@extends('main.master')
@section('content')

 
	@foreach($categories_news as $categories_news_val)
 	@foreach(  $categories_news_val->get_description  as  $categoriess_val_dec)
 
 		  @endforeach
									 @endforeach

    


    <div class="portfolio">

        <div class="row">

          
            <div class="col-md-12">


       
                <div class="portfolio-projects">
 <div class="banner-caption">

            <h2 style="
    text-align: center;
" >{{ $categoriess_val_dec->title }} </h2>

        </div>
                    <div class="row">

                        <div class="col-md-12">

                            <div class="portfolio-items">

                                <div class="row">







@foreach($cat_of_portfolio->sortBy('status' )  as $NEWSs_val)

			 	@foreach(  $NEWSs_val->get_description->sortBy('status' )   as  $NEWSs_val_dec)




                                    <div class="col-md-6 filter     {{  $NEWSs_val->cat_id}}  ">

                                        <a   href=" {{ URL::to('/').'/'.App::getLocale().'/'.$NEWSs_val_dec->slug }}">

                                            <div class="portfolio-item">

                    <div class="portfolio-item-img" style="background-image: linear-gradient( to top, #0d0f2782 30px, #0d06297a),url('{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}');">

                                                    

                                                </div>

                                                <div class="portfolio-item-desc">

                                                    <span class="date"> <?php echo date("d-m-Y", strtotime("$NEWSs_val->created_at"));?> 
 </span>

                                                    <h2> {{  $NEWSs_val_dec->title}}    </h2>

                                                    <span> {{ trans('langsite.More')}} </span>

                                                </div>

                                            </div>

                                        </a>

                                    </div>






							 @endforeach
									 @endforeach











 
                                </div>

                            </div>

                        </div>

  

                    </div>

                </div>

            </div>

        </div>

    </div>

  
 
 
 
@endsection