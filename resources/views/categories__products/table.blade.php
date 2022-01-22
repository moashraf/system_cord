<table class="table table-responsive" id="categoriesProducts-table">
    <thead>
        <tr>
            <th>Title</th>
         <th>Single Photo</th>
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categoriesProducts as $categoriesProducts)
        <tr>
            <td>{!! $categoriesProducts->title !!}</td>
  
                       <td>     <img src="{{ URL::to('/').'/images/'. $categoriesProducts->single_photo }}"  width="50" height="50">  </td>
             <td>


                {!! Form::open(['route' => ['categoriesProducts.destroy', $categoriesProducts->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categoriesProducts.show', [$categoriesProducts->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categoriesProducts.edit', [$categoriesProducts->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>