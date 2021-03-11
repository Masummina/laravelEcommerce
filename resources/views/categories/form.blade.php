@extends('layouts.app')
@section('title', 'create category')
@section('contents')
<div class="card shadow mb-4">
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <div class="card-header py-3">
        <h1 class="h3 mb-2 text-gray-800">{!! $header !!}</h1>
    </div>
    <div class="card-body col-md-8 ml-2">


@if($mode=='edit')
{!!Form::model($category, ['route'=>['categories.update', $category->id], 'method'=>'put'])!!}

@else
{!! Form::open(['route'=> 'categories.store', 'method'=>'post']) !!}  
@endif
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="name">Title:<span class="text-danger">*</span></label>
        <div class="col-sm-10">
        {{ Form::text('title', NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter title']) }}
    </div>
</div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
     {!! Form::close() !!}
</div>
</div>
@endsection