@extends('main.master')
@section('content')

 
	@foreach($categories_news as $categories_news_val)
 	@foreach(  $categories_news_val->get_description  as  $categoriess_val_dec)
 
 									
			 


																		 @endforeach
									 @endforeach

   

    <div class="top-banner animatedBackground" data-bg-img=" {{ URL::to('/').'/images/'.$categoriess_val_dec->single_photo}} ">

        <div class="banner-caption">

            <h2>{{ $categoriess_val_dec->title }} </h2>

        </div>

    </div>



    <div class="portfolio">

        <div class="row">

            <div class="col-md-12">

                <div class="filter-btns">

                    <ul>
                        <li class="filter-btn active" data-filter="all">  {{ trans('langsite.all')}} </li>

	@foreach($ِall_categories->sortBy('status' ) as $categories_news_val)
 	@foreach(  $categories_news_val->get_description  as  $categoriess_val_dec)


 
      <a style="
    list-style: none;
    float: left;
    padding: 10px 20px;
    border-radius: 100px;
    margin: 0 5px;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#c3622a),to(#22435c));
    background-image: -webkit-linear-gradient(#c3622a,#22435c);
    background-image: -o-linear-gradient(#c3622a,#22435c);
    background-image: linear-gradient(#c3622a,#22435c);
    color: #fff;
    cursor: pointer;
    -webkit-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
    margin-top: 10px;
"   class="filter-btn"    href=" {{ URL::to('/').'/'.App::getLocale().'/page/portfolio/'.$categoriess_val_dec->slug }}"> {{ $categoriess_val_dec->title }}  </a>
						
												 @endforeach
									 @endforeach




                        <div class="clear-both"></div>

                    </ul>

                </div>

            </div>



            <div class="col-md-12">

                <div class="portfolio-projects">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="portfolio-items">

                                <div class="row">







@foreach($all_portfolio->sortBy('status' )  as $NEWSs_val)

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