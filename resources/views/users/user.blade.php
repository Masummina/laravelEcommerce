@extends('layouts.app')
@section('title', 'user')
@section('contents')

  <!-- Begin Page Content -->
  <div class="container-fluid">

	<!-- Page Heading -->
	

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h1 class="h3 mb-2 text-gray-800 float-left">User List</h1>
			<a href="{{url('users/create')}}" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Add New</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<tr>
								<th>SN</th>
								<th>Group Name</th>
								<th>Name</th>
								<th>Gmail</th>
								<th>Phone</th>
								<th>address</th>
								<th style="width: 100px">action</th>
							</tr>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SN</th>
							<th>Group Name</th>
							<th>Name</th>
							<th>Gmail</th>
							<th>Phone</th>
							<th>address</th>
							<th>action</th>
						</tr>
					</tfoot>
					<tbody>
						
						@php
							$i = 0;	
						@endphp
							@foreach ($users as $user)
							<tr>
							@php
								$i++;
							@endphp
							<td>{!! $i !!}</td>
							<td>{!! $user->group->title !!}</td>
							<td>{!! $user->name !!}</td>
							<td>{!! $user->email  !!}</td>
							<td>{!! $user->phone  !!}</td>
							<td>{!! $user->address  !!}</td>
							<td> 
								
								<form class="pull-right" action="{{url('users/'.$user->id)}}" method="POST">
									<a href="{{route('users.edit', ['user'=>$user->id])}}" class="btn btn-info btn-sm mr-1"> <i class="fa fa-edit"></i></a>
									<a href="{{route('users.show', ['user'=>$user->id])}}" class="btn btn-info btn-sm mr-1"> <i class="fa fa-eye"></i></a>
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