@extends ('layouts.admin')
@section ('contenido')

	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Proveedor</h3>

			@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul> 
				</div>
			@endif 
		</div> 
	</div> 

	{!!Form::open(array('url'=>'compras/proveedor','method'=>'POST','autocomplete'=>'off'))!!}
	{{Form::token()}}
		<div class="row">

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" require value="{{old('nombre')}}" class="form-control" placeholder="Ingrese el Nombre...">
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="direccion">Dirección</label>
					<input type="text" name="direccion" value="{{old('direccion')}}" class="form-control" placeholder="Dirección...">
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label>Tipo de Documento</label>
					<select name="tipo_documento" class="form-control">
						<option value="RFC">RFC</option>
						<option value="CURP">CURP</option>
						<option value="INE">INE</option>
					</select>
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="num_documento">Numero de documento</label>
					<input type="text" name="num_documento" value="{{old('num_documento')}}" class="form-control" placeholder="Numero del Documento...">
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="telefono">Telefono</label>
					<input type="text" name="telefono" value="{{old('telefono')}}" class="form-control" placeholder="Telefono...">
				</div>			
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Correo Electronico...">
				</div>
			</div>

			<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
			</div>
		</div>
		{!!Form::close()!!}		
	@endsection