@extends('layouts.login')

@section('content')



<div class=" card-box">
	<div class="panel-heading"> 
		<h3 class="text-center"> Sign In to <strong class="text-custom">Laravel</strong> </h3>
	</div> 
	<div class="panel-body">
		<form class="form-horizontal" method="POST" action="{{ route('login') }}">
			{{ csrf_field() }}
			<div class="form-group ">
				<div class="col-xs-12">
					<input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group">
				<div class="col-xs-12">
					<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

					@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
					@endif
				</div>
			</div>

			<div class="form-group ">
				<div class="col-xs-12">
					<div class="checkbox checkbox-primary">
						<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
						<label for="checkbox-signup">
							Remember me
						</label>
					</div>
					
				</div>
			</div>
			
			<div class="form-group text-center m-t-40">
				<div class="col-xs-12">
					<button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
				</div>
			</div>

			<div class="form-group m-t-30 m-b-0">
				<div class="col-sm-12">
					<a href="{{ route('password.request') }}" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
				</div>
			</div>
		</form> 
	</div>   
</div>                              
<div class="row">
	<div class="col-sm-12 text-center">
		<p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
	</div>
</div>
@endsection
