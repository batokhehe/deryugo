@extends('layouts.web.master.master')
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
  <div class="hero-slides owl-carousel owl-theme">
    @foreach ($cms_sliders as $cms_slider)
    <!-- Single Hero Slide -->
    <div class="single-hero-slide d-flex align-items-center justify-content-center">
      <!-- Slide Img -->
      <div class="slide-img bg-img" style="background-image: url(assets/images/slider/{{ $cms_slider->image }});"></div>
      <!-- Slide Content -->
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="hero-slides-content">
              <h2 data-animation="fadeInUp" data-delay="300ms" style="margin-bottom:40px;padding-bottom:10px;">
                {{ $cms_slider->title }}
                <!--<span>{{ $cms_slider->title }}</span>-->
              </h2>
              <h6 data-animation="fadeInUp" data-delay="300ms">{{ $cms_slider->desc }}</h6>
              <a data-animation="fadeInUp" data-delay="500ms" href="{{ url($cms_slider->button_action_url) }}" class="btn-custom" data-aos="fade-up"
                data-aos-delay="400">
                <span>{{ $cms_slider->button_text }}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
<!-- ##### Hero Area End ##### -->

<div class="section" style="margin-top: 50px;">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="site-section-heading">
          <h2>{{ $cms_homes_contents->title }}</h2>
        </div>
      </div>
      <div class="col-lg-5 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="200">
        <p style="text-align: justify;">{{ $cms_homes_contents->desc }}</p>
      </div>
    </div>

    @php $i = 1; @endphp
    @foreach ($cms_homes_contents_details as $cms_homes_contents_detail)
    @if(($i % 2) == 0 )
    <div class="row align-items-center speaker">
      <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2" data-aos="fade" data-aos-delay="100">
        <img src="{{ url('/assets/images/home_content/' . $cms_homes_contents_detail->image) }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-6 ml-auto order-lg-1">
        <h2 class="text-white" data-aos="fade-left" data-aos-delay="200" style="text-align: left;margin-left: 60px;">
          {{ $cms_homes_contents_detail->title }}
        </h2>
        <div class="bio pr-lg-5">
          <p class="mb-4" data-aos="fade-left" data-aos-delay="400" style="text-align: justify;">
            {{ $cms_homes_contents_detail->desc }}
          </p>
        </div>
      </div>
    </div>
    @else
    <div class="row align-items-center speaker">
      <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
        <img src="{{ url('/assets/images/home_content/' . $cms_homes_contents_detail->image) }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-lg-6 ml-auto">
        <h2 class="text-white" data-aos="fade-right" data-aos-delay="200" style="text-align: right;">
          {{ $cms_homes_contents_detail->title }}
        </h2>
        <div class="bio pl-lg-5">
          <p class="mb-4" data-aos="fade-right" data-aos-delay="400" style="text-align: justify;">
            {{ $cms_homes_contents_detail->desc }}
          </p>
        </div>
      </div>
    </div>
    @endif
    @php $i++; @endphp
    @endforeach
  </div>
</div>

<div class="site-section2">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-4 ">
        <div class="site-section-heading" data-aos="fade-up">
          <h2>{{ $cms_homes_images_contents->title }}</h2>
        </div>
      </div>
      <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
        <p style="text-align: justify;"><?php echo nl2br($cms_homes_images_contents->desc); ?></p>
      </div>
    </div>
    <div class="row mb-5">
      @php $j = 1 @endphp
      @foreach ($cms_homes_images_contents_details as $cms_homes_images_contents_detail)
      @if($j == 1)
      <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
      @endif
      @if(!empty($cms_homes_images_contents_detail->name))
      <div class="hovereffect" @if($j != 1) style="margin-top: 30px;" @endif>
        <img src="{{ url('/assets/images/image_content/' . $cms_homes_images_contents_detail->image) }}" alt="Image" class="img-fluid">
        <div class="overlay">
          <h4 style="color:#F94632;margin-top: 20px;"> {{ $cms_homes_images_contents_detail->name }} </h4>
          <h2>{{ $cms_homes_images_contents_detail->title }}</h2>
          <a href="#" class="btn-custom" style="background: #3f404600;" data-aos="fade-up" data-aos-delay="500" data-toggle="modal" data-target="#portfolioModal1">
            <span>Read More</span>
          </a>
        </div>
      </div>
      @else
      <a href="{{ url('' . $cms_homes_images_contents_detail->desc) }}" class="btn-custom" data-aos="fade-up" data-aos-delay="500" style="margin-top: 30px;">
        <span>{{ $cms_homes_images_contents_detail->title }}</span>
      </a>
      @endif
      @php $j++ @endphp
      @if($j > 3 || $cms_homes_images_contents_detail->image_height > 699)
      @php $j = 1 @endphp
      </div>
      @endif
      @endforeach
    </div>
  </div>
