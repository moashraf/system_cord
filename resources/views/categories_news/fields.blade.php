<!-- Title Field -->
 
<div class=" col-sm-6  " id="admin_edit">

 <div class="form-group col-sm-12">
 <h1>en  category </h1> </div>
 
 
 
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
 	  <input type="text" name="title_en" class="form-control" 
	  value="<?php if (isset($categories_news_en )){echo" $categories_news_en->title ";} ?>">

 </div> 
 
<!-- Parentid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentid', 'Parent :') !!}

<select class="form-control" name="parentid">
  
       <option style="color: #dd4b39;  font-weight: bold;' ;"  value="0">   تصنيف رئيسي </option>

   @foreach($categories as $category)
            <option  
			<?php if (isset($categoriesNews )) { if($category->id == $categoriesNews->parentid ){    echo'selected = selected' ;} } ?>	
			
			style="<?php  if($category->parentid ==  0 ){    echo'color: #dd4b39;  font-weight: bold;' ;} ?>  "
	value="{{$category->id}}">  {{$category->get_description[0]['title']}} </option>
        @endforeach
		
		
</select>

 </div>
 
 
<!------------------------------------------------->
<div class="form-group col-sm-6">
    {!! Form::label('alt', 'alt:') !!}
 	  <input type="text" name="main_img_alt_en" class="form-control" 
	  value="<?php if (isset($categories_news_en )){echo" $categories_news_en->main_img_alt ";} ?>">

 </div> 
 <!------------------------------------------------->
<div class="form-group col-sm-6">
    {!! Form::label('meta description', 'meta description:') !!}
 	  <input type="text" name="meta_description_en" class="form-control" 
	  value="<?php if (isset($categories_news_en )){echo" $categories_news_en->meta_description	 ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
		 	  <input type="text" name="slug_en" class="form-control"
			  value="<?php if (isset($categories_news_en )){echo" $categories_news_en->slug ";} ?>">

 </div>
 
 <div class="form-group col-sm-6">
    {!! Form::label('seo title', 'seo title:') !!}
		 	  <input type="text" name="seo_title_en" class="form-control"
			  value="<?php if (isset($categories_news_en )){echo" $categories_news_en->seo_title ";} ?>">

 </div>
<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
 <textarea  id="editor2" name="description_en" class="form-control"   > 
 <?php if (isset($categories_news_en )){echo" $categories_news_en->description ";} ?> </textarea>
	
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

 
 <div class=" col-sm-6 admin_edit_ar   "  >

 <div class="form-group col-sm-12">
 <h1>ar   category </h1> </div>
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
	 	  <input type="text" name="title_ar" class="form-control" 
		  value="<?php if (isset($categories_news_ar )){echo" $categories_news_ar->title ";} ?>">

 </div>
 
<!-- Parentid Field -->
 
 
 
 <div class="form-group col-sm-6">
    {!! Form::label('alt', 'alt:') !!}
	 	  <input type="text" name="main_img_alt_ar" class="form-control" 
		  value="<?php if (isset($categories_news_ar )){echo" $categories_news_ar->main_img_alt ";} ?>">

 </div>
 <div class="form-group col-sm-6">
    {!! Form::label('meta description', 'meta description:') !!}
	 	  <input type="text" name="meta_description_ar" class="form-control" 
		  value="<?php if (isset($categories_news_ar )){echo" $categories_news_ar->meta_description ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
	 	  <input type="text" name="slug_ar" class="form-control" 
		  value="<?php if (isset($categories_news_ar )){echo" $categories_news_ar->slug ";} ?>">

</div>

<div class="form-group col-sm-6">
    {!! Form::label('seo title', 'seo title:') !!}
	 	  <input type="text" name="seo_title_ar" class="form-control" 
		  value="<?php if (isset($categories_news_ar )){echo" $categories_news_ar->seo_title ";} ?>">

</div>
 <!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
	 <textarea  id="editor1" name="description_ar" class="form-control"   >  <?php if (isset($categories_news_ar )){echo" $categories_news_ar->description ";} ?> </textarea>

 	
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
 	  <input type='file' name="single_photo" onchange="readURL(this);" />

	    <img id="single_photo" src=" <?php if (isset($categoriesNews )){echo URL::to('/').'/images/'.$categoriesNews->single_photo ;} ?>" style="    
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
    <a href="{!! route('categoriesNews.index') !!}" class="btn btn-default">Cancel</a>
 {!! Form::close() !!}
	 <?php if (isset($categoriesNews )) { ?>
 
    {!! Form::open(['route' => ['categoriesNews.destroy', $categoriesNews->id], 'method' => 'delete']) !!}
                <div class='btn-group' style="
    padding: 38px;
" >
                     {!! Form::button('<i class="glyphicon glyphicon-trash"> delete </i>',
					 ['type' => 'submit', 'class' => 'btn btn-danger  ', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
				
 <?php }?>
</div>
