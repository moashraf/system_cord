<table class="table table-responsive" id="requests-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Body</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Product</th>
         <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($requests as $request)
        <tr>
            <td>{!! $request->title !!}</td>
            <td>{!! $request->body !!}</td>
            <td>{!! $request->email !!}</td>
            <td>{!! $request->phone !!}</td>
            <td>{!! $request->product !!}</td>
             <td>{!! $request->status !!}</td>
            <td>
                {!! Form::open(['route' => ['requests.destroy', $request->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('requests.show', [$request->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('requests.edit', [$request->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>