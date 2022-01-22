@extends('main.master')
@section('content')

 
  	@foreach(  $services_singl->get_description  as  $categoriess_val_dec)

  
    <div class="top-banner animatedBackground" data-bg-img="{{  asset('/images') }}/05.png">

        <div class="banner-caption">

            <h2> {{ $categoriess_val_dec->title }}   </h2>

        </div>

    </div>



    <div class="single-blog">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="single-blog-img">

                        <img src=" {{ URL::to('/').'/images/'.$services_singl->single_photo}} " alt=" {{ $categoriess_val_dec->main_img_alt }}  ">

                    </div>
 

                    <div class="single-blog-desc">

                        <h2> {{ $categoriess_val_dec->title }}   </h2>

                        <p>    {!! $categoriess_val_dec->description !!}   </p>

                    </div>

                </div>
 
                <div class="col-md-12 single-blog-desc">

                    <h2>   {{ trans('langsite.Order_this_Service')}}  </h2>
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

    </div>

 
 									 @endforeach

 
 
@endsection