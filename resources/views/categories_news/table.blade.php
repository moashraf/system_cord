
<table class="table table-responsive" id="categoriesNews-table">
    <thead>
        <tr>
         <th>  title </th>
              <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($categoriesNews as $categoriesNews)
        <tr>
    <td>   

    @foreach($categoriesNews->get_description   as $description )
	 <b style="<?php  if($categoriesNews->parentid == 0 ){    echo'color: #dd4b39;  font-weight: bold;' ;} ?>  " > {{ $description->title}}</b>  

 	 
<br>
  
 @endforeach
 
	</td>

   
            <td>
                {!! Form::open(['route' => ['categoriesNews.destroy', $categoriesNews->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categoriesNews.show', [$categoriesNews->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categoriesNews.edit', [$categoriesNews->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>