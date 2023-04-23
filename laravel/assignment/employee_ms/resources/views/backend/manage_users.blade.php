@extends('backend.layout.main')

@section('main_container') 
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Tables</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <form action="{{url('/manage_user')}}" method="post">
                        @csrf
                     <div class="row">
                                             
                               <!-- table section -->
                               <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Hover Table</h2>
                                 </div>
                              </div>
                              @if($users)
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive">
                                    <table class="table table-hover">
                                       <thead>
                                          <tr>
                                             <th>ID</th>
                                             <th>Name</th>
                                             <th>User name</th>
                                             <th>Gender</th>
                                             <th>Language</th>
                                             <th>Image</th>
                                             <th>Mobile No.</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($users as $u)
                                          <tr>
                                             <td>{{$u->id}}</td>
                                             <td>{{$u->name}}</td>
                                             <td>{{$u->unm}}</td>
                                             <td>{{$u->gen}}</td>
                                             <td>{{$u->lang}}</td>
                                             <td>{{$u->img}}</td>
                                             <td>{{$u->mob}}</td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                              @endif
                              <span>{{$users->links()}}</span>
                           </div>
                        </div>
                        <!-- table section -->

                     </div>
                     </form>
                  </div>
             <!-- footer Layout Here-->
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
         <!-- model popup -->
         <!-- The Modal -->
         <div class="modal fade" id="myModal">
            <div class="modal-dialog">
               <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                     <h4 class="modal-title">Modal Heading</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                     Modal body..
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- end model popup -->
      </div>
	   
      <!-- jQuery -->
      <script src="{{url('backend/assets/js/jquery.min.js')}}"></script>
      <script src="{{url('backend/assets/js/popper.min.js')}}"></script>
      <script src="{{url('backend/assets/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{url('backend/assets/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{url('backend/assets/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{url('backend/assets/js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <script src="{{url('backend/assets/js/Chart.min.js')}}"></script>
      <script src="{{url('backend/assets/js/Chart.bundle.min.js')}}"></script>
      <script src="{{url('backend/assets/js/utils.js')}}"></script>
      <script src="{{url('backend/assets/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{url('backend/assets/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- fancy box js -->
      <script src="{{url('backend/assets/js/jquery-3.3.1.min.js')}}"></script>
      <script src="{{url('backend/assets/js/jquery.fancybox.min.js')}}"></script>
      <!-- custom js -->
      <script src="{{url('backend/assets/js/custom.js')}}"></script>
      <!-- calendar file css -->    
      <script src="{{url('backend/assets/js/semantic.min.js')}}"></script>
   </body>
</html> @endsection