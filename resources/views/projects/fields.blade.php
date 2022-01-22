


<div class=" col-sm-6  " id="admin_edit">
 
 <div class="form-group col-sm-12">
 <h1>en </h1>
    </div>

<div class="form-group col-sm-6">
    {!! Form::label('title', 'title:') !!}
	
 	  <input type="text" name="title_en" class="form-control" value="<?php if (isset($projects_en )){echo" $projects_en->title ";} ?>">
</div>


<!-- Last Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Governorate', 'Governorate:') !!}
 <input type="text" name="Governorate_en" class="form-control" value="<?php if (isset($projects_en )){echo" $projects_en->Governorate ";} ?>">

 </div>
    <div class="form-group col-sm-6">
    {!! Form::label('area', 'area:') !!}
 <input type="text" name="area_en" class="form-control" value="<?php if (isset($projects_en )){echo" $projects_en->area ";} ?>">

 </div>
    <div class="form-group col-sm-6">
    {!! Form::label('Country', 'Country:') !!}
 <input type="text" name="Country_en" class="form-control" value="<?php if (isset($projects_en )){echo" $projects_en->Country ";} ?>">

 </div>
    <div class="form-group col-sm-6">
    {!! Form::label(' floors', ' floors:') !!}
 <input type="text" name="Number_floors_en" class="form-control" value="<?php if (isset($projects_en )){echo" $projects_en->Number_floors ";} ?>">

 </div>
    <div class="form-group col-sm-6">
    {!! Form::label('Region', 'Region:') !!}
 <input type="text" name="Region_en" class="form-control" value="<?php if (isset($projects_en )){echo" $projects_en->Region ";} ?>">

 </div>
     




<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
 <textarea name="description_en" class="form-control"   >  <?php if (isset($projects_en )){echo" $projects_en->description ";} ?> </textarea>
		 <script> CKEDITOR.replace( 'description_en' );  </script>

 </div>



 </div>
  
<div class=" col-sm-6  admin_edit_ar  "     >
 
 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>
<!-- Last Updated By Field -->


 <div class="form-group col-sm-6">
    {!! Form::label('title', 'title:') !!}
	
 	  <input type="text" name="title_ar" class="form-control" value="<?php if (isset($projects_ar )){echo" $projects_ar->title ";} ?>">
</div>


<!-- Last Updated By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Governorate', 'Governorate:') !!}
 <input type="text" name="Governorate_ar" class="form-control" value="<?php if (isset($projects_ar )){echo" $projects_ar->Governorate ";} ?>">

 </div>
    <div class="form-group col-sm-6">
    {!! Form::label('area', 'area:') !!}
 <input type="text" name="area_ar" class="form-control" value="<?php if (isset($projects_ar )){echo" $projects_ar->area ";} ?>">

 </div>
    <div class="form-group col-sm-6">
    {!! Form::label('Country', 'Country:') !!}
 <input type="text" name="Country_ar" class="form-control" value="<?php if (isset($projects_ar )){echo" $projects_ar->Country ";} ?>">

 </div>
    <div class="form-group col-sm-6">
    {!! Form::label(' floors', ' floors:') !!}
 <input type="text" name="Number_floors_ar" class="form-control" value="<?php if (isset($projects_ar )){echo" $projects_ar->Number_floors ";} ?>">

 </div>
    <div class="form-group col-sm-6">
    {!! Form::label('Region', 'Region:') !!}
 <input type="text" name="Region_ar" class="form-control" value="<?php if (isset($projects_ar )){echo" $projects_ar->Region ";} ?>">

 </div>
     




<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
 <textarea name="description_ar" class="form-control"   >  <?php if (isset($projects_ar )){echo" $projects_ar->description ";} ?> </textarea>
		 <script> CKEDITOR.replace( 'description_ar' );  </script>

 </div>
 
 




 </div>
 
   
   
   
   <div class="form-group col-sm-6">
 
	
   <div class="form-group col-sm-12">
    {!! Form::label('google maps', 'maps:') !!}
 <textarea name="google_maps" class="form-control"   >  <?php if (isset($projects )){echo" $projects->google_maps ";} ?> </textarea>
 
 </div>
 
    <div class="form-group col-sm-12">

 
 
 <select class="form-control"   name="project_cat_id">
        <option value="1"  >Current projects </option>
        <option value="2"  >Previous  projects </option>
        <option value="3"  > Property for Sale    </option>
        <option value="4"  > Property for Rent     </option>
		
      </select>
	  </div>
	  
 
 
 
</div>
  
  
  
  
<div class="form-group col-sm-6">
 <div class="form-group col-sm-6">

 
 
	  {!! Form::label('image', 'image :') !!}
 	  <input type='file' name="image" onchange="readURL(this);" />

	    <img id="blah" src=" <?php if (isset($projects )){echo URL::to('/').'/images/'.$projects->image ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />
	</div>
<div class="form-group col-sm-6">

	
		  {!! Form::label('images', 'images :') !!}
		  
		  
		      <input type="file"   name="image_path[]" multiple  onchange="readURLicon(this);"    >
 
	</div>
	
</div>

		
		 <script  >

     function readURLicon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#icon')
                        .attr('src', e.target.result)
                        .width(50)
                        .height(50); 
 						
                 };

                reader.readAsDataURL(input.files[0]);
            }
        }</script>

		
		    <script  >

     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
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
    <a href="{!! route('projects.index') !!}" class="btn btn-default">Cancel</a>
</div>
