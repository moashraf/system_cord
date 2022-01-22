@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Types
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'types.store' ,'files' => true,'enctype' => 'multipart/form-data' ]) !!}

                        @include('types.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
