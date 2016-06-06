@extends('layouts.app')

@section('htmlheader_title')
    @lang('paciente.module')
@endsection
@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('paciente.edittitle')</div>
                    <div class="panel-body">
                        @include('layouts.partials.error')
                        {!! Form::model($paciente, array('route' => array('paciente.update', $paciente->id), 'method' =>
                        'put')) !!}
                        <div>
                            {!! Form::label('dni','DNI', ['class'=>'control-label']) !!}
                            {!! Form::text('dni',null, ['class'=>'form-control']) !!}
                        </div>

                        <div>
                            {!! Form::label('first_name','Nombre', ['class'=>'control-label']) !!}
                            {!! Form::text('first_name',null, ['class'=>'form-control']) !!}
                        </div>

                        <div>
                            {!! Form::label('last_name','Apellido', ['class'=>'control-label']) !!}
                            {!! Form::text('last_name',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('gender','Genero', ['class'=>'control-label']) !!}
                            <div>
                                @lang('paciente.genderm')
                                {!! Form::radio('gender',1) !!}
                                @lang('paciente.genderf')
                                {!! Form::radio('gender',0) !!}
                            </div>
                        </div>
                        <div>
                            {!! Form::label('age','Edad', ['class'=>'control-label']) !!}
                            {!! Form::number('age',null, ['class'=>'form-control']) !!}
                        </div>
                        {!! Form::submit('Guardar datos',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
