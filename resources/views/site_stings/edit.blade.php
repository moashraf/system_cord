@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Site Stings
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($siteStings, ['route' => ['siteStings.update', $siteStings->id], 'method' => 'patch' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}

                        @include('site_stings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection