@extends('layouts.app')

@section('content')

 <div class="content-wrapper">

   <section class="content">
   
    <section class="content-header">
        <h1 class="pull-left">  News</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('nEWS.create') !!}">Add  nEWS </a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
           
<table class="table table-responsive" id="categoriesNews-table">
    <thead>
        <tr>
         <th>  title </th>
         </tr>
    </thead>
    <tbody>
    @foreach($categoriesNews as $categoriesNews)
        <tr>
    <td>   

    @foreach($categoriesNews->get_description   as $description )
   <a   style="    color: #1fa000; "  href="{{ URL::to('/').'/site/admin/categories_news_single/'.$categoriesNews->id}}"  ><i class="glyphicon glyphicon-star    "></i> 
	 <b> {{ $description->title}}</b>  </a>


 	 
<br>
  
 @endforeach
   @foreach($categoriesNews->children   as $description_children )
   @foreach($description_children->get_description   as $sub1 )
      <br>   
  &nbsp; &nbsp;  <a  style="    color: #000000; " href="{{ URL::to('/').'/site/admin/categories_news_single/'.$description_children->id}}"  >
  <i class="glyphicon  glyphicon-forward  "></i> <b>  {{ $sub1->title}}  </b> </a>
   <br>  
  
  
    @foreach($description_children->children   as $sub2 )
        @foreach($sub2->get_description   as $sub2_description  )
		  <br>
		  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    <a href="{{ URL::to('/').'/site/admin/categories_news_single/'.$sub2->id}}"  ><i class="glyphicon glyphicon-eye-open"></i> <b> {{ $sub2_description->title}}</b> </a>

   <br>
  
   @endforeach
   @endforeach
  
  
 @endforeach
 @endforeach
 
	</td>

   
           
        </tr>
    @endforeach
    </tbody>
</table>
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>  </div>
    </div>
@endsection

