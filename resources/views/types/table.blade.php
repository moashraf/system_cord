<table class="table table-responsive" id="types-table">
    <thead>
        <tr>
         <th>Single Photo</th>
          <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($types as $types)
        <tr>
  			              <td>     <img src="{{ URL::to('/').'/images/'. $types->single_photo }}"  width="50" height="50">  </td>

             <td>
                {!! Form::open(['route' => ['types.destroy', $types->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('types.show', [$types->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('types.edit', [$types->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>