@extends('main.master')
@section('content')
   
  
	
               
				 
				<section>
					<div class="sub-header sub-header-1 sub-header-blog-grid fake-position">
						<div class="sub-header-content">
							<h2 class="text-cap white-text">{{ trans('langsite.Projects')}}  </h2>
							<ol class="breadcrumb breadcrumb-arc text-cap">
								<li>
									<a   title="{!! site_settings('Web_site_name')  !!} " href="#">{{ trans('langsite.Home')}}</a>
								</li>
								<li class="active"> {{ trans('langsite.Projects')}} </li>
							</ol>
						</div>
					</div>
				</section>
				<!-- End Section Sub Header -->

				<section id="content" class="padding">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
							
								@foreach($categories_news as $categories_news_val)

															@foreach(  $categories_news_val->get_description  as  $categoriess_val_dec)
	 	<title> {!! site_settings('Web_site_name')  !!}   /{{ $categoriess_val_dec->title }}</title>

											      <h1  style=" display: none; " > {{  $categoriess_val_dec->seo_title}}  </h1>
								
			 <meta charset="UTF-8">
			 <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content=" mar-decor  ">
  <meta name="description" content="  {{ $categoriess_val_dec->meta_description }} "/>
 <meta name="Keywords" content=" {{ $categoriess_val_dec->seo_title }}  "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="  {{ $categoriess_val_dec->seo_title }}  " />
<meta property="og:description" content=" {{ $categoriess_val_dec->meta_description }}  " />
<meta property="og:url" content="{{ URL::to('/') }}" />
<meta property="og:site_name" content="Mar Decor" />
<meta property="article:tag" content="  {{ $categoriess_val_dec->meta_description }} " />
<meta property="article:section" content=" {{ $categoriess_val_dec->meta_description }} " />
<meta property="article:published_time" content="{{ $categoriess_val_dec->created_at }}" />
<meta property="article:modified_time" content=" {{ $categoriess_val_dec->created_at }} " />
<meta property="og:updated_time" content="  {{ $categoriess_val_dec->created_at }}  " />
<meta property="og:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta property="og:image:secure_url" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="900" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content=" {!! site_settings('Web_site_name')  !!}" />
<meta name="twitter:title" content=" {!! site_settings('home_seo_description')  !!} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/mar2.png '}}" />
<meta name="twitter:site" content="@mar-decor" />  


																		 @endforeach
									 @endforeach


								<div class="blog-list">
								
								
											@foreach($NEWS as $NEWSs_val)

															@foreach(  $NEWSs_val->get_description  as  $NEWSs_val_dec)

								
									<a   title=" {{  $NEWSs_val_dec->seo_title}} " href="{!! $NEWSs_val->get_NEWS_path()  !!}">
											<article class="col-md-4">
												<figure class="latest-blog-post-img effect-zoe">
														<img src="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}" 
														class="img-responsive"    alt="{!! site_settings('Web_site_name')  !!}">

													<div class="latest-blog-post-date text-cap">
 						                <span class="month"> {{  $NEWSs_val_dec->created_at}}  </span>
						               </div>

						            </figure>
						                   <div class="latest-blog-post-description">
						                        <span href="#"><h3>{{  $NEWSs_val_dec->title}}  </h3></span>
						                        <p> {{  $NEWSs_val_dec->seo_title}}  </p>

						                        <span href="{!! $NEWSs_val->get_NEWS_path()  !!}" class="ot-btn btn-main-color text-cap">
						                            	المزيد
						                        </span>
						                   </div>

											</article>
									</a>
									
																		 @endforeach
									 @endforeach

									
									
									
								</div>

						</div>
					</div>
				</section> 
				
				
				
				
			 
				  
   @endsection