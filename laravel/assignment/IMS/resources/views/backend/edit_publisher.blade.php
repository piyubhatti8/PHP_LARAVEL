@extends('backend.layout.main')

@section('main_container') 
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     
                     <div class="row column_title">
                           <div class="col-md-12">
                              <br>
                           </div>
                     </div>                   
                     <div class="row column2 graph margin_bottom_30 center">
                        <div class="col-md-10 col-lg-10">
                           <div class="white_shd full">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2 style="color:black; font-size:25px; font-weight: bold;">Edit Publishers</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content p-5">
                            @if($data)
                              <form action="{{url('/update_publisher/'.$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Publisher Name:</label>
                                       <input type="text" name="pub_name" class="form-control" value="{{$data->pub_name}}" required>
                                    </div>
                                    <div class="col-6">                              
                                       <div class="form-group">
                                             <input type="submit" name="submit" class="btn btn-outline-primary">                                 
                                       </div>								 
                                    </div>
							     </form>
                                 @endif
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                       
                 


                  </div>
               <!-- footer Layout Here-->
               </div>
               <!-- end dashboard inner -->
               </div>
         </div>
      </div>	   
    @endsection