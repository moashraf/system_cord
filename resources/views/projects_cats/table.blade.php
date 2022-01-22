<table class="table table-responsive" id="projectsCats-table">
    <thead>
        <tr>
            <th>Title</th>
        <th>Body</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($projectsCats as $projectsCat)
        <tr>
            <td>{!! $projectsCat->title !!}</td>
            <td>{!! $projectsCat->body !!}</td>
            <td>{!! $projectsCat->status !!}</td>
            <td>
                {!! Form::open(['route' => ['projectsCats.destroy', $projectsCat->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('projectsCats.show', [$projectsCat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('projectsCats.edit', [$projectsCat->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>