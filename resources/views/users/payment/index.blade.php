
@extends('users.layouts.user_main')
@section('usermain')
<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <strong class="h3 mb-2 text-gray-800 float-left">Payment of {!! $user->name !!}</strong>
            
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
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Note</th>
                                <th style="width: 100px">action</th>
                            </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>SN</th>
                            <th>admin name</th>
                            <th>user</th>
                            <th>{{$user->payments->sum('amount')}}</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th style="width: 100px">action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        
                        @php
                            $i = 0;	
                        @endphp
                            @foreach ($user->payments as $payment)
                            <tr>
                            @php
                                $i++;
                            @endphp
                            <td>{!! $i !!}</td>
                            <td>{!! $user->name !!}</td>
                            
                            <td>{!! $payment->user_id  !!}</td>
                            <td>{!! $payment->amount  !!}</td>
                            <td>{!! $payment->date  !!}</td>
                            <td>{!! $payment->note  !!}</td>
                            <td> 
                                
                                <form class="pull-right" action="{{route('payment.deleted', ['id'=> $user->id, 'payment_id'=>$payment->id])}}" method="POST">
                                   
                                    
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

           {{-- Model start          --}}

             <!-- Modal -->

  {{-- end --}}


    </div>
</div>
@endsection











