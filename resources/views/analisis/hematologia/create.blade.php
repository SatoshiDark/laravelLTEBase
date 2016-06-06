@extends('layouts.app')

@section('htmlheader_title')
    @lang('hematologia.module')
@endsection

@section('contentheader_title')
    @lang('hematologia.createtitle')
@endsection

@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('hematologia.createtitle')</div>
                    <div class="panel-body">
                        @include('layouts.partials.error')
                        {!! Form::open(array('url' => 'hematologia')) !!}
                        <div>
                            {!! Form::label('order','Orden', ['class'=>'control-label']) !!}
                            {!! Form::text('order',null, ['class'=>'form-control']) !!}
                        </div>
                         {!! Form::hidden('user_id', $paciente->id) !!}

                        <div>
                            {!! Form::label('deliver_date','Fecha de entrega', ['class'=>'control-label']) !!}
                            {!! Form::date('deliver_date',null, ['class'=>'form-control']) !!}
                        </div>
                        <h2>SERIE BLANCA:</h2>
                        <div>
                            {!! Form::label('globulos_rojos','Globulos Rojos en Mil/mm3', ['class'=>'control-label']) !!}
                            {!! Form::text('globulos_rojos',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('hematrocito','Hematocrito en %', ['class'=>'control-label']) !!}
                            {!! Form::text('hematrocito',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('hemoglobina','Hemoglobina en gr/100ml', ['class'=>'control-label']) !!}
                            {!! Form::text('hemoglobina',null, ['class'=>'form-control']) !!}
                        </div>
                         <div>
                            {!! Form::label('vcm','V.C.M. en fl', ['class'=>'control-label']) !!}
                            {!! Form::text('vcm',null, ['class'=>'form-control']) !!}
                        </div>
                          <div>
                            {!! Form::label('hbcm','Hb.C.M. en pg', ['class'=>'control-label']) !!}
                            {!! Form::text('hbcm',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('chbcm','C.Hb.C.M. en g/dl', ['class'=>'control-label']) !!}
                            {!! Form::text('chbcm',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('vsg','VSG:', ['class'=>'control-label']) !!}
                            {!! Form::text('vsg',null, ['class'=>'form-control']) !!}
                        </div>
                          <div>
                            {!! Form::label('1rahora','1a hora en mm/hrs:', ['class'=>'control-label']) !!}
                            {!! Form::text('1rahora',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('plaquetas','Plaquetas en mm3:', ['class'=>'control-label']) !!}
                            {!! Form::text('plaquetas',null, ['class'=>'form-control']) !!}
                        </div>
                        <h2>SERIE BLANCA:</h2>
                         <div>
                            {!! Form::label('globulos_blancos_a','Globulos blancos en mm3:', ['class'=>'control-label']) !!}
                            {!! Form::text('globulos_blancos_a',null, ['class'=>'form-control']) !!}
                        </div>
                         <div>
                            {!! Form::label('globulos_blancos_b','Globulos blancos 5000-10000:', ['class'=>'control-label']) !!}
                            {!! Form::text('globulos_blancos_b',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('cayados_a','Cayados en %:', ['class'=>'control-label']) !!}
                            {!! Form::text('cayados_a',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('cayados_b','Cayados 0-5', ['class'=>'control-label']) !!}
                            {!! Form::text('cayados_b',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('segmentados_a','Segmentados en %:', ['class'=>'control-label']) !!}
                            {!! Form::text('segmentados_a',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('segmentados_b','Segmentados 40-70', ['class'=>'control-label']) !!}
                            {!! Form::text('segmentados_b',null, ['class'=>'form-control']) !!}
                        </div>
                        <div>
                            {!! Form::label('basofilos_a','Basofilos en %:', ['class'=>'control-label']) !!}
                            {!! Form::text('basofilos_a',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('basofilos_b','Basofilos 0-2', ['class'=>'control-label']) !!}
                            {!! Form::text('basofilos_b',null, ['class'=>'form-control']) !!}
                        </div>
                         <div>
                            {!! Form::label('eosinofilos_a','Eosinofilos en %:', ['class'=>'control-label']) !!}
                            {!! Form::text('eosinofilos_a',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('eosinofilos_b','Eosinofilos 0-4', ['class'=>'control-label']) !!}
                            {!! Form::text('eosinofilos_b',null, ['class'=>'form-control']) !!}
                        </div>
                          <div>
                            {!! Form::label('linfocitos_a','Linfocitos en %:', ['class'=>'control-label']) !!}
                            {!! Form::text('linfocitos_a',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('linfocitos_b','Linfocitos 20-40', ['class'=>'control-label']) !!}
                            {!! Form::text('linfocitos_b',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('monocitos_a','Monocitos en %:', ['class'=>'control-label']) !!}
                            {!! Form::text('monocitos_a',null, ['class'=>'form-control']) !!}
                        </div>
                           <div>
                            {!! Form::label('monocitos_b','Monocitos 0-5', ['class'=>'control-label']) !!}
                            {!! Form::text('monocitos_b',null, ['class'=>'form-control']) !!}
                        </div>
                          <div>
                            {!! Form::label('comment','Comentario', ['class'=>'control-label']) !!}
                            {!! Form::text('comment',null, ['class'=>'form-control']) !!}
                        </div>
                        {!! Form::submit('Guardar datos',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
