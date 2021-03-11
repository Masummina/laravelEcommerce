@extends('layouts.app')
@section('title', 'product')
@section('contents')

  <!-- Begin Page Content -->
  <div class="container-fluid">

	<!-- Page Heading -->
	

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="product_option m-4">
			<a class="float-left btn btn-primary btn-sm" href="{{route('products.index')}}"> <i class="fa fa-arrow-left"></i> Back</a>
			<a class="float-right btn btn-primary btn-sm ml-1" href="{{route('products.create')}}"> <i class="fa fa-plus"></i> New Product</a>
		</div>
		
		<div class="card-header py-3">
			<h3 class="h3 mb-2 text-gray-800 float-left">Product Information</h3>
		</div>
		<div class="card-body">
			<div class="row justify-content-md-center">
				<div class="col-md-9">
			<div class="table-responsive">
				<table class="table table-borderless table-scripted">
					<tbody>
							<tr>
								<th>Title :</th>
                                <td>{{$product->title}}</td>
							</tr>
                            <tr>
								<th>Category :</th>
                                <td>{{$product->category->title}}</td>
							</tr>
                            <tr>
								<th>Description :</th>
                                <td>{{$product->description}}</td>
							</tr>
                            <tr>
								<th>Cost Price: </th>
                                <td>{{$product->cost_price}}</td>
							</tr>
                            <tr>
								<th>Price :</th>
                                <td>{{$product->price}}</td>
							</tr>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
		</div>
	</div>

</div>


<!-- /.container-fluid -->
@stop