@extends('layouts.app')
@section('title', 'product')
@section('contents')

  <!-- Begin Page Content -->
  <div class="container-fluid">

	<!-- Page Heading -->
	

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h1 class="h3 mb-2 text-gray-800 float-left">product List</h1>
			<a href="{{url('products/create')}}" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Add New</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<tr>
								<th>SN</th>
								<th>Categories Name</th>
								<th>title</th>
								<th>description</th>
								<th>Cost Price</th>
								<th>Price</th>
								<th style="width: 100px">action</th>
							</tr>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SN</th>
							<th>Categories Name</th>
							<th>title</th>
							<th>description</th>
							<th>Cost Price</th>
							<th>Price</th>
							<th style="width: 100px">action</th>
					</tr>
					</tfoot>
					<tbody>
						
						@php
							$i = 0;	
						@endphp
							@foreach ($products as $product)
							<tr>
							@php
								$i++;
							@endphp
							<td>{!! $i !!}</td>
							<td>{!! $product->category->title !!}</td>
							<td>{!! $product->title !!}</td>
							
							<td>{!! $product->description  !!}</td>
							<td>{!! $product->cost_price  !!}</td>
							<td>{!! $product->price  !!}</td>
							<td> 
								
								<form class="pull-right" action="{{url('products/'.$product->id)}}" method="POST">
									<a href="{{route('products.edit', ['product'=>$product->id])}}" class="btn btn-info btn-sm mr-1"> <i class="fa fa-edit"></i></a>
									<a href="{{route('products.show', ['product'=>$product->id])}}" class="btn btn-info btn-sm mr-1"> <i class="fa fa-eye"></i></a>
									@csrf
									@method('DELETE')
									<button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
								</form>

							
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>


<!-- /.container-fluid -->
@stop