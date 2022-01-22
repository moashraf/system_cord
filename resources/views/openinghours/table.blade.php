<table class="table table-responsive" id="openinghours-table">
    <thead>
        <tr>
            <th>Day</th>
        <th>Time</th>
        <th>Note</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($openinghours as $openinghours)
        <tr>
            <td>{!! $openinghours->day !!}</td>
            <td>{!! $openinghours->time !!}</td>
            <td>{!! $openinghours->Note !!}</td>
            <td>
                {!! Form::open(['route' => ['openinghours.destroy', $openinghours->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('openinghours.show', [$openinghours->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('openinghours.edit', [$openinghours->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>