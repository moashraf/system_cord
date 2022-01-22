<!-- Title Field -->


<div class=" col-sm-6  " id="admin_edit">

 <div class="form-group col-sm-12">
 <h1>en </h1> </div>
 
 
 
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
 	  <input type="text" name="title_en" class="form-control" 
	  value="<?php if (isset($categories_services_en )){echo" $categories_services_en->title ";} ?>">

 </div> 
 
<!-- Parentid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentid', 'Parent :') !!}

<select class="form-control" name="parentid">
 
  <option value="1" selected = selected >Main</option>
  
   @foreach($categories as $category)
            <option  
			<?php if (isset($categoriesServices )) { if($category->id == $categoriesServices->parentid ){    echo'selected = selected' ;} } ?>	
			
			style="<?php  if($category->parentid == 1 ){    echo'color: #dd4b39;  font-weight: bold;' ;} ?>  "
	value="{{$category->id}}">  {{$category->get_categories_services_ar_description[0]['title']}} </option>
        @endforeach
		
		
</select>

 </div>
 
 
<!------------------------------------------------->
<div class="form-group col-sm-6">
    {!! Form::label('alt', 'alt:') !!}
 	  <input type="text" name="main_img_alt_en" class="form-control" 
	  value="<?php if (isset($categories_services_en )){echo" $categories_services_en->main_img_alt ";} ?>">

 </div> 
 <!------------------------------------------------->
<div class="form-group col-sm-6">
    {!! Form::label('meta description', 'meta description:') !!}
 	  <input type="text" name="meta_description_en" class="form-control" 
	  value="<?php if (isset($categories_services_en )){echo" $categories_services_en->meta_description	 ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
		 	  <input type="text" name="slug_en" class="form-control"
			  value="<?php if (isset($categories_services_en )){echo" $categories_services_en->slug ";} ?>">

 </div>
 
 <div class="form-group col-sm-6">
    {!! Form::label('seo title', 'seo title:') !!}
		 	  <input type="text" name="seo_title_en" class="form-control"
			  value="<?php if (isset($categories_services_en )){echo" $categories_services_en->seo_title ";} ?>">

 </div>
<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
 <textarea name="description_en" class="form-control"   > 
 <?php if (isset($categories_services_en )){echo" $categories_services_en->description ";} ?> </textarea>
	
		 <script> CKEDITOR.replace( 'description_en' );  </script>

</div></div>

 
 <div class=" col-sm-6 admin_edit_ar   "  >

 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
	 	  <input type="text" name="title_ar" class="form-control" 
		  value="<?php if (isset($categories_services_ar )){echo" $categories_services_ar->title ";} ?>">

 </div>
 
<!-- Parentid Field -->
 
 
 
 <div class="form-group col-sm-6">
    {!! Form::label('alt', 'alt:') !!}
	 	  <input type="text" name="main_img_alt_ar" class="form-control" 
		  value="<?php if (isset($categories_services_ar )){echo" $categories_services_ar->main_img_alt ";} ?>">

 </div>
 <div class="form-group col-sm-6">
    {!! Form::label('meta description', 'meta description:') !!}
	 	  <input type="text" name="meta_description_ar" class="form-control" 
		  value="<?php if (isset($categories_services_ar )){echo" $categories_services_ar->meta_description ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
	 	  <input type="text" name="slug_ar" class="form-control" 
		  value="<?php if (isset($categories_services_ar )){echo" $categories_services_ar->slug ";} ?>">

</div>

<div class="form-group col-sm-6">
    {!! Form::label('seo title', 'seo title:') !!}
	 	  <input type="text" name="seo_title_ar" class="form-control" 
		  value="<?php if (isset($categories_services_ar )){echo" $categories_services_ar->seo_title ";} ?>">

</div>
 <!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
	 <textarea name="description_ar" class="form-control"   >  <?php if (isset($categories_services_ar )){echo" $categories_services_ar->description ";} ?> </textarea>

 	
		 <script> CKEDITOR.replace( 'description_ar' );  </script>

</div>

</div>
 
 
 
    
<div class="form-group col-sm-6">
 
	  {!! Form::label('single_photo', 'single_photo :') !!}
 	  <input type='file' name="single_photo" onchange="readURL(this);" />

	    <img id="single_photo" src=" <?php if (isset($categoriesServices )){echo URL::to('/').'/images/'.$categoriesServices->single_photo ;} ?>" style="    
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
    <a href="{!! route('categoriesServices.index') !!}" class="btn btn-default">Cancel</a>
</div>
