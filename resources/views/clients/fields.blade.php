<!-- =====================================================================================================================================-->


<div class=" col-sm-6  " id="admin_edit">
 
 <div class="form-group col-sm-12">
 <h1>en </h1> </div>
<!-- Last Updated By Field -->

<div class="form-group col-sm-12">
    {!! Form::label('title', 'title:') !!}
	
 	  <input type="text" name="title_en" class="form-control" value="<?php if (isset($clients_en )){echo" $clients_en->title ";} ?>">
</div>


<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
 <textarea name="description_en" class="form-control"   >  <?php if (isset($clients_en )){echo" $clients_en->description ";} ?> </textarea>
 
 </div>



 </div>
  <!-- =====================================================================================================================================-->

<div class=" col-sm-6  admin_edit_ar"     >
 
 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>

<div class="form-group col-sm-12">
    {!! Form::label('title', 'title:') !!}
			 	  <input type="text" name="title_ar" class="form-control" value="<?php if (isset($clients_ar )){echo" $clients_ar->title ";} ?>">

 </div>


<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'description:') !!}
	 <textarea name="description_ar" class="form-control"   >  <?php if (isset($clients_ar )){echo" $clients_ar->description ";} ?> </textarea>
 
 </div>



 </div>
 
   
  
    <!-- =====================================================================================================================================-->

  
  
<div class="form-group col-sm-6">
 <div class="form-group col-sm-6">

 
 
	  {!! Form::label('image', 'image :') !!}
 	  <input type='file' name="single_photo" onchange="readURL(this);" />

	    <img id="blah" src=" <?php if (isset($clients )){echo URL::to('/').'/images/'.$clients->single_photo ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />
	</div>
<div class="form-group col-sm-6">

	
		  {!! Form::label('icon', 'icon :') !!}
 	  <input type='file' name="icon" onchange="readURLicon(this);" />

	    <img id="icon" src=" <?php if (isset($clients )){echo URL::to('/').'/images/'.$clients->icon ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />
	</div>
	
</div>
  
  
    <!-- =====================================================================================================================================-->
	
		
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

		  <!-- =====================================================================================================================================-->

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
  <!-- =====================================================================================================================================-->

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clients.index') !!}" class="btn btn-default">Cancel</a>
</div>







