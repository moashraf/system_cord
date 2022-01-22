	 <table id="example" class="display" style="width:100%">
    <thead>
        <tr>
          <th>Single Photo</th>
          <th> created at  </th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($services as $services)
        <tr>
  			    <td>     <img src="{{ URL::to('/').'/images/'.$services->single_photo  }}"  width="50" height="50">  </td>
  			    <td>      {{  $services->created_at  }}  </td>

            <td>
                {!! Form::open(['route' => ['services.destroy', $services->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('services.show', [$services->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('services.edit', [$services->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
 