@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categories News
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoriesNews, ['route' => ['categoriesNews.update', $categoriesNews->id], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}

                        @include('categories_news.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection