@extends('frontend.layout.main')

@section('main_container') 



    <div class="site-section"  data-aos="fade">
      <div class="container-fluid">

        <div class="row justify-content-center">

          <div class="col-md-7">
            <div class="row mb-5">
              <div class="col-12 ">
                <h2 class="site-section-heading text-center">Portrait Gallery</h2>
              </div>
            </div>
          </div>

        </div>
        <div class="row" id="lightgallery">
        @if($data)
        @foreach($data as $d)
        <?php
            $farr=explode(',',$d->file);
            ?>
            @foreach($farr as $f)
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade" data-src="{{url('backend/assets/img/admin/photos/'.$f)}}" data-sub-html="<h4>Fading Light</h4><p></p>">
                <a href="#"><img src="{{url('backend/assets/img/admin/photos/'.$f)}}" alt="IMage" class="img-fluid"></a>
            </div>
            @endforeach
          @endforeach
        @endif
        



        </div>
      </div>
    </div>

    <div class="footer py-4">
      <div class="container-fluid text-center">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>

    

    
    
  </div>
@endsection
