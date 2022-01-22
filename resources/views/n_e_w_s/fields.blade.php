<!-- Title Field -->
 <div class="content-wrapper">
<?php //  dd($nEWS->get_News_Photos );?>
<div class=" col-sm-6  " id="admin_edit">

 <div class="form-group col-sm-12">
 <h1>en </h1> </div>
 
 
          <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   Title " type="text" name="title_en" class="form-control" 
	  value="<?php if (isset($News_en )){echo" $News_en->title ";} ?>">              
	  
 

</div>
                
  
<!------------------------------------------------------------------------------------------------------------------------------->


          <div class="form-group has-error" STYLE="    DISPLAY: NONE; " >
                  <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                    error</label>
                 </div>

 
 <div class="input-group">

                  <div class="input-group-addon">
                    <i class="fa fa-laptop"></i>
                 
                  </div>
	  <input  placeholder="   alt "  type="text" name="main_img_alt_en" class="form-control" 
	  value="<?php if (isset($News_en )){echo" $News_en->main_img_alt ";} ?>">
 

</div>
         
         
         
         
<div class="form-group col-sm-6">
    {!! Form::label('alt', 'alt:') !!}
 	  <input type="text" name="main_img_alt_en" class="form-control" 
	  value="<?php if (isset($News_en )){echo" $News_en->main_img_alt ";} ?>">

 </div> 
 
 

 
 <!------------------------------------------------->
<div class="form-group col-sm-6">
    {!! Form::label('meta description', 'meta description:') !!}
 	  <input type="text" name="meta_description_en" class="form-control" 
	  value="<?php if (isset($News_en )){echo" $News_en->meta_description	 ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
		 	  <input type="text" name="slug_en" class="form-control"
			  value="<?php if (isset($News_en )){echo" $News_en->slug ";} ?>">

 </div>
 
 <div class="form-group col-sm-6">
    {!! Form::label('seo title', 'seo title:') !!}
		 	  <input type="text" name="seo_title_en" class="form-control"
			  value="<?php if (isset($News_en )){echo" $News_en->seo_title ";} ?>">

 </div>
 
  <div class="form-group col-sm-6">
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
 
<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
 <textarea  id="editor2"  name="description_en" class="form-control"   > 
 <?php if (isset($News_en )){echo" $News_en->description ";} ?> </textarea>
	
		 <script> CKEDITOR.replace( 'description_en' );  </script>

</div></div>

 
 <div class=" col-sm-6 admin_edit_ar   "  >

 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
	 	  <input type="text" name="title_ar" class="form-control " 
		  value="<?php if (isset($News_ar )){echo" $News_ar->title ";} ?>">

 </div>
 <div class="form-group col-sm-6">
    {!! Form::label('alt', 'alt:') !!}
	 	  <input type="text" name="main_img_alt_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->main_img_alt ";} ?>">

 </div>
 <div class="form-group col-sm-6">
    {!! Form::label('meta description', 'meta description:') !!}
	 	  <input type="text" name="meta_description_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->meta_description ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
	 	  <input type="text" name="slug_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->slug ";} ?>">

</div>

<div class="form-group col-sm-6">
    {!! Form::label('seo title', 'seo title:') !!}
	 	  <input type="text" name="seo_title_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->seo_title ";} ?>">

</div>


<div class="form-group col-sm-6">
    {!! Form::label('status', 'sort data  :') !!}

<select class="form-control" name="status">
 	  <option  value="8881"  >  select  </option>

   <?php
   if (isset($nEWS )){
$sum = 0;
for($i = 1; $i<=20; $i++) {
	?>
	  <option   <?php  if($i == $nEWS->status ){    echo'selected = selected' ;}  ?>	  value="<?php echo $i ;?> "> <?php echo $i ;?> </option>
	  
	<?php
 }
   }
?>
		
		
</select>

 </div>
 
 
 <!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
	 <textarea  id="editor1"  name="description_ar" class="form-control"   >  <?php if (isset($News_ar )){echo" $News_ar->description ";} ?> </textarea>

 	
 		   

</div>

</div>
 
 
 
    
<div class="form-group col-sm-6">
 
	  {!! Form::label('single_photo', 'single_photo :') !!}
 	  <input type='file' name="single_photo" onchange="readURL(this);" />

	    <img id="single_photo" src=" <?php if (isset($nEWS )){echo URL::to('/').'/images/'.$nEWS->single_photo ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />

</div>


  
 <div class="form-group col-sm-6">
 
	  {!! Form::label('icon', 'icon :') !!}
 	  <input type='file' name="icon" onchange="readURLicon(this);" />

	    <img id="icon" src=" <?php if (isset($nEWS )){echo URL::to('/').'/images/'.$nEWS->icon ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />

</div>




  <div class="form-group col-sm-6">
    {!! Form::label('photos_id', 'Photos Id:') !!}
    <input type="file"   name="photos_id[]" multiple    >
	 

<?php if (isset($nEWS )){  ?>
 @foreach($nEWS->get_News_Photos as $products_val)
            <a href="{{ URL::to('/').'/admin/ajax_del_news_photo/'.$products_val->id.'/'.$products_val->news_id}}"  
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('nEWS.index') !!}" class="btn btn-default">Cancel</a>
</div>
 </div >