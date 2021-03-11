@extends('layouts.app')
@section('title', 'user')
@section('contents')

  <!-- Begin Page Content -->
  <div class="container-fluid">

	<!-- Page Heading -->
	

	<!-- DataTales Example -->
	
		<div class="user_option m-4 clearfix">
			<a class="float-left btn btn-primary btn-sm" href="{{route('users.index')}}"> <i class="fa fa-arrow-left"></i> Back</a>
			<a class="float-right btn btn-primary btn-sm ml-1" href="{{route('users.create')}}"> <i class="fa fa-plus"></i> Sale</a>
			<a class="float-right btn btn-primary btn-sm ml-1" href="{{route('users.create')}}"> <i class="fa fa-plus"></i> Purchase</a>
			<a class="float-right btn btn-primary btn-sm ml-1" href="{{route('users.create')}}"> <i class="fa fa-plus"></i> Payment</a>
			<a class="float-right btn btn-primary btn-sm ml-1" href="{{route('users.create')}}"> <i class="fa fa-plus"></i> Receipt</a>
		</div>
		
		


		<div class="user_navs clearfix">

			<div class="row">
				<div class="col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" href="">User Info</a>
						<a class="nav-link" href="{{route('sales', $user->id)}}">Sales</a>
						<a class="nav-link" href="">Purchase</a>
						<a class="nav-link" href="">Payment</a>
						<a class="nav-link" href="">Receipts</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content" id="v-pills-tabContent">
						
						
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

						
						<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et dolorem facere accusamus aspernatur. Dolores odio quam voluptatibus ex architecto debitis veniam consectetur nulla asperiores eum, hic ab dignissimos reiciendis quas?</div>
						<div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, harum ducimus? Quibusdam error, magnam eius laboriosam soluta harum repellat beatae fugiat tempora voluptatum, minus ea nobis! Suscipit vel laboriosam incidunt.</div>
						<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sequi debitis soluta ratione blanditiis sapiente voluptatum! Nesciunt aperiam earum architecto sapiente reprehenderit tempore doloremque, omnis dicta magni saepe, sint atque.</div>
						<div class="tab-pane fade" id="v-pills-receipts" role="tabpanel" aria-labelledby="v-pills-receipts-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, sequi debitis soluta ratione blanditiis sapiente voluptatum! Nesciunt aperiam earum architecto sapiente reprehenderit tempore doloremque, omnis dicta magni saepe, sint </div>
					  </div>
				</div>
			</div>

			
			  
		</div>

	

</div>


<!-- /.container-fluid -->
@stop