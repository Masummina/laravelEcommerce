@extends('layouts.app')
@section('name', 'group')
@section('contents')
     <!-- Begin Page Content -->
  <div class="container-fluid">

	<!-- Page Heading -->
	

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800">{!! $header !!}</h1>
		</div>



		<div class="card-body col-md-8 ml-2">
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
            {{-- <form action="{{url('users')}}" method="post"> --}}
              @if (isset($user))
              {!! Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'put']) !!}
              @else
              {!! Form::open(['route' => 'users.store', 'method'=>'post']) !!}
              @endif
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="group">User Group:<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                      {{ Form::select('group_id', $groups, NULL, ['placeholder' => 'Select your group...', 'class'=>'form-control', 'id'=>'group']) }}
                  </div>
                  </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="name">Name:<span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    
                    {{ Form::text('name', NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Your name']) }}
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="email">Email: <span class="text-danger">*</span> </label>
                    <div class="col-sm-10">
                        {{ Form::text('email', NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Enter Your email']) }}
                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="email">Phone:<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        {{ Form::text('phone', NULL, ['class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Enter Your Phone']) }}
                     
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="address">Address:</label>
                    <div class="col-sm-10">
                      {{ Form::text('address', NULL, ['class'=>'form-control', 'id'=>'address', 'placeholder'=>'Enter Your address']) }}
                    </div>
                  </div>


                <button type="submit" class="btn btn-primary float-right">Submit</button>
              {!! Form::close() !!}	
            	</div>
	</div>

</div>


<!-- /.container-fluid -->
@endsection