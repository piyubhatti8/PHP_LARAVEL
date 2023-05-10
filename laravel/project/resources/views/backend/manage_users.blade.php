@extends('backend.layout.main')

@section('main_container') 
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    @if($users)


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Users
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{{url('/manage_users')}}">
                                @csrf
                                <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="search" value="{{$search_val}}" class="form-control" placeholder="Search Here..." />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Search" class="btn btn-danger"/>
                                    </div>
                            
                                       
                                
                                </div>
                                </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>User Name</th>
                                            <th>Mobile nol</th>
                                
                                        </tr>
                                    </thead>
                                    @foreach($users as $u)
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>{{$u->name}}</td>
                                            <td>{{$u->unm}}</td>
                                            <td>{{$u->mob}}</td>
                                        </tr>
                     
                                    </tbody>
                                    @endforeach
                                    @endif
                                </table>
                            </div>
                            
                        </div>
                            </form>
                    </div>
                   
                    <!--End Advanced Tables -->
                </div>
            </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
 
   
</body>
</html>
@endsection