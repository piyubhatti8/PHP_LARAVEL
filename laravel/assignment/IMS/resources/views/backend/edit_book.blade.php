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
                                    <h2 style="color:black; font-size:25px; font-weight: bold;">Edit Book</h2>
                                 </div>
                              </div>
                              <div class="full graph_revenue">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="content p-5">
                            @if($edit_book)
                              <form action="{{url('update_book/'.$edit_book->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                  
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Book Name:</label>
                                       <input type="text" name="name" value="{{$edit_book->name}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">ISBN No.:</label>
                                       <input type="text" name="isbn" value="{{$edit_book->isbn}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Author:</label>
                                       <select name="auth_id" class="form-control" required>
                                        <option selected disabled value="">Select...</option>
                                        @if($authors)
                                            @foreach($authors as $a)

                                                @if($a->id==$edit_book->auth_id)
                                                <option value="{{$a->id}}" selected>{{$a->id}}. {{$a->auth_name}}</option>

                                                @else
                                                    <option value="{{$a->id}}">{{$a->id}}. {{$a->auth_name}}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Publisher:</label>
                                       <select name="pub_id" class="form-control" required>
                                       <option selected disabled value="">Select...</option>
                                        @if($publishers)
                                            @foreach($publishers as $p)
                                            @if($p->id==$edit_book->pub_id)
                                                <option value="{{$p->id}}" selected>{{$p->id}}. {{$p->pub_name}}</option>

                                            @else
                                                <option value="{{$p->id}}">{{$p->id}}. {{$p->pub_name}}</option>
                                            @endif
                                            @endforeach
                                        @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Pages:</label>
                                       <input type="number" name="pages" value="{{$edit_book->pages}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Edition:</label>
                                       <input type="text" name="edition" value="{{$edit_book->edition}}" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Published Date:</label>
                                       <input type="date" name="pub_dt" value="{{$edit_book->pub_dt}}" class="form-control" required>
                                    </div>
                                  <!--  <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Country:</label>
                                       <select name="cid" class="form-control" required>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    -->
                                    <div class="form-group">
                                       <label class="form-control-label" style="font-weight:bold;">Book Image:</label>
                                       <input type="file" name="img" class="form-control">
                                    </div>
                                    <div class="col-6">                              
                                       <div class="form-group">
                                             <input type="submit" name="submit" class="btn btn-outline-primary">                                 
                                       </div>								 
                                    </div>
                                    @endif
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