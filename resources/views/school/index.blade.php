@extends('school.layouts.master')

@section('content')

<div class="super_container">

	<div class="register">

		<div class="container-fluid">
			
			<div class="row row-eq-height main22">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<br><br><br><br>
						<div class="register_content text-center">
							<h1 class="register_title">Please <span>Sign in</span> to <span>Continue</span>.... </h1>
						
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">

						<div class="search_background" ></div>
						<br><br>
						<div class="search_content text-center">
							<h1 class="search_title">Sign In</h1>
								<form action="" method="">

								<input type="text" name="" class="form-control" placeholder="Enter Your Email">

								<input type="password" name="" class="form-control mt-1" placeholder="Enter Your Password">


								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Login</button>


								<br><div class="text-danger" style="padding:10px;">

								</div>
								</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

</div>

@endsection

