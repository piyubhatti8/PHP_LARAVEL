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
                                    <h2 style="color:black; font-size:25px; font-weight: bold;">Add Teachers</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content p-5">
                              <form action="{{url('add_teachers')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Name:</label>
                                       <input type="text" name="name" class="form-control">                                  
                                      
                                          @error('name')
                                          <div class="alert alert-danger"> {{ $message }} </div>
                                          @enderror                                
                                          
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Email:</label>
                                       <input type="email" name="unm" class="form-control" >
                                       @error('unm')
                                          <div class="alert alert-danger"> {{$message}} </div>
                                          @enderror 
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Gender:</label>
                                             <label class="radio-inline">
                                                   <input type="radio" name="gen" id="gen" checked value="Male">Male
                                             </label>
                                             <label class="radio-inline">
                                                   <input type="radio" name="gen" id="gen" value="Female">Female
                                             </label>
                                    </div>
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
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Mobile No.:</label>
                                       <input type="number" name="mob" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Image</label>
                                       <input type="file" name="img" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Address</label>
                                       <textarea class="form-control" name="add" class="form-control" required></textarea>
                                    </div>                            
                                    <div class="col-6">                              
                                       <div class="form-group">
                                             <input type="submit" name="submit" class="btn btn-outline-primary">                                 
                                       </div>								 
                                    </div>
							     </form>
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