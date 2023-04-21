@extends('frontend.layout.main')
@section('main_container')

			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index">Home</a></span> / <span>Contact</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
			<center><h1><label style="font-weight:bold;">Signup User</label></h1></center>
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrap">
							
							<form action="#" class="contact-form" method="post" enctype="multipart/form-data">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="name" style="font-weight:bold;">Name:</label>
											<input type="text" id="name" name="name" class="form-control" placeholder="Your Name">
										</div>
									</div>
								
									<div class="col-md-6">
										<div class="form-group">
											<label for="unm" style="font-weight:bold;">User Name:</label>
											<input type="email" id="unm" name="unm" class="form-control" placeholder="Your Username">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="pass" style="font-weight:bold;">Password:</label>
											<input type="password" id="pass"  name="pass" class="form-control" placeholder="Your Password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="gen" style="font-weight:bold;">Gender: </label>
												<label class="radio-inline">
														<input type="radio" name="gen" id="gen" checked value="Male">Male
												</label>
												<label class="radio-inline">
      												<input type="radio" name="gen" id="gen" value="Female">Female
    											</label>
										</div>
									</div>
							
									<div class="col-md-6">
										<div class="form-group">
											<label for="gen" style="font-weight:bold;">Languages: </label>
												<label class="checkbox-inline">
													<input type="checkbox" name="lang[]" id="lang" value="Gujarati">Gujarati
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" name="lang[]" id="lang" value="Hindi">Hindi
												</label>
												<label class="checkbox-inline">
													<input type="checkbox" name="lang[]" id="lang" value="English">English
												</label>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="mob" style="font-weight:bold;">Mobile No.:</label>
											<input type="number" id="mob" name="mob" class="form-control" placeholder="Your Mobile No.">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="cid" style="font-weight:bold;">Country:</label>
										<select id="cid" name="cid" class="form-control">
											<option value="">----------Select----------</option>
											@foreach($country as $c)
												<option value="{{$c->id}}"> {{$c->country}} </option>
											@endforeach
										</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="add" style="font-weight:bold;">Address:</label>
										<textarea id="add" name="add" class="form-control" placeholder="Your Address..." rows="5">
										</textarea>
										</div>
									</div>	
									<div class="col-md-6">
										<div class="form-group">
											<label for="file" style="font-weight:bold;">Profile Image:</label>
											<input type="file" name="file" id="file" class="form-control">
										</div>
									</div>
									
									
									
									
								</div>
								<center>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" name="submit" value="Register" class="btn btn-primary">
										</div>
									</div>
								</center>
							</form>		
						</div>
					</div>
					
				</div>
			</div>
		</div>
@endsection