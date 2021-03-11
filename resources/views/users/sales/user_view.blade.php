@extends('users.layouts.user_main')
@section('usermain')

<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="h3 mb-2 text-gray-800 float-left">{{$user->name}}</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-borderless table-striped">
                <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$user->group->title}}</td>
                        </tr>
                        <tr>
                            <th>Enail</th>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{$user->address}}</td>
                        </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection