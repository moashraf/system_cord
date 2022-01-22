
	 <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
            <th>  post</th>
            <th>  Photo</th>
		              <th >cat  </th>

             <th  >Action</th>
            </tr>
        </thead>
       <tbody>
    @foreach($nEWS as $nEWS)
        <tr>
  			              <td>  
						  @foreach($nEWS->get_description   as $description )
							   {{ $description->title}}
							 @endforeach

 </td>
  			              <td>     <img src="{{ URL::to('/').'/images/'.$nEWS->single_photo}}"  width="50" height="50">  </td>
            <td> 
  @foreach($categories_news    as $categories_news_val )
  @foreach($categories_news_val->get_description   as $description )
  <?php if (  $nEWS->get_cat['id']== $categories_news_val->id ){echo" $description->title";} ?>
						 
							   
							 @endforeach
							 @endforeach

 			
							 </td>

             <td>
                {!! Form::open(['route' => ['nEWS.destroy', $nEWS->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('nEWS.show', [$nEWS->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('nEWS.edit', [$nEWS->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
        
    </table>
	
	
	 