@extends('main.master')
@section('content')

 
	@foreach($categories_news as $categories_news_val)
 @foreach(  $categories_news_val->get_description  as  $categoriess_val_dec)



																		 @endforeach
									 @endforeach

 
 
 
  
    <div class="top-banner animatedBackground" data-bg-img="{{  asset('/images') }}/05.png">

        <div class="banner-caption">

             <center>    <h1> {{ $categoriess_val_dec->title }}   </h1>     </center>

        </div>

    </div>



    <div class="single-blog">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="single-blog-img">

                        <img src=" {{ URL::to('/').'/images/'.$categories_news_val->single_photo}} "   alt="Cord Digital  {{ $categoriess_val_dec->title }}  ">

                    </div>
 

                    <div class="single-blog-desc">

                        <h2> {{ $categoriess_val_dec->title }}   </h2>

                        <p>    {!! $categoriess_val_dec->description !!}   </p>

                    </div>

                </div>


  <div class="col-md-12">
				
		          <ul class="nav nav-tabs" id="myTab" role="tablist">
				  
				  
				  <?php  $starter = 0 ;   ?>
       



	@foreach($NEWS->sortBy('status' )  as $NEWSs_val)
 	@foreach(  $NEWSs_val->get_description  as  $NEWSs_val_dec)
															
															
															
               
                        <li class="nav-item">

                            <a class="nav-link  <?php  $starter++;    if($starter == 1  ){   echo "active ";  } ?>      " id="{{  $NEWSs_val_dec->id}}-tab" data-toggle="tab" href="#ff{{$NEWSs_val_dec->id}}" 
							role="tab" aria-controls="ff{{$NEWSs_val_dec->id}}" aria-selected="false"> 	 {{  $NEWSs_val_dec->title}} </a>

                        </li>

                    						 @endforeach
									 @endforeach


 

                    </ul>



                    <div class="tab-content" id="myTabContent">
    				  <?php  $starter2 = 0 ;   ?>

 
						@foreach($NEWS->sortBy('status' )  as $NEWSs_val)

															@foreach(  $NEWSs_val->get_description  as  $NEWSs_val_dec)
															
															

                            <div class="tab-pane fade  <?php  $starter2++;    if($starter2 == 1  ){   echo "active  show ";  } ?>  
							" id="ff{{$NEWSs_val_dec->id}}" role="tabpanel" aria-labelledby="{{  $NEWSs_val_dec->id}}-tab">

                                <div class="col-md-12 method method-service">

                                    <div class="row">

                                        <div class="col-md-12">

                                            <div class="method-caption">

                                                <h2>  {{  $NEWSs_val_dec->title}}  </h2>

                                               <p> {!!  $NEWSs_val_dec->main_img_alt!!}  </p>
                                                <br>

                                                <a href=" {{ URL::to('/').'/'.App::getLocale().'/'.$NEWSs_val_dec->slug }}">

                                                    <button class="btn btn-theme btn-radius btn-news"><span>  {{ trans('langsite.More')}} </span></button>

                                                </a>

                                            </div>

                                        </div>



                                        <div class="col-md-4">

                                            <div class="method-img">

                                                <img src=" {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " style="visibility: hidden;"   alt="Cord Digital   cord " />

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
							
							
							
							
							
							 @endforeach
									 @endforeach






     
     </div>

            

   </div>

                <div class="col-md-12 single-blog-desc">

                    <h2>  {{ trans('langsite.Order_this_Service')}}   </h2>

                 	<div class="contact-main contact-page ser-form">

  				   {!! Form::open( [ 'route' =>  'orders','id' =>  'contact-form','name' =>  'contact', 'method' => 'post', 'class' => 'row'] ) !!}


  <input type="hidden"  name="quantity"   placeholder="col-form-label-sm"   value="  {{ $categoriess_val_dec->title }}  ">

                            <div class="messages"></div>

                            <div class="form-group col-md-6">

                                <input id="form_name" type="text"  name="title"  class="form-control" placeholder=" {{ trans('langsite.Name')}} " required="required" data-error="Name is required.">

                                <div class="help-block with-errors"></div>

                            </div>

                            <div class="form-group col-md-6">

                                <input id="form_email" type="email"   name="email"  class="form-control" placeholder=" {{ trans('langsite.Email')}} "  required="required" data-error="Valid email is required.">

                                <div class="help-block with-errors"></div>

                            </div>

                            <div class="form-group col-md-6">

                                <input id="form_phone" type="tel" name="phone"  class="form-control" placeholder=" {{ trans('langsite.Phone')}} "  required="required" data-error="Phone is required">

                                <div class="help-block with-errors"></div>

                            </div>
                            
                            <div class="form-group col-md-6">
                                <select name="product" required class="custom-select form-control">
                                      <option selected  value="	{{ trans('langsite.Digital Marketing')}}"  >{{ trans('langsite.select-service')}}</option>
                                      
                                      	  @foreach($all_main_services->sortBy('status' )  as $NEWSs_val)

 	@foreach(  $NEWSs_val->get_description  as  $NEWSs_val_dec)
 	
 	                                    <option value="	{{  $NEWSs_val_dec->title}} "> {{  $NEWSs_val_dec->title}} </option>


                                
											 @endforeach
									 @endforeach
								
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

        </div>

    </div>

 
 
 
 
@endsection