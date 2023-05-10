
@extends('backend.layout.main')

@section('main_container') 
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Brands Page</h2>   
                        <h5>Brands Page</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-10">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         ADD IMAGES
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Add Images</h3>
                                   <form action="{{url('/add_brands')}}" method="post" enctype="multipart/form-data">	
                                        @csrf
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <input type="text" name="brand" class="form-control" />
                                        </div>
 
                                        <input type="submit" name="submit" value="submit" class="btn btn-danger">

                                    </form>
                                </div>
                     
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>

             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
  
    
   
</body>
</html>
@endsection