@extends('frontend.layout.main')
@section('main_container')

			
		</nav>
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{url('index')}}">Home</a></span> / <span>Profile</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
	        @if($user_info)		
                    <div class="container p-2" style="border-radius:5px; background-color: white; height: auto ;">
                    <div class="row">   
                        <div class="col-md-5">
                            <div class="p-3 py-5 align-items-center text-center">
                                <img class="rounded-circle mt-5" width="200px" height="200px" src="{{url('frontend/assets/upload/user/'.$user_info->file)}}">
                                <div class="font-weight-bold">Priyanka Solanki</div><div class="text-black-50">{{$user_info->unm}}</div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mt-5"><h1>Profile</h1></div>
                            <div class="row">
                                <div class="col-md-12"><label class="lable">Name:</label></div>
                                <div class="col-md-12">{{$user_info->name}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5"><label class="lable">Gender:</label></div>
                                <div class="col-md-5">{{$user_info->gen}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5"><label class="lable">Languages Known:</label></div>
                                <div class="col-md-5">{{$user_info->lang}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5"><label class="lable">Mobile No.:</label></div>
                                <div class="col-md-5">{{$user_info->mob}}</div>
                            </div>
                           
                            <div class="row mt-2">
                                <div class="col-md-5"><label class="lable">Email Id:</label></div>
                                <div class="col-md-5">{{$user_info->unm}}</div>
                            </div>
                                                      
                            <div class="row mt-2">
                            <div class="col-md-5"><label class="lable">Country:</label></div>
                                <div class="col-md-5">{{$user_info->country}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-5"><label class="lable">Address:</label></div>
                                <div class="col-md-5">{{$user_info->add}}</div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12 text-center"><button type="button" class="btn btn-primary" name="Submit">Save Profile</div>
                            </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
		</div>
@endsection