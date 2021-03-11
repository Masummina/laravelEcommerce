
@extends('users.layouts.user_main')
@section('usermain')
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 float-left">sale List</h1>
            <a href="{{url('sales/create')}}" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <tr>
                                <th>SN</th>
                                <th>admin name</th>
                                <th>user</th>
                                <th>Challah No</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th style="width: 100px">action</th>
                            </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>admin name</th>
                            <th>user</th>
                            <th>Challah No</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th style="width: 100px">action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        
                        @php
                            $i = 0;	
                        @endphp
                            @foreach ($user->sales as $sale)
                            <tr>
                            @php
                                $i++;
                            @endphp
                            <td>{!! $i !!}</td>
                            <td>{!! $user->name !!}</td>
                            
                            <td>{!! $sale->user_id  !!}</td>
                            <td>{!! $sale->challan_no  !!}</td>
                            <td>{!! $sale->date  !!}</td>
                            <td>177</td>
                            <td> 
                                
                                <form class="pull-right" action="{{url('sales/'.$sale->id)}}" method="POST">
                                    <a href="" class="btn btn-info btn-sm mr-1"> <i class="fa fa-edit"></i></a>
                                    <a href="" class="btn btn-info btn-sm mr-1"> <i class="fa fa-eye"></i></a>
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
@endsection











