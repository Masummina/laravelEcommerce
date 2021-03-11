@extends('layouts.app')
@section('title', 'group')
@section('contents')
     <!-- Begin Page Content -->
  <div class="container-fluid">

	<!-- Page Heading -->
	

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800">Create New</h1>
		</div>
		<div class="card-body">
            <form action="{{url('groups')}}" method="post">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="text" class="form-control" name="title" id="title"  placeholder="Enter itle">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
		</div>
	</div>

</div>


<!-- /.container-fluid -->
@endsection