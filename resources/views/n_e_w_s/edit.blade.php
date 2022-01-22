@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            N E W S
        </h1>
   </section>
   <div class="content">
    



       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($nEWS, ['route' => ['nEWS.update', $nEWS->id], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data'  ]) !!}


                 <!-- Title Field -->
 <div class="content-wrapper">
     
     
     
         @if (session('status'))
    <div class="alert alert-success" style="text-align: center;
    font-size: 30px;
    font-weight: bold;
    padding: 33px; ">
        {{ session('status') }}
    </div>
@endif

 


<?php //  dd($nEWS->get_News_Photos );?>
<div class=" col-sm-6     " id="admin_edit">

 <div class="form-group col-sm-12   ">
 <h1>en </h1> </div>
 

@if ($errors->has('title_en'))
          <div class="form-group has-error"   >
                <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i>{{ $errors->first('title_en') }}
                  </label>
              </div>
@endif
 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   Title " type="text" name="title_en" class="form-control"   required="required" 	  value="<?php if (isset($News_en )){echo" $News_en->title ";} ?>"  >              
	  
 

</div>
    <br>            
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


          <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   alt "  type="text" name="main_img_alt_en" class="form-control" required="required"    value="<?php if (isset($News_en )){echo" $News_en->main_img_alt ";} ?>"   >
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->




        <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   meta description "  type="text" name="meta_description_en" class="form-control" required="required"   	  value="<?php if (isset($News_en )){echo" $News_en->meta_description	 ";} ?>" >
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

         <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   slug "   type="text" name="slug_en" class="form-control"  required="required"  value="<?php if (isset($News_en )){echo" $News_en->slug ";} ?>" >
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 
 
 
      <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   seo title "   type="text" name="seo_title_en" class="form-control" required="required"  	  value="<?php if (isset($News_en )){echo" $News_en->seo_title ";} ?>"  >
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  
  
  
  
 
  <div class="form-group ">
    {!! Form::label('parentid', 'categories :') !!}

<select class="form-control" name="cat_id">
 
   
   @foreach($categories as $category)
            <option  
<?php if (isset($nEWS)) { if($category->id == $nEWS->cat_id ){    echo'selected = selected' ;} }?>			
			style="<?php  if($category->parentid == 0 ){    echo'color: #dd4b39;  font-weight: bold;' ;} ?>  "
	value="{{$category->id}}">  {{$category->get_description[0]['title']}} </option>
        @endforeach
		
		
</select>

 </div>
 
  <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


 
<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
 <textarea  id="editor2"  name="description_en" class="form-control"   required    >  <?php if (isset($News_en )){echo" $News_en->description ";} ?>  </textarea>
	
 <script>
    CKEDITOR.replace('description_en', {
      height: 300,

      // Configure your file manager integration. This example uses CKFinder 3 for PHP.
       filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
            //  filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
     // filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
     // filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
  </script>
</div></div>

 
 <div class=" col-sm-6 admin_edit_ar   "  style="direction: rtl;" >

 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>
 
 
 
 

        <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="  Title "    type="text" name="title_ar" class="form-control "  required="required"  		  value="<?php if (isset($News_ar )){echo" $News_ar->title ";} ?>"  >
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 
 
 

        <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="  alt  "   type="text" name="main_img_alt_ar" class="form-control"    required="required"  		  value="<?php if (isset($News_ar )){echo" $News_ar->main_img_alt ";} ?>"  >
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



        <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   meta description   "   type="text" name="meta_description_ar" class="form-control"    required="required"   	  value="<?php if (isset($News_ar )){echo" $News_ar->meta_description ";} ?>">
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

  
  
  


        <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   slug     "  type="text" name="slug_ar" class="form-control"   required="required" 	  value="<?php if (isset($News_ar )){echo" $News_ar->slug ";} ?>"  >
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

 

        <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   seo title     "   type="text" name="seo_title_ar" class="form-control"   required="required"  	  value="<?php if (isset($News_ar )){echo" $News_ar->seo_title ";} ?>"   >
 

</div>
         
     <br>          
         
  
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
  
  

          {!! Form::label('Date', 'Date :') !!}

 <div class="input-group date">
     

                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input 
autocomplete="off" type="text"  name="created_at"  class="form-control pull-right" id="datepicker" required="required"   
                  
                  
                  value=" <?php if (isset($nEWS )){echo  " $nEWS->created_at " ;} ?> ">
                </div>
 
 <!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 
    <br> 
 
 <!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
	 <textarea  id="editor1"  name="description_ar" class="form-control"   >    <?php if (isset($News_ar )){echo" $News_ar->description ";} ?> </textarea>

 	 <script>
    CKEDITOR.replace('description_ar', {
      height: 300,

      // Configure your file manager integration. This example uses CKFinder 3 for PHP.
       filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
            //  filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
     // filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
     // filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images'
    });
  </script>
 		   

</div>

</div>
 
 
 
    
<div class="form-group col-sm-6">
 
	  {!! Form::label('single_photo', 'single_photo :') !!}
 	  <input type='file' name="single_photo" onchange="readURL(this);" /  >

	    <img id="single_photo" src=" <?php if (isset($nEWS )){echo URL::to('/').'/images/'.$nEWS->single_photo ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />

</div>


  
 <div class="form-group col-sm-6">
 
	  {!! Form::label('icon', 'icon :') !!}
 	  <input type='file' name="icon" onchange="readURLicon(this);" /   >

	    <img id="icon" src=" <?php if (isset($nEWS )){echo URL::to('/').'/images/'.$nEWS->icon ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />

</div>




  <div class="form-group col-sm-6">
    {!! Form::label('photos_id', 'Photos Id:') !!}
    <input type="file"   name="photos_id[]" multiple    >
	 

<?php if (isset($nEWS )){  ?>
 @foreach($nEWS->get_News_Photos as $products_val)
            <a href="{{ URL::to('/').'/site/admin/ajax_del_news_photo/'.$products_val->id.'/'.$products_val->news_id}}"  
             class="  btn-xs"  >
            <i class="glyphicon glyphicon-trash"></i></a>
             <img id="Photo{{ $products_val->id }}/{{ $products_val->news_id }}" 
			 src="{{ URL::to('/').'/images/'. $products_val->single_photo_gallery }}"  width="50" height="50"> 
            @endforeach
			
			
<?php } ?>
	



	
</div>



    
 

 
<!-- Slug Field -->


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary','data-toggle' => 'modal' ,'data-target' => '#myModal' ]) !!}
    
    
     
    
    <a href="{!! route('nEWS.index') !!}" class="btn btn-default">Cancel</a>
</div>
 </div >

                    
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
 
 
@endsection