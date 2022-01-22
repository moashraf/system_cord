@extends('n_e_w_s.master')
@section('content')
<div class="row">
<div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
<div class="statbox widget box box-shadow">
<div class="widget-header">
<div class="row">
<div class="col-xl-12 col-md-12 col-sm-12 col-12">
<h4>Custom styles</h4>
</div>
</div>
</div>
<div class="widget-content widget-content-area">
    {!! Form::open(['route' => 'nEWS.store' ,'files' => true,'enctype' => 'multipart/form-data' ,'style' => 'padding: 30px;' ]) !!}
  <input type="hidden" name="source"  value="s"  />

<div class="form-row">
    
    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01">  Date </label>
  <input  class="form-control"  type="date" name="date1" />
</div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01"> Client Name  </label>
  <input  class="form-control"  type="text" name="title_ar" />
</div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01">  Client Title</label>
  <input  class="form-control"  type="text" name="main_img_alt_ar" />
</div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01">
Client Company  </label>
  <input  class="form-control"  type="text" name="slug_ar" />
</div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01">  Client Phone </label>
  <input  class="form-control"  type="text" name="seo_title_ar" />
</div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01"> Client Mail   </label>
  <input  class="form-control"  type="text" name="description_ar" />
</div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01"> Client Website  </label>
  <input  class="form-control"  type="text" name="op10" />
</div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01"> Client Project Type  </label>
     <select    class="form-control"  name="op9"   class="browser-default custom-select select-curr  ency"   >
               
  <option value="Digital Marketing">Digital Marketing</option>
  <option value="Social Media Marketing">Social Media Marketing</option>

  <option value="SEO (SEARCH ENGINE OPTIMIZATION)">SEO (SEARCH ENGINE OPTIMIZATION)</option>
  <option value="Content Marketing">Content Marketing</option>
  <option value="Conversion Rate Optimization">Conversion Rate Optimization</option>
  <option value="Google Ads">Google Ads</option>
  <option value="Web Development">Web Development</option>
  <option value="Mobile Apps Development">Mobile Apps Development</option>
  <option value="Video  Motion graphic"  >Video  Motion graphic</option>
  <option value="Video  Visual effects"  >Video  Visual effects</option>
    <option  value="Music Production"  >Music Production</option>

  <option value="Outsourcing & Franchising"  >Outsourcing & Franchising</option>
  <option value="Graphics & Photography"  >Graphics & Photography</option>
  <option value="Multiple services"  >Multiple services</option>
  <option value="Others"  >Others</option>


              </select>
              
              
              
              </div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01"> Comment  </label>
<textarea  class="form-control"    id="" cols="30" rows="3" name="op7"></textarea> 
</div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01">   Source </label>

  <select  class="form-control" name="op6"  class="browser-default custom-select select-curr  ency"   >
 
                <option value="Landline">Landline  </option>
                  <option    value="Mobile">Mobile </option>

                <option value="Whatsapp">Whatsapp </option>
                <option value="Email">Email </option>
                <option value="Social Media">Social Media </option>
                  <option value="One page">One Page </option>

                <option value="Other">Other</option>
              </select>
              
              
 </div>

    
    
<div class="col-md-4 mb-4">
<label for="validationCustom01">   
Mobile
ask for call back Date</label>
<input class="form-control" type="date" name="date2" >
</div>


<div class="col-md-4 mb-4">
<label for="validationCustom01">  ask for call</label>
<select class="form-control" name="op13">
<option value="Yes">Yes</option>
<option value="NO">NO </option>
</select>

</div>


<div class="col-md-4 mb-4">
<label for="validationCustom01">   Sales Person </label>
  <select  class="form-control" name="date4"
                class="browser-default custom-select select-curr  ency"    >
                @foreach ($person as $student)
                 @if(empty($student->Person))
               <a type="hidden" id="custId" name="custId" >
                @else
                 <option value="{{$student->Person}} ">  {{$student->Person}}   </option>
                   @endif
                @endforeach

               
              </select></div>


<div class="col-md-4 mb-4">
<label for="validationCustom01"> Client Status  </label>
  <select   class="form-control"   name="op11"
                class="browser-default custom-select select-curr  ency"   >
                 <option    value="progress">In Progress </option>
                <option value="So close"> So close  </option>
            
                <option value="Done">Done </option>
                <option value="Not achieved"> Not achieved  </option>
                <option value="Other">Other</option>
              </select></div>

 
 
</div>
 
<button class="btn btn-primary mt-3" type="submit">Submit  </button>
</form>
 
 
</div>
</div>
</div>
</div>
                            
@endsection