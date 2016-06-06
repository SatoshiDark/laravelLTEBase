@extends('layouts.app')

@section('htmlheader_title')
	Paciente
@endsection
@section('main-content')
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header"><h3 class="box-title">Paciente</h3></div>
					<div class="box-body">
						<h4><b>Nombre del paciente:</b> {{$paciente->first_name}}</h4>
                		<h4><b>Apellido del paciente:</b> {{$paciente->last_name}}</h4>
                		<h4><b>Carnet de identidad:</b> {{$paciente->dni}}</h4>
                		<h4><b>Genero:</b> 
                							@if($paciente->gender == '1')
 											Masculino
 											@else
 											Femenino
											@endif
											</h4>
                		<h4><b>Edad:</b> {{$paciente->age}} Anios</h4>
                		<div>
                		<h1> </h1>
                			<a href='{{url('paciente')}}' class='btn btn-info'>Volver a la lista</a>
                		</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header"><h3 class="box-title">HEMATOLOGIA</h3> 
					<div class="box-tool pull-right">

							<a href="{{url('paciente.show'.$paciente->id)}}" class="btn btn-primary btn-xs btn-box-tool" ><i class="fa fa-plus"></i> Volver a la lista</a> 
					</div>
					<div class="box-body"> 
						<div class="col-md-6 col-sm-6 col-xs-12">
							<h2>Valores paciente</h2>
							<h3>SERIE ROJA:</h3>
							<p>Globulos rojos: {{$hematologia->globulos_rojos}} Mil/mm3</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 pull-left">
							<h2>Valores de referencia</h2>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<h3>HOMBRES:</h3>
								<p>4600-6400</p>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<h3>MUJERES:</h3>
								<p>4200-5600</p>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12">
								<h3>NIÑOS:</h3>
								<p>3700-5400</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection
@push('pagescripts')
	<script>
		$(document).ready(function(){
			$('#tableH').DataTable()
		} );
	</script>
@endpush
