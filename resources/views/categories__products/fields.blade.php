<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>
 <!-- Body Field -->
<div class="form-group col-sm-6">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>


<!-- cat_id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentid', 'cat:') !!}
    <select name="parentid" class="form-control">
        @foreach($cat as $category)
            <option  
			style="<?php  if($category->parentid ==  0 ){    echo'color: #dd4b39;  font-weight: bold;' ;} ?>  "
	value="{{$category->id}}">  {{$category->title}} </option>
        @endforeach
    </select>

 </div>
 
<!-- Single Photo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('single_photo', 'Single Photo:') !!}
    {!! Form::file('single_photo') !!}
</div>
<div class="clearfix"></div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categoriesProducts.index') !!}" class="btn btn-default">Cancel</a>
</div>
