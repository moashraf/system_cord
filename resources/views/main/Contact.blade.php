@extends('main.master')
@section('content') 
 
			  <div class="top-banner animatedBackground" data-bg-img="{{  asset('/images') }}/05.png">

        <div class="banner-caption">

            <h2>  {{ trans('langsite.Contact Us')}}  </h2>

        </div>

    </div>



    <section class="contact-1" data-bg-img="{{  asset('/images') }}/02.png">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 col-md-7">

                    <div class="contact-main contact-page">

  				   {!! Form::open( [ 'route' =>  'orders','id' =>  'contact-form','name' =>  'contact', 'method' => 'post', 'class' => 'row'] ) !!}

                            <div class="messages"></div>

                            <div class="form-group col-md-6">

                                <input id="form_name" type="text"  name="title"  class="form-control" placeholder=" {{ trans('langsite.Name')}} " required="required" data-error="Name is required.">

                                <div class="help-block with-errors"></div>

                            </div>

                            <div class="form-group col-md-6">

                                <input id="form_email" type="email"   name="email"  class="form-control" placeholder=" {{ trans('langsite.Email')}} "  required="required" data-error="Valid email is required.">

                                <div class="help-block with-errors"></div>

                            </div>

                            <div class="form-group col-md-12">

                                <input id="form_phone" type="tel" name="phone"  class="form-control" placeholder=" {{ trans('langsite.Phone')}} "  required="required" data-error="Phone is required">

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

                <div class="col-lg-5 col-md-5 ml-auto sm-mt-5">
                    <ul class="contact-info list-unstyled visibility-1s">
                        <li class="mb-4"><i class="fas fa-map-marked-alt"></i><span>   {{ trans('langsite.Address')}}   </span>
                            <p>  {!! site_settings('Location')  !!}  </p>
                        </li>
                        <li class="mb-4"><i class="fas fa-mail-bulk"></i><span>   {{ trans('langsite.Email')}}   </span><a href="mailto:  {!! site_settings('Mail')  !!} ">  {!! site_settings('Mail')  !!}  </a>
                        </li>
                        <li class="mb-4"><i class="fas fa-phone-volume"></i><span>  {{ trans('langsite.HOTLINE')}}   </span><a href="tel:{!! site_settings('phone')  !!} ">{!! site_settings('phone')  !!} </a>
                        </li>
                      
                        
                    </ul>
                </div>

            </div>

        </div>



						{!!  site_settings('google_maps') !!}



    </section>
  
   
 

 
   @endsection
