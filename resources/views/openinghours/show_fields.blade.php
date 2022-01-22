<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $openinghours->id !!}</p>
</div>

<!-- Day Field -->
<div class="form-group">
    {!! Form::label('day', 'Day:') !!}
    <p>{!! $openinghours->day !!}</p>
</div>

<!-- Time Field -->
<div class="form-group">
    {!! Form::label('time', 'Time:') !!}
    <p>{!! $openinghours->time !!}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('Note', 'Note:') !!}
    <p>{!! $openinghours->Note !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $openinghours->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $openinghours->updated_at !!}</p>
</div>

