@extends('admin.master')
@section('content')

	<div class="content-wrapper">
	    <div class="container-fluid">
			<div class="card mb-3">
				<div class="card-header">
				  <i class="fa fa-area-chart"></i> Add Product </div>
				<div class="card-body">				  

					{!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}

						<div class="form-group">
							{{ Form::label('proname', 'Name') }}
							{{ Form::text('pro_name', null, array('class'=>'form-control', 'required'=>'', 'minlength' => '5')) }}
						</div>

						<div class="form-group">
							{{ Form::label('code', 'Code')}}
							{{ Form::text('pro_code', null, array('class'=>'form-control'))}}
						</div>

						<div class="form-group">
							{{ Form::label('price', 'Price')}}
							{{ Form::text('pro_price', null, array('class'=>'form-control'))}}
						</div>

						<div class="form-group">
							{{ Form::label('description', 'Description')}}
							{{ Form::text('pro_info', null, array('class'=>'form-control'))}}
						</div>

						<div class="form-group">
							{{ Form::label('image', 'Image')}}
							{{ Form::file('image', null, array('class'=>'form-control'))}}
						</div>

						<div class="form-group">
							{{ Form::label('sale', 'Sale Price')}}
							{{ Form::text('spl_price', null, array('class'=>'form-control'))}}
						</div>

						<div class="form-group">
							{{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
						</div>

					{!! Form::close() !!}


				</div>
			</div> 	  
	    </div>
	</div>
    <!-- /.content-wrapper-->

@endsection
   



