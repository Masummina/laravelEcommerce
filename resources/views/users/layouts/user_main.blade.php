@extends('layouts.app')
@section('title', 'user')
@section('contents')

      <!-- Begin Page Content -->
      <div class="container-fluid">
    
        <!-- Page Heading -->
        <!-- DataTales Example -->
        
            <div class="user_option m-4 clearfix">
                <button type="button" class="float-right btn btn-primary btn-sm ml-1" data-toggle="modal" data-target="#salesModel">
                    <i class="fa fa-plus"></i> New Sales
                </button>

                <button type="button" class="float-right btn btn-primary btn-sm ml-1" data-toggle="modal" data-target="#purchaseModel">
                    <i class="fa fa-plus"></i> New Purchase
                </button>


                <button type="button" class="float-right btn btn-primary btn-sm ml-1" data-toggle="modal" data-target="#paymetModel2">
                    <i class="fa fa-plus"></i> New Payment
                </button>

                <button type="button" class="float-right btn btn-primary btn-sm ml-1" data-toggle="modal" data-target="#receiptModel">
                    <i class="fa fa-plus"></i> New Receipt
                </button>
            </div>
            
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
            <div class="user_navs clearfix">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link @if($user_tab == 'user_view') active @endif" href="{{route('users.show', $user->id)}}">User Info</a>
                            <a class="nav-link @if($user_tab == 'seles') active @endif" href="{{route('sales', $user->id)}}">Sales</a>
                            <a class="nav-link @if($user_tab == 'purchase') active @endif" href="{{route('purchase', $user->id)}}">Purchase</a>
                            <a class="nav-link @if($user_tab == 'payment') active @endif" href="{{route('payment', $user->id)}}">Payment</a>
                            <a class="nav-link @if($user_tab == 'receipts') active @endif" href="{{route('receipts', $user->id)}}">Receipts</a>
                        </div>
                    </div>
                <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                            
          
                    @yield('usermain')
                    </div>
            </div>
        </div>
    </div>

{{-- payment model start --}}
<div class="modal fade" id="paymetModel2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            
            {{-- form start --}}

                 {{-- <form action="{{url('users')}}" method="post"> --}}
          
              {!! Form::open(['route' => ['payment.store', $user->id], 'method'=>'post']) !!}
            
                <div class="form-group row"> 
                  <label class="col-sm-2 col-form-label" for="name">Name:<span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    {{ Form::date('date', NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Your name']) }}
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="amount">amount: <span class="text-danger">*</span> </label>
                    <div class="col-sm-10">
                        {{ Form::text('amount', NULL, ['class'=>'form-control', 'id'=>'amount', 'placeholder'=>'Enter Your amount']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="address">Address:</label>
                    <div class="col-sm-10">
                        {{ Form::textarea('note', NULL, ['class'=>'form-control', 'rows'=>'3', 'id'=>'note', 'placeholder'=>'Enter Your note']) }}
                    </div>
                </div>


                <button type="submit" class="btn btn-primary float-right">Submit</button>
              {!! Form::close() !!}	

            {{-- form End --}}


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

{{-- payment model End --}}


{{-- model Receipts start --}}

<div class="modal fade" id="receiptModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add new Payment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            
            {{-- form start --}}

                 {{-- <form action="{{url('users')}}" method="post"> --}}
          
              {!! Form::open(['route' => ['receipts.store', $user->id], 'method'=>'post']) !!}
            
                <div class="form-group row"> 
                  <label class="col-sm-2 col-form-label" for="name">Name:<span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                    {{ Form::date('date', NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Your name']) }}
                </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="amount">amount: <span class="text-danger">*</span> </label>
                    <div class="col-sm-10">
                        {{ Form::text('amount', NULL, ['class'=>'form-control', 'id'=>'amount', 'placeholder'=>'Enter Your amount']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="address">Address:</label>
                    <div class="col-sm-10">
                        {{ Form::textarea('note', NULL, ['class'=>'form-control', 'rows'=>'3', 'id'=>'note', 'placeholder'=>'Enter Your note']) }}
                    </div>
                </div>


                <button type="submit" class="btn btn-primary float-right">Submit</button>
              {!! Form::close() !!}	

            {{-- form End --}}


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>


{{-- model Receipts End --}}




{{-- model Sales start --}}

<div class="modal fade" id="salesModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          
          {{-- form start --}}

               {{-- <form action="{{url('users')}}" method="post"> --}}
        
            {!! Form::open(['route' => ['receipts.store', $user->id], 'method'=>'post']) !!}
          
              <div class="form-group row"> 
                <label class="col-sm-2 col-form-label" for="name">Name:<span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  {{ Form::date('date', NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Enter Your name']) }}
              </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="amount">amount: <span class="text-danger">*</span> </label>
                  <div class="col-sm-10">
                      {{ Form::text('amount', NULL, ['class'=>'form-control', 'id'=>'amount', 'placeholder'=>'Enter Your amount']) }}
                  </div>
              </div>
              <div class="form-group row">
                  <label class="col-sm-2 col-form-label" for="address">Address:</label>
                  <div class="col-sm-10">
                      {{ Form::textarea('note', NULL, ['class'=>'form-control', 'rows'=>'3', 'id'=>'note', 'placeholder'=>'Enter Your note']) }}
                  </div>
              </div>


              <button type="submit" class="btn btn-primary float-right">Submit</button>
            {!! Form::close() !!}	

          {{-- form End --}}


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


{{-- model Sales End --}}



</div>
<!-- /.container-fluid -->
@stop