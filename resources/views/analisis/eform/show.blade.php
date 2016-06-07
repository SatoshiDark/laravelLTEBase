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
					<div class="box-header"><h3 class="box-title">Historial de Examenes generales</h3> 
					<div class="box-tool pull-right">

							<a href="{{route('hematologia.create')}}" class="btn btn-primary btn-xs btn-box-tool" ><i class="fa fa-plus"></i> Hematologia</a> 
							<a href="{{route('general.create')}}" class="btn btn-primary btn-xs btn-box-tool" ><i class="fa fa-plus"></i> Examen de orina</a> 
							<a href="{{route('eform.create')}}" class="btn btn-primary btn-xs btn-box-tool" ><i class="fa fa-plus"></i> Datos extra</a> 
							</div>
					</div>
					<div class="box-body"> 
						<table id='tableH' class="table table-bordered table-hover dataTable">
									<thead>
										<tr>
											<th>Acciones</th>
											<th>Orden</th>
											<th>Fecha de Entrega</th>
											<th>Comentario</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($hematologias as $row)
										<tr>
										   <td>
                	<div class="btn-group">
                <a href="{{route('hematologia.show', $row->id)}}" class="btn btn-primary btn-xs"><i class='fa fa-eye'></i> </a>
                <a href="{{route('hematologia.edit', $row->id)}}" class="btn btn-info btn-xs"><i class='fa fa-edit'></i> </a>
                </div>

                </td>
											<td>{{$row->order}}</td>
											<td>{{$row->deliver_date}}</td>
											<td>{{$row->comment}}</td>
											</tr>
										@endforeach
									</tbody>	
								</table> 
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
