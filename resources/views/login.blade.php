@extends('master')

@section("content")

<div class="container custom-login">
	<div class="row d-flex justify-content-center" >
		<div class="col-sm-4 ">
			<form action="login" method="POST"> 
				<div class="mb-3">
					@csrf <!-- This token is used for the post method -->
					<label for="exampleInputEmail1" class="form-label">Email address</label>
					<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input name ="password" type="password" class="form-control" id="exampleInputPassword1">
				</div>
				
				<button type="submit" class="btn btn-primary">LOGIN</button>
			</form>			
		</div>
	</div>			
</div>

@endsection

