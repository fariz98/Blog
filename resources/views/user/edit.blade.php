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
 <form class="form-horizontal" role="form" method="POST" action="{{route('user.update', $user)}}">
                        {{ csrf_field() }}
    					{{ method_field('patch') }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" >
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Your Current Password</label>

                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="" value="{{$user->password}}" readonly="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label"> Enter New Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-users"></i> Update Profile
                                </button>
                            </div>
                        </div>
                    </form>
@endsection