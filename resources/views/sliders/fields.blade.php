 
  <div class="content-wrapper">

<div class=" col-sm-6  " id="admin_edit">
 
 <div class="form-group col-sm-12">
 <h1>en </h1> </div>
<!-- Last Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'slug:') !!}
	 	  <input type="text" name="slug_en" class="form-control" value="<?php if (isset($slider_en )){echo" $slider_en->slug ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('title', 'title:') !!}
	
 	  <input type="text" name="title_en" class="form-control" value="<?php if (isset($slider_en )){echo" $slider_en->title ";} ?>">
</div>




<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
 <textarea name="description_en" class="form-control"   >  <?php if (isset($slider_en )){echo" $slider_en->description ";} ?> </textarea>
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

 </div>



 </div>
  
<div class=" col-sm-6  admin_edit_ar  "     >
 
 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>
<!-- Last Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'slug:') !!}
		 	  <input type="text" name="slug_ar" class="form-control" value="<?php if (isset($slider_ar )){echo" $slider_ar->slug ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('title', 'title:') !!}
			 	  <input type="text" name="title_ar" class="form-control" value="<?php if (isset($slider_ar )){echo" $slider_ar->title ";} ?>">

 </div>




<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
	 <textarea name="description_ar" class="form-control"   >  <?php if (isset($slider_ar )){echo" $slider_ar->description ";} ?> </textarea>
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
 
	  {!! Form::label('image', 'image :') !!}
 	  <input type='file' name="single_photo" onchange="readURLicon(this);" />

	    <img id="single_photo" src=" <?php if (isset($slider )){echo URL::to('/').'/images/'.$slider->single_photo ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />

</div>
   


		
		
		 <script  >

     function readURLicon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#single_photo')
                        .attr('src', e.target.result)
                        .width(50)
                        .height(50); 
 						
                 };

                reader.readAsDataURL(input.files[0]);
            }
        }</script>

		
		    
 



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sliders.index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>