</div>

<div class="container">
  <div class="row mb-5">
    <div class="col-lg-4 ">
      <div class="site-section-heading" data-aos="fade-up">
          <h2>{{ $cms_homes_images_contents3->title }}</h2>
        </div>
      </div>
      <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
        <p style="text-align: justify;">{{ $cms_homes_images_contents3->desc }}</p>
      </div>
  </div>
  <div class="row mb-5">
    @php $j = 1 @endphp
    @foreach ($cms_homes_images_contents_details3 as $cms_homes_images_contents_detail3)
    @if($j == 1)
    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
    @endif
    @if(!empty($cms_homes_images_contents_detail3->name))
    <div class="hovereffect" @if($j != 1) style="margin-top: 30px;" @endif>
      <img src="{{ url('/assets/images/image_content/' . $cms_homes_images_contents_detail3->image) }}" alt="Image" class="img-fluid">
      <div class="overlay">
        <h4 style="color:#F94632;margin-top: 20px;"> {{ $cms_homes_images_contents_detail3->name }} </h4>
        <h2>{{ $cms_homes_images_contents_detail3->title }}</h2>
        <a href="#" class="btn-custom" style="background: #3f404600;" data-aos="fade-up" data-aos-delay="500" data-toggle="modal" data-target="#portfolioModal2">
          <span>Read More</span>
        </a>
      </div>
    </div>
    @else
    <a href="{{ url('' . $cms_homes_images_contents_detail3->desc) }}" class="btn-custom" data-aos="fade-up" data-aos-delay="500" style="margin-top: 30px;">
      <span>{{ $cms_homes_images_contents_detail3->title }}</span>
    </a>
    @endif
    @php $j++ @endphp
    @if($j > 3 || $cms_homes_images_contents_detail3->image_height > 699)
    @php $j = 1 @endphp
    </div>
    @endif
    @endforeach
  </div>
</div>

<div class="">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-4">
        <div class="site-section-heading" data-aos="fade-up">
          <h2></h2>
        </div>
      </div>
      <div class="col-lg-12 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
        <p style="text-align: justify;">{{ $cms_homes_text_contents->desc }}</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade portfolioModal" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" style="max-width: 90%;">
    <div class="modal-content" style="background-color: rgba(252, 252, 252, 0.8);">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row mb-5">
          <div class="col-md-6 mt-5 pl-lg-5" data-aos="fade" data-aos-delay="200">
            <h5 class="text-white" style="margin-bottom: 20px;text-align: center;">FEED INSTAGRAM</h5>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/n1.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/i1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/n1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="600" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/i1.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/n1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/i1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="800" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/n1.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/i1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/n1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
            </div>
          </div>
          <div class="col-md-6 mt-5 pl-lg-5" data-aos="fade" data-aos-delay="200">
            <div class="row">
              <div class="col-md-6 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="800" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/anya.jpg') }}" alt="Image" class="img-fluid" style="width: 80%;border-radius: 50%;">
              </div>
              <div class="col-md-6 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="800" style="padding-top: 60px;padding-right: 0px;padding-left: 5px;">
                <h5 class="text-white">ANYA GERALDINE</h5>
                <span>Selebram & Youtuber</span>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam
              eveniet quo,
              ullam itaque expedita impedit. Eveniet, asperiores.</p>
            <div>
              <h5>Personal Information</h5>
              <table>
                <tbody>
                  <tr>
                    <td>Age</td>
                    <td>:</td>
                    <td>23</td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>Female</td>
                  </tr>
                  <tr>
                    <td>Interest</td>
                    <td>:</td>
                    <td>Lifestyle-Food-Movie-Travel</td>
                  </tr>
                  <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td>@anyageraldine</td>
                  </tr>
                  <tr>
                    <td>Youtube</td>
                    <td>:</td>
                    <td>Anya Geraldine</td>
                  </tr>
                  <tr>
                    <td>Twitter</td>
                    <td>:</td>
                    <td>@anyageraldine</td>
                  </tr>
                  <tr>
                    <td>Facebook</td>
                    <td>:</td>
                    <td>Anya Geraldine</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="btn-custom" data-aos="fade-up" data-aos-delay="500" style="float:right;padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 10px;">
                <span>
                  View Performance
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-6 pl-lg-5" data-aos="fade" data-aos-delay="200">
            <h4 class="text-white" style="margin-bottom: 35px;text-align: center;">WITH DERYUGO</h4>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/i2.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/i1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/i2.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="600" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/n1.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/i3.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/i1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="800" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/i1.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/n1.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/i5.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-lg-5" data-aos="fade" data-aos-delay="200">
            <h4 class="text-white" style="margin-bottom: 35px;text-align: center;">BRAND</h4>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="800" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/b6.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/b3.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/b6.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/b2.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/b6.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/b5.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="600" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/b5.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/b4.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/b6.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.modal-body -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.portfolioModal -->

<!-- Modal -->
<div class="modal fade portfolioModal" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" style="max-width: 90%;">
    <div class="modal-content" style="background-color: rgba(252, 252, 252, 0.8);">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row mb-5">
          <div class="col-md-6 mt-5 pl-lg-5" data-aos="fade" data-aos-delay="200">
            <div class="col-md-6 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="800" style="padding-right: 0px;padding-left: 5px;">
              <img src="{{ url('/assets/images/b3.jpg') }}" alt="Image" class="img-fluid" style="width: 80%;">
            </div>
          </div>
          <div class="col-md-6 mt-5 pl-lg-5" data-aos="fade" data-aos-delay="200">
              <div class="col-md-6 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="800" style="padding-right: 0px;padding-left: 5px;">
                <h5 class="text-white">NIKE</h5>
                <span>Fashion</span>
              </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam
              eveniet quo,
              ullam itaque expedita impedit. Eveniet, asperiores.</p>
            <div>
              <h5>Information</h5>
              <table>
                <tbody>
                  <tr>
                    <td>Instagram</td>
                    <td>:</td>
                    <td>@nike</td>
                  </tr>
                  <tr>
                    <td>Youtube</td>
                    <td>:</td>
                    <td>NIKE</td>
                  </tr>
                  <tr>
                    <td>Twitter</td>
                    <td>:</td>
                    <td>@nike</td>
                  </tr>
                  <tr>
                    <td>Facebook</td>
                    <td>:</td>
                    <td>NIKE</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="btn-custom" data-aos="fade-up" data-aos-delay="500" style="float:right;padding-top: 5px;padding-right: 10px;padding-bottom: 5px;padding-left: 10px;">
                <span>
                  View Performance
                </span>
              </a>
            </div>
          </div>
        </div>
          <div class="col-md-12 pl-lg-5" data-aos="fade" data-aos-delay="200">
            <h4 class="text-white" style="margin-bottom: 35px;text-align: center;">PRODUCT</h4>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="800" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/b6.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/b3.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/b6.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/b2.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/b6.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/b5.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="600" style="padding-right: 0px;padding-left: 5px;">
                <img src="{{ url('/assets/images/b5.jpg') }}" alt="Image" class="img-fluid">
                <img src="{{ url('/assets/images/b4.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
                <img src="{{ url('/assets/images/b6.jpg') }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.modal-body -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.portfolioModal -->
@endsection
