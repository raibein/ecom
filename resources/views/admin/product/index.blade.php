@extends('admin.master')
@section('content')

	<div class="content-wrapper">
	    <div class="container-fluid">
			<div class="card mb-3">
				<div class="card-header">
				  <i class="fa fa-area-chart"></i> List of Product </div>
				<div class="card-body">				  

					@forelse($products as $product)

					<div class="row" style="margin-bottom:4px;">
						<div class="col-md-8">{{$product->pro_name}}</div>
						<div class="col-md-4">
							<form action="" method="POST" >
								{{method_field('DELETE')}}
								<input class="btn btn-sm btn-danger" type="submit" value="Delete" >
							</form>
						</div>
					</div>

					@empty

					<h3>No Products</h3>

					@endforelse
				</div>
			</div> 	  
	    </div>
	</div>
    <!-- /.content-wrapper-->

@endsection
   



