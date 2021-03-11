@extends('layouts.app')
@section('name', 'group')
@section('contents')
     <!-- Begin Page Content -->
  <div class="container-fluid">

	<!-- Page Heading -->

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 float-left">{!! $header !!}</h1>
            <a href="{{url('products')}}" class="btn btn-sm btn-primary float-right"><i class="fa fa-arrow-left"></i> Back</a>
		</div>


<div class="row justify-content-md-center">
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

              @if (isset($product))
              {!! Form::model($product, ['route' => ['products.update', $product->id], 'method'=>'put']) !!}
              @else
              {!! Form::open(['route' => 'products.store', 'method'=>'post']) !!}
              @endif
                <div class="form-group row">
                    <label class="col-sm-3 text-right  col-form-label" for="category_id">User Group:<span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                      {{ Form::select('category_id', $category, NULL, ['placeholder' => 'Select your category...', 'class'=>'form-control', 'id'=>'category']) }}
                  </div>
                  </div>
                <div class="form-group row">
                  <label class="col-sm-3 text-right col-form-label" for="title">Name:<span class="text-danger">*</span></label>
                  <div class="col-sm-9">
                    {{ Form::text('title', NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Enter Your title']) }}
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right col-form-label" for="description">Description: <span class="text-danger">*</span> </label>
                    <div class="col-sm-9">
                        {{ Form::textarea('description', NULL, ['class'=>'form-control', 'id'=>'description', 'placeholder'=>'Enter Your description']) }}
                      
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-right col-form-label" for="email">Phone:<span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        {{ Form::text('cost_price', NULL, ['class'=>'form-control', 'id'=>'cost_price', 'placeholder'=>'Enter Your cost price']) }}
                     
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 text-right col-form-label" for="address">Address:</label>
                    <div class="col-sm-9">
                      {{ Form::text('price', NULL, ['class'=>'form-control', 'id'=>'price', 'placeholder'=>'Enter Your price']) }}
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary float-right">Submit</button>
              {!! Form::close() !!}	
            </div>    
          	</div>
	</div>

</div>


<!-- /.container-fluid -->
@endsection