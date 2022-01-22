@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Projects Cat
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($projectsCat, ['route' => ['projectsCats.update', $projectsCat->id], 'method' => 'patch']) !!}

                        @include('projects_cats.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection