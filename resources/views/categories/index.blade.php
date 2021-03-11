@extends('layouts.app')
@section('title', 'categories')
@section('contents')
     <!-- Begin Page Content -->
  <div class="container-fluid">

	<!-- Page Heading -->
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<span class="text-left h3 mb-2 text-gray-800">Categories List</span>
            <h6 class="text-right"><a class="btn btn-success " href="{{route('categories.create')}}"><i class="fa fa-plus"></i> Add new Category</a></h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Sn</th>
							<th>ID</th>
							<th>Title</th>
                            <th class="text-right">Action</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>SN</th>
							<th>ID</th>
							<th>Title</th>
							<th class="text-right">Action</th>
						</tr>
					</tfoot>
					<tbody>
                        @php
                            $i = 0;
                        @endphp
                        @foreach($categories as $category)
                        @php
                            $i++
                        @endphp
                        
						<tr>
							<td>{{$i}}</td>
							<td>{{$category->id}}</td>
							<td>{{$category->title}}</td>
						<td class="text-right">
							<form method="post" action="{{url('categories/'. $category->id)}}">
								@csrf
								@method('DELETE')
								<a class="btn btn-primary btn-sm" href="{{route( 'categories.edit', ['category'=>$category->id])}}"> <i class="fa fa-edit"></i> Edit</a>
								<button onclick="return confirm('Are You sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
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
@endsection