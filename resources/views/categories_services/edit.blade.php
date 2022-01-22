@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categories Services
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($categoriesServices, ['route' => ['categoriesServices.update', $categoriesServices->id], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data'  ]) !!}

                        @include('categories_services.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection