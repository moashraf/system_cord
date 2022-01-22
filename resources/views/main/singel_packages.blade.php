@extends('main.master')
@section('content')

    <div class="container packages-btns">
        <div class="row">
      
			@foreach($ِall_categories as $NEWSs_val)
 @foreach(  $NEWSs_val->get_description  as  $NEWSs_val_dec)
 
					
            <div class="col-md-2 service-show-drop">
                
                <div class="filter-packages-btns">
                    <a href="{{ URL::to('/').'/'.App::getLocale().'/page/Package/'.$NEWSs_val_dec->slug }}">
                        <div class="packages-title">
                            <img src="  {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}  " alt="  {{ $NEWSs_val_dec->main_img_alt }}    ">
                                <p> {{ $NEWSs_val_dec->title }}   </p>
                            <span> {{ trans('langsite.More')}} </span>
                        </div> 
                    </a>
                </div>

                
                                
  <!--              <div class="service-dropdown none">-->
       
  <!--@foreach(  $NEWSs_val->get_all_post_on_cat  as  $NEWSs_val_dec_OO)-->
  <!-- @foreach(  $NEWSs_val_dec_OO->get_description  as  $get_description_val)-->

		<!--		 <li>-->
  <!--                      <a href="#price{{ $NEWSs_val->id }}">     {{ $get_description_val->title }}    </a>-->
  <!--                  </li>  -->
					
		<!--			   <div class="dropdown-divider"></div> -->
 	<!--								 @endforeach-->
 	<!--								 @endforeach-->
					
					
  <!--              </div>-->
            </div>


							 @endforeach
									 @endforeach




           </div>
    </div>

    <br>
	
	
	


	@foreach(  $categories_SEO->sortBy('status' ) as $NEWSs_val)
    <section id="price{{ $NEWSs_val->id }}"></section>
    <section id="pricing-sec" class="price">
        <div class="packages-title">
		
		
		

			@foreach(  $NEWSs_val->get_description   as  $itm2)
 
             <h2>    {{  $itm2->title}}</h2>
            <p>  {!!  $itm2->description !!}  </p>
			
   						 					 
  						 					 @endforeach
  						 					 @endforeach
			
			
        </div>

        <div class="owl-carousel owl-packages owl-theme">
		  <?php  $starter2 = 0 ;   ?>
		@foreach($SEO->sortBy('status' ) as $NEWSs_val)
 
	    <div class='pricing pricing-palden item'>


 	@foreach(  $NEWSs_val->sortBy('status' ) as  $NEWSs_val_dec)
 	@foreach(  $NEWSs_val_dec->get_description  as  $itm)
        <?php  $starter2++;   ?>  

                <div class='pricing-item   
				@foreach($SEO as $user) 
    @if($starter2 % 2 == 0)
pricing__item--featured  
    @endif
@endforeach '>
                    <div class='pricing-deco   <?php  if($NEWSs_val_dec->id  == 385 || 
$NEWSs_val_dec->id  == 293 || 
$NEWSs_val_dec->id  == 334 || 
$NEWSs_val_dec->id  == 377  
					) {echo"recommended";  } ?>    '>
                        <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                            <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                            <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                            <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                        </svg>
                        <div class='pricing-price'><span class='pricing-currency'></span><?php  echo $starter2;     ?>  
                        </div>
                        <h3 class='pricing-title'>   {{  $itm->title}}      </h3>
                    </div>
                    <ul class='pricing-feature-list'>
			  <li class='pricing-feature pricing-feature-check'><i class="fa fa-check"></i>   {{  $itm->seo_title}}   </li>

                         <p>    {!!  $itm->description !!}       </p>
				  <li class='pricing-feature pricing-feature-check'><i class="fa fa-check"></i>   {{  $itm->meta_description}}   </li>

                    </ul>
                    
                    <button type="button" class='btn btn-theme price-btn' data-toggle="modal" data-target="#package-one">{{ trans('langsite.choose plan')}}</button>
                </div>



						 					 @endforeach
						 					 @endforeach
											 	 </div>
						 					 @endforeach
										
 									 
									 
	 



             
			
			
			

       </div>

     

    </section>



  <!-- popup -->
        <div class="modal fade" id="package-one" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Package name</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body ser-form">
  				   {!! Form::open( [ 'route' =>  'orders', 'name' =>  'contact', 'method' => 'post',  ] ) !!}
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" placeholder="{{ trans('langsite.Name')}}" name="title" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm" required>
                                        </div>
                                    </div>
                    <input type="hidden"  name="product"   placeholder="col-form-label-sm"   value=" {{ $NEWSs_val_dec->title }}">
                    <input type="hidden"  name="quantity"   placeholder="col-form-label-sm"   value=" {{ $NEWSs_val_dec->title }}  ">
 
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="email" placeholder="{{ trans('langsite.Email')}}" name="email"  class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="tel" placeholder="{{ trans('langsite.Phone')}}" name="phone" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm" required>
                                        </div>
                                    </div>
                                    
                             

                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input type="text" placeholder="{{ trans('langsite.Message')}}" name="body" class="form-control form-control-sm" id="colFormLabelSm" placeholder="col-form-label-sm" required>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-theme" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-sm btn-theme">Submit</button>
                                    </div>
                                </form>
                            </div>

                            </div>
                        </div>
        </div>





 
									 
   @endsection
