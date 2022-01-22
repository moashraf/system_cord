  <div class="content-wrapper">


<table class="table table-responsive" id="sliders-table">
    <thead>
        <tr>
         
        <th>  Photo</th>
        <th>  title </th>
         
       <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
        <tr>
         
             <td>     <img src="{{ URL::to('/').'/images/'.$slider->single_photo}}"  width="50" height="50">  </td>
			 
			  @foreach($slider->get_slider_description   as $description )
							 <td>     {{ $description->title}}</td>
							 @endforeach
							 
							 
             
             
 
            <td>
                {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sliders.show', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sliders.edit', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  </div >
