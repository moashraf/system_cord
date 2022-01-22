
 <div class="content-wrapper">

<table class="table table-responsive" id="siteStings-table">
    <thead>
        <tr>
            <th>Key</th>
        <th>Value</th>
             <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($siteStings as $siteStings)
        <tr>
            <td>{!! $siteStings->key !!}</td>
            <td>{!! $siteStings->value !!}</td>
             <td>
                {!! Form::open(['route' => ['siteStings.destroy', $siteStings->id], 'method' => 'delete']) !!}
                <div class='btn-group'>

                    <a href="{!! route('siteStings.edit', [$siteStings->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                  
                  
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
 </div >
