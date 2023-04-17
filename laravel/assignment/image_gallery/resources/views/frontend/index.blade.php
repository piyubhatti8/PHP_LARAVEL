@extends('frontend.layout.main')

@section('main_container') 

    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
      <div class="row">
    @if($data)
    @foreach($data as $d)
        <div class="col-lg-4">
          <div class="image-wrap-2">
            <div class="image-info">
              <h2 class="mb-3">{{$d->category}}</h2>
              <a href="{{url('cat_wise_images')}}" class="btn btn-outline-white py-2 px-4">More Photos</a>
            </div>
            <img style="width: 900px; height:450px" src="{{url('backend/assets/img/admin/categories/'.$d->cat_img)}}" alt="Image" class="img-fluid">
          </div>
        </div>
        @endforeach
    @endif
     





      </div>
    </div>




    
  </div>
@endsection


  