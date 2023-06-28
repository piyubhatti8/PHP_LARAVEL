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
                                    <h2 style="color:black; font-size:25px; font-weight: bold;">Edit Teachers</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content p-5">
                              <form action="{{(url('/update_teacher/'.$data->id))}}" method="post" enctype="multipart/form-data">
                                    @csrf
                           @if($data)
                   
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Name:</label>
                                       <input type="text" name="name" class="form-control" required value="{{$data->name}}">
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Email:</label>
                                       <input type="email" name="unm" class="form-control" required value="{{$data->unm}}">
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Gender:</label>
                                             <label class="radio-inline">
                                                   <input type="radio" name="gen" id="gen" checked value="Male"
                                                   <?php 
                                                   $gen=$data->gen;
                                                   if($gen=="Male"){
                                                      echo "checked";
                                                   }
                                                   ?> >Male
                                             </label>
                                             <label class="radio-inline">
                                                   <input type="radio" name="gen" id="gen" value="Female"
                                                   <?php 
                                                   $gen=$data->gen;
                                                   if($gen=="Female"){
                                                      echo "checked";
                                                   }
                                                   ?> >Female
                                             </label>
                                    </div>
                                    <div class="form-group">
                                       <label for="gen" style="font-weight:bold;">Languages: </label>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" name="lang[]" id="lang" value="Gujarati"
                                                <?php 
                                                   $lang=$data->lang;
                                                   $lang_arr=explode(',',$lang);
                                                   
                                                   if(in_array('Gujarati',$lang_arr)){
                                                      echo "checked";
                                                   }
                                                   ?>
                                             >Gujarati
                                          </label>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" name="lang[]" id="lang" value="Hindi"
                                             <?php 
                                                   $lang=$data->lang;
                                                   $lang_arr=explode(',',$lang);
                                                   
                                                   if(in_array('Hindi',$lang_arr)){
                                                      echo "checked";
                                                   }
                                                   ?>
                                             >Hindi
                                          </label>
                                          <label class="checkbox-inline">
                                             <input type="checkbox" name="lang[]" id="lang" value="English"
                                             <?php 
                                                   $lang=$data->lang;
                                                   $lang_arr=explode(',',$lang);
                                                   
                                                   if(in_array('English',$lang_arr)){
                                                      echo "checked";
                                                   }
                                                   ?>
                                             >English
                                          </label>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;" >Mobile No.:</label>
                                       <input type="number" name="mob" class="form-control" required value="{{$data->mob}}">
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Image</label>
                                       <input type="file" name="img" class="form-control" >
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Address</label>
                                       <textarea class="form-control" name="add" class="form-control" required>{{$data->add}}</textarea>
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