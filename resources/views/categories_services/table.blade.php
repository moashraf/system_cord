<table class="table table-responsive" id="categoriesServices-table">
    <thead>
        <tr>
            <th>Single Photo</th>
        <th>created at</th>
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categoriesServices as $categoriesServices)
        <tr>
 			    <td>     <img src="{{ URL::to('/').'/images/'. $categoriesServices->single_photo}}"  width="50" height="50">  </td>

            <td>{!! $categoriesServices->created_at !!}</td>
             <td>
                {!! Form::open(['route' => ['categoriesServices.destroy', $categoriesServices->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categoriesServices.show', [$categoriesServices->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categoriesServices.edit', [$categoriesServices->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>