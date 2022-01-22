@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Openinghours
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'openinghours.store']) !!}

                        @include('openinghours.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
