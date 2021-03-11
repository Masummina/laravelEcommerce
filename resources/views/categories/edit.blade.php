@extends('layouts.app')
@section('title', 'create category')
@section('contents')
<div class="main" style="max"></div>

    <form action="" method="post">
            @csrf
            <div class="form-group">
            <label for="exampleInputEmail1">Category name</label>
                <input type="text" value="{{$Categories->title}}" class="form-control" name="title" id="title"  placeholder="Enter itle">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
     </form>
@endsection