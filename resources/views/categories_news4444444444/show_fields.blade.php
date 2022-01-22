<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $categoriesNews->id !!}</p>
</div>

<!-- Parentid Field -->
<div class="form-group">
    {!! Form::label('parentid', 'Parentid:') !!}
    <p>{!! $categoriesNews->parentid !!}</p>
</div>

<!-- Single Photo Field -->
<div class="form-group">
    {!! Form::label('single_photo', 'Single Photo:') !!}
    <p>{!! $categoriesNews->single_photo !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $categoriesNews->status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $categoriesNews->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $categoriesNews->updated_at !!}</p>
</div>

