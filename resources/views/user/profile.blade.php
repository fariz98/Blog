@extends('layouts.app')
<style type="text/css">
	.profile-img{
		max-width: 150px;
		border :5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
	}
</style>
@section('content')
<div class="row">
	<form action="/user/edit" method="POST">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				{{ csrf_field() }}
				<img class="profile-img" src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png">

				<h1>{{$name->name}}</h1>
				<h5>{{$name->email}}</h5>
				<h5>{{$name->created_at->format('l j F Y')}}
					({{$name->created_at->age}} years old)</h5>

				<button button="submit" class="btn btn-success" >Update Profile</button>
				

			</div>
			
		</div>
	</div>
</form>

</div>
@endsection