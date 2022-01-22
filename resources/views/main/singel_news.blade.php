@extends('main.master')
@section('content') 


@foreach(  $NEWS  as  $NEWS_val)

	@foreach(  $NEWS_val->get_description  as  $NEWS_val_dec)
   <div class="top-banner animatedBackground" data-bg-img="images/05.png">

        <div class="banner-caption">
<center>
            <h1>  
            
            {{  $NEWS_val_dec->title}} 
            
            </h1>
</center>
        </div>

    </div>



    <div class="single-blog">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="single-blog-img">

                        <img src=" {{ URL::to('/').'/images/'.$NEWS_val->single_photo}} " alt="  {{  $NEWS_val_dec->main_img_alt}} ">

                    </div>



                    <div class="single-blog-desc">

                        <div class="post-date">  <span>     
						
						<?php echo date("d-m-Y", strtotime("$NEWS_val->created_at"));?>
 
 </span></div>

                        <h2>  {{  $NEWS_val_dec->title}}   </h2>

                        <p>  {!! $NEWS_val_dec->description !!} </p>

                    </div>


				 
										 	 @endforeach
											 @endforeach
											 
                    
                    
                    
@foreach(  $NEWS  as  $NEWS_val)
<?php     if ( !$NEWS_val->get_News_Photos->isEmpty() ) {    ?>


                    <div class="owl-carousel gallery-carousel owl-theme" style="    margin-bottom: 63px; ">

                      


								@foreach(  $NEWS_val->get_News_Photos  as  $get_News_Photos_dec)


  <div class="item">

                            <img src="{{ URL::to('/').'/images/'.$get_News_Photos_dec->single_photo_gallery}}" alt="<?php   
						 echo str_replace(".jpg"," ","$get_News_Photos_dec->single_photo_gallery");
?>">

                        </div>
				 @endforeach
			
			
					  </div>
					   <?php  } ?>

	 @endforeach

                </div>

            </div>



            <div class="latest-blog-slider news" style="    margin-top: 0px;">

                <div class="  text-center">

                    <h2> {{ trans('langsite.related')}} </h2>

                    <span class="line"></span>

                </div>



                <div class="owl-carousel owl-latest-blog owl-theme">

											@foreach($AllNEWS as $NEWSs_val)

															@foreach(  $NEWSs_val->get_description  as  $NEWSs_val_dec)
     <div class="item">

                        <a href="{!! $NEWSs_val->get_NEWS_path()  !!} ">

                            <div class="post">

                                <div class="post-image">

                                    <img class="img-fluid h-100 w-100" src="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt="{{  $NEWSs_val_dec->main_img_alt}}">

                                </div>

                                <div class="post-desc">

                                    <div class="post-date">  <span>    
									<?php  $newDate = date("d-m-Y", strtotime( $NEWSs_val_dec->created_at)); echo $newDate ;?> </span>

                                    </div>

                                    <div class="post-title">

                                        <h5>{{  $NEWSs_val_dec->title}} </h5>

                                    </div>

                                    <p> {{  $NEWSs_val_dec->meta_description}} </p>

                                    <span class="link-more">  {{ trans('langsite.More')}} </span>

                                </div>

                            </div>

                        </a>

                    </div>
			
																		 @endforeach
									 @endforeach

	

   </div>    

            </div>


<div  class="col-md-10" >
 
 

					<div class="contact-main contact-page ser-form">
 
                <div class="  text-center">

                    <h2>  {{ trans('langsite.Contact Us')}}  </h2>

                    <span class="line"></span>

                </div>

  				   {!! Form::open( [ 'route' =>  'orders','id' =>  'contact-form','name' =>  'contact', 'method' => 'post', 'class' => 'row'] ) !!}


  <input type="hidden"  name="quantity"   placeholder="col-form-label-sm"   value="  {{ $NEWS_val_dec->title }}  ">
  
                            <div class="messages"></div>

                            <div class="form-group col-md-6">

                                <input id="form_name" type="text"  name="title"  class="form-control" placeholder=" {{ trans('langsite.Name')}} " required="required" data-error="Name is required.">

                                <div class="help-block with-errors"></div>

                            </div>

                            <div class="form-group col-md-6">

                                <input id="form_email" type="email"   name="email"  class="form-control" placeholder=" {{ trans('langsite.Email')}} "  required="required" data-error="Valid email is required.">

                                <div class="help-block with-errors"></div>

                            </div>

                            <div class="form-group col-md-6 ser-form">

                                <input id="form_phone" type="tel" name="phone"  class="form-control" placeholder=" {{ trans('langsite.Phone')}} "  required="required" data-error="Phone is required">

                                <div class="help-block with-errors"></div>

                            </div>
                            
                            <div class="form-group col-md-6">

                                <select name="product" required class="custom-select form-control">
                                      <option selected>{{ trans('langsite.select-service')}}</option>
                                    <option value="	{{ trans('langsite.Digital Marketing')}} "> 	{{ trans('langsite.Digital Marketing')}} </option>
                                    <option value="{{ trans('langsite.Web solutions')}}"> {{ trans('langsite.Web solutions')}}</option>
                                   
                                    <option value="	{{ trans('langsite.Designs & Photography')}} "> 	{{ trans('langsite.Designs & Photography')}}</option>
                                 

 <option value="		{{ trans('langsite.Video & Multimedia')}}  "> 		{{ trans('langsite.Video & Multimedia')}}</option>

								<option value="	{{ trans('langsite.Outsourcing & Franchising')}}" >	{{ trans('langsite.Outsourcing & Franchising')}}</option>
                                 </select>

                                <div class="help-block with-errors"></div>

                            </div>

                            <div class="form-group col-md-12">

                                <textarea id="form_message"  name="body" class="form-control" placeholder=" {{ trans('langsite.Message')}} "  rows="4" required="required" data-error="Please,leave us a message."></textarea>

                                <div class="help-block with-errors"></div>

                            </div>

                            <div class="col-md-12">

                                <button class="btn btn-theme btn-radius"><span>    {{ trans('langsite.send')}}  </span>

                                </button>

                            </div>

                        </form>

                    </div>
                    
 
</div>


        </div>

    </div>

 
                
     <div class="popup-overlay none">

        <div class="popup-img text-center">

            <i class="far fa-times-circle"></i>

            <img class="img-src"  src=" {{ URL::to('/').'/images/'}}cord-resize-logo.png "  alt="Cord Digital  " >

        </div>

    </div>
 
 
 
 
 
								
								
								
   @endsection