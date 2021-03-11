
@extends('users.layouts.user_main')
@section('usermain')
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <strong class="h3 mb-2 text-gray-800 float-left">Receipts of {!! $user->name !!}</strong>
            
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <tr>
                                <th>SN</th>
                                <th class="text-right">Admin</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Note</th>
                                <th class="text-right">action</th>
                            </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                                <th colspan="3">Total</th>
                                <th>{{$user->receipts->sum('amount')}}</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th style="width: 100px">action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        @php
                            $i = 0;	
                        @endphp
                            @foreach ($user->receipts as $receipt)
                            <tr>
                            @php
                                $i++;
                            @endphp
                            <td>{!! $i !!}</td>
                            <td>{!! $user->name !!}</td>
                            <td>{!! $receipt->amount  !!}</td>
                            <td>{{($receipt->admin_id) ? $receipt->admin->name : 'hhhhhh'}}</td>
                            <td>{!! $receipt->date  !!}</td>
                            <td>{!! $receipt->note  !!}</td>
                            <td> 
                                
                                <form class="pull-right" action="{{route('receipts.delete',['id'=>$user->id, 'receipt_id'=> $receipt->id])}}" method="POST">
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
            

            <!-- Button trigger modal -->








        </div>
    </div>
</div>
@endsection











