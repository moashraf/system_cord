
 <div class=" col-sm-6  " id="admin_edit">
 
 <div class="form-group col-sm-12">
 <h1>en </h1> </div>
<!-- Last Updated By Field -->

<div class="form-group col-sm-12">
    {!! Form::label('title', 'title:') !!}
	
 	  <input type="text" name="title_en" class="form-control" value="<?php if (isset($types_en )){echo" $types_en->title ";} ?>">
 </div>


<div class="form-group col-sm-6">
    {!! Form::label('job_title', '   slug:') !!}
	 	  <input type="text" name="slug_en" class="form-control" value="<?php if (isset($types_en )){echo" $types_en->slug ";} ?>">

 </div>
 <div class="form-group col-sm-6">
    {!! Form::label('job_title', 'job itle:') !!}
	 	  <input type="text" name="job_title_en" class="form-control" value="<?php if (isset($types_en )){echo" $types_en->job_title ";} ?>">

 </div>



<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
 <textarea name="description_en" class="form-control"   >  <?php if (isset($types_en )){echo" $types_en->description ";} ?> </textarea>
		 <script> CKEDITOR.replace( 'description_en' );  </script>

 </div>



 </div>
  
<div class=" col-sm-6  admin_edit_ar  "     >
 
 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>
<!-- Last Updated By Field -->

<div class="form-group col-sm-12">
    {!! Form::label('title', 'title:') !!}
			 	  <input type="text" name="title_ar" class="form-control" value="<?php if (isset($types_ar )){echo" $types_ar->title ";} ?>">

 </div>

<div class="form-group col-sm-6">
    {!! Form::label('slug', 'job title:') !!}
		 	  <input type="text" name="job_title_ar" class="form-control" value="<?php if (isset($types_ar )){echo" $types_ar->job_title ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'slug:') !!}
		 	  <input type="text" name="slug_ar" class="form-control" value="<?php if (isset($types_ar )){echo" $types_ar->slug ";} ?>">

 </div>




<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
	 <textarea name="description_ar" class="form-control"   >  <?php if (isset($types_ar )){echo" $types_ar->description ";} ?> </textarea>
		 <script> CKEDITOR.replace( 'description_ar' );  </script>

 </div>



 </div>
 
   
<div class="form-group col-sm-6">
 
	  {!! Form::label('image', 'image :') !!}
 	  <input type='file' name="single_photo" onchange="readURL(this);" />

	    <img id="single_photo" src=" <?php if (isset($types )){echo URL::to('/').'/images/'.$types->single_photo ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />

</div>
  
  
 

		
		
		 <script  >

     function readURL(input) {
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
    <a href="{!! route('types.index') !!}" class="btn btn-default">Cancel</a>
</div>
