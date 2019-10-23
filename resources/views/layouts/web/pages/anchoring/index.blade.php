@extends('layouts.web.master.master')
@section('content')
<div id="about" data-spy="scroll" class="site-section scrollspy-example" style="background-image: url(assets/images/aboutus.jpg);">
  <div class="overlay"></div>
  <div class="container" style="padding-top: 113px;">
    <div class="row mb-5">
      <div class="col-lg-4" data-aos="fade-up">
        <div class="site-section-heading">
          <h2 style="color: #fff;">{{ $cms_headers->title }}</h2>
        </div>
      </div>
      <div class="col-lg-6 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
      </div>
    </div>
    <div class="row align-items-center speaker">
      <div class="col-lg-6 order-lg-1">
        <div class="bio pr-lg-5">
          <p class="mb-4" data-aos="fade-left" data-aos-delay="400" style="text-align: justify; color: #fff;">{{ $cms_headers->desc }}</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="site-section2" style="background-color: #000000;">
    <div class="container">
      <div class="col-md-12">
        
          <div class="col-md-12" data-aos="fade-up">
            <div class="site-section-heading text-center">
              <h2 style="color:#F11515;">{{ $cms_anchoring_contents->title }}</h2>
            </div>
          </div>
          <div class="col-md-12 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
            <p style="text-align: center; color:#fff; width: 70%; margin: 0 auto;">{{ $cms_anchoring_contents->desc }}</p>
          </div>
        
      </div>
    </div>
  </div>

  <div id="service" data-spy="scroll" class="site-section2 scrollspy-example">
    <div class="container" style="width: 70%;">
      <div class="row align-items-center speaker">
        <div class="col-md-4 mb-5" data-aos="fade" data-aos-delay="100">
          <img src="{{ url('/assets/images/anchoring_content/' . $cms_anchoring_content_details1->image) }}" alt="Image" class="img-fluid">
        </div>
        <div class="site-section-heading col-md-8 ml-auto">
          <h2 class="text-white mb-4" data-aos="fade-right" data-aos-delay="200" style="font-size: 30px;">{{ $cms_anchoring_content_details1->title }}</h2>
          @php $i = 1 @endphp
          @foreach ($cms_anchoring_content_details1_items as $cms_anchoring_content_details1_item)
            @if($i % 2 == 0)
            <div class="row">
              <div class="col-md-3 mb-5 mt-5">
                <img src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchoring_content_details1_item->image ) }}" alt="" class="img-fluid img-middle">
              </div>
              <div class="col-md-9" style="padding-top: 20px;">
                <h5 class="text-white">{{ $cms_anchoring_content_details1_item->title }}</h5>
                <p class="mb-4" data-aos="fade-right" data-aos-delay="400" style="text-align: justify;">{{ $cms_anchoring_content_details1_item->desc }}</p>
              </div>
            </div>
            @else
            <div class="row">
              <div class="col-md-3 mb-5 mt-5">
                <img src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchoring_content_details1_item->image ) }}" alt="" class="img-fluid img-middle">
              </div>
              <div class="col-md-9" style="margin-top: 20px;">
                <h5 class="text-white">{{ $cms_anchoring_content_details1_item->title }}</h5>
                <p class="mb-4" data-aos="fade-right" data-aos-delay="400" style="text-align: justify;">{{ $cms_anchoring_content_details1_item->desc }}</p>
              </div>
            </div>
            @endif
            @php $i++ @endphp
          @endforeach
        </div>
      </div>

      <div class="row align-items-center speaker">
        <div class="col-md-12 mb-5" data-aos="fade" data-aos-delay="100">
          <img src="{{ url('/assets/images/anchoring_content/' . $cms_anchoring_content_details2->image) }}" alt="Image" class="img-fluid">
        </div>
        <div class="site-section-heading col-md-8">
          <h2 class="text-white mb-4" data-aos="fade-right" data-aos-delay="200" style="font-size: 30px;">{{ $cms_anchoring_content_details2->title }}</h2>
          @php $i = 1 @endphp
          @foreach ($cms_anchoring_content_details2_items as $cms_anchoring_content_details2_item)
            @if($i % 2 == 0)
            <div class="row">
              <div class="col-md-3 mb-5 mt-5">
                <img src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchoring_content_details2_item->image ) }}" alt="" class="img-fluid img-middle">
              </div>
              <div class="col-md-9" style="padding-top: 20px;">
                <h5 class="text-white">{{ $cms_anchoring_content_details2_item->title }}</h5>
                <p class="mb-4" data-aos="fade-right" data-aos-delay="400" style="text-align: justify;">{{ $cms_anchoring_content_details2_item->desc }}</p>
              </div>
            </div>
            @else
            <div class="row">
              <div class="col-md-3 mb-5 mt-5">
                <img src="{{ url('/assets/images/anchoring_content_item/' . $cms_anchoring_content_details2_item->image ) }}" alt="" class="img-fluid img-middle">
              </div>

              <div class="col-md-9" style="margin-top: 20px;">
                <h5 class="text-white">{{ $cms_anchoring_content_details2_item->title }}</h5>
                <p class="mb-4" data-aos="fade-right" data-aos-delay="400" style="text-align: justify;">{{ $cms_anchoring_content_details2_item->desc }}</p>
              </div>
            </div>
            @endif
            @php $i++ @endphp
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div id="trendnow" data-aos="fade">
    <div class="site-section3">
      <div class="container" style="width: 56%;">
        <div class="col-md-12" data-aos="fade-up">
          <div class="site-section-heading text-center">
            <h2 style="color:#F11515;">Trending Now</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="trendnow" class="site-section" data-aos="fade">
    <div class="site-section" style="background-image: url(assets/images/podcast.jpg);">
      <div class="container" style="width: 70%;">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
              <div class="site-section-heading text-left">
                <h2 style="color:#FFF;">Podcast</h2>
              </div>
            </div>
            <div class="col-md-6"style="padding-top: 55px;">
              <!--Dropdown primary-->
              <div class="dropdown">
                <!--Trigger-->
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" style="border-radius: 30px;">Filter</button>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="#">Sosial Issues</a>
                  <a class="dropdown-item" href="#">Lifestyle</a>
                  <a class="dropdown-item" href="#">Foods</a>
                  <a class="dropdown-item" href="#">Travelling</a>
                  <a class="dropdown-item" href="#">Deryugo Spot</a>
                </div>
              </div>
              <!--/Dropdown primary-->
            </div>
        </div>
        
      </div>
    </div>
    <div class="container" style="padding-top: 30px;">
      <div class="slide-one-item home-slider owl-carousel">
        <div class="row justify-content-center">
          <div class="card-carousel">
            @php $i = 0 @endphp
            @php $j = 0 @endphp
            @foreach ($cms_anchoring_podcasts as $cms_anchoring_podcast)
            <div class="my-card">
              <img src="{{ url('/assets/images/podcast/' . $cms_anchoring_podcast->image ) }}" alt="Image" class="img-fluid" style="width: inherit;">
              <h2 style="margin-top: -150px;text-align:center;color:#FFF;">{{ $cms_anchoring_podcast->title }}</h2>
                <a href="#" class="btn-custom" data-toggle="modal" data-target="#podcastModal1"  style="background: #3f404600;" data-aos="fade-up" data-aos-delay="500">
                  <span>
                    Play
                  </span>
                </a>
            </div>
            @php $i++ @endphp
            @php $j++ @endphp
            @if($i > 4)
              </div>
            </div>
              @if($j < 9)
              <div class="row justify-content-center">
                <div class="card-carousel">
                @endif
                @php $i = 0 @endphp
                @endif
                @endforeach
                </div>
              </div>
          </div>
        </div>
      </div>

  <div id="article" class="site-section" data-aos="fade">
    <div class="site-section" style="background-image: url(assets/images/article.jpg);">
      <div class="container" style="width: 70%;">
        <div class="row">
            <div class="col-md-6" data-aos="fade-up">
              <div class="site-section-heading text-left">
                <h2 style="color:#FFF;">Article</h2>
              </div>
            </div>
            <div class="col-md-6" style="padding-top: 55px;">
              <!--Dropdown primary-->
              <div class="dropdown">
                <!--Trigger-->
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" style="border-radius: 30px;">Filter</button>
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary">
                  <a class="dropdown-item" href="#">Sosial Issues</a>
                  <a class="dropdown-item" href="#">Lifestyle</a>
                  <a class="dropdown-item" href="#">Foods</a>
                  <a class="dropdown-item" href="#">Travelling</a>
                  <a class="dropdown-item" href="#">Deryugo Spot</a>
                </div>
              </div>
              <!--/Dropdown primary-->
            </div>
        </div>
      </div>
    </div>
    <div class="container" style="padding-top: 30px;">
      <div class="slide-one-item home-slider owl-carousel">
        <div class="row justify-content-center">
          <div class="card-carousel">
            @php $i = 0 @endphp
            @php $j = 0 @endphp
            @foreach ($cms_anchoring_articles as $cms_anchoring_article)
            <div class="my-card">
              <img src="{{ url('/assets/images/article/' . $cms_anchoring_article->image ) }}" alt="Image" class="img-fluid" style="width: inherit;">
              <h2 style="margin-top: -150px;text-align:center;color:#FFF;">{{ $cms_anchoring_article->title }}</h2>
                <a href="#" class="btn-custom" data-toggle="modal" data-target="#articleModal1"  style="background: #3f404600;" data-aos="fade-up" data-aos-delay="500">
                  <span>
                    Read More
                  </span>
                </a>
            </div>
            @php $i++ @endphp
            @php $j++ @endphp
            @if($i > 4)
              </div>
            </div>
              @if($j < 9)
              <div class="row justify-content-center">
                <div class="card-carousel">
                  @endif
                  @php $i = 0 @endphp
                  @endif
                  @endforeach
                </div>
              </div>
        </div>
      </div>
    </div>

  <div class="site-section2" style="background-color: #000000;">
    <div class="container">
      <div class="col-md-12">
        
          <div class="col-md-12" data-aos="fade-up">
            <div class="site-section-heading text-center">
              <h2 style="color:#F11515;">{{ $cms_anchoring_image_contents->title }}</h2>
            </div>
          </div>
          <div class="col-md-12 mt-5 pl-lg-5" data-aos="fade-up" data-aos-delay="100">
            <p style="text-align: center; color:#fff; width: 70%; margin: 0 auto;">There you go....<br>
We value them because they cool, they inspired with great and relevant content.</p>
          </div>
        
      </div>
    </div>
  </div>
  <div id="influencer" class="site-section2" data-aos="fade">
    <div class="container" style="width: 70%;margin: 0 auto;">
      <div class="row site-section2">
        @php $j = 1 @endphp
        @foreach ($cms_anchoring_image_content_details as $cms_anchoring_image_content_detail)
        @if($j == 1)
        <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200"style="padding-right: 0px;padding-left: 5px;">
        @endif
        @if(!empty($cms_anchoring_image_content_detail->name))
        <div class="hovereffect" @if($j != 1) style="margin-top: 30px;" @endif>
          <img src="{{ url('/assets/images/anchoring_image_content/' . $cms_anchoring_image_content_detail->image) }}" alt="Image" class="img-fluid">
          <div class="overlay">
            <h4 style="color:#F94632;margin-top: 20px;"> {{ $cms_anchoring_image_content_detail->name }} </h4>
            <h2>{{ $cms_anchoring_image_content_detail->title }}</h2>
            <!-- <a href="#" class="btn-custom" style="background: #3f404600;" data-aos="fade-up" data-aos-delay="500" data-toggle="modal" data-target="#portfolioModal1">
              <span>Read More</span>
            </a> -->
          </div>
        </div>
        @else
        <a href="{{ url('' . $cms_anchoring_image_content_detail->desc) }}" class="btn-custom" data-aos="fade-up" data-aos-delay="500" style="margin-top: 30px;">
          <span>{{ $cms_anchoring_image_content_detail->title }}</span>
        </a>
        @endif
        @php $j++ @endphp
        @if($j > 3 || $cms_anchoring_image_content_detail->image_height > 699)
        @php $j = 1 @endphp
        </div>
        @endif
        @endforeach
      </div>

      <div class="row site-section-heading2 mb-5">
        <div class="col-md-6 mt-5" data-aos="fade" data-aos-delay="200">
          <h4 style="text-align: center; background-color: #4B0000; height: 60px; color:#fff;">{{ $cms_anchoring_image_tiles6->title }}</h4>
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200" style="padding-right: 0px;padding-left: 5px;">
            @php $i = 0 @endphp
            @php $j = 0 @endphp
            @foreach($cms_anchoring_image_tiles6_details as $cms_anchoring_image_tiles6_detail)
              <img src="{{ url('/assets/images/anchoring_image_tile/' . $cms_anchoring_image_tiles6_detail->image ) }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
            @php $i++ @endphp
            @php $j++ @endphp
            @if($i > 2)
            @php $i = 0 @endphp
            </div>
              @if($j < 8)
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200" style="padding-right: 0px;padding-left: 5px;">
              @endif
            @endif
            @endforeach
          </div>
        </div>

        <div class="col-md-6 mt-5 pl-lg-5" data-aos="fade" data-aos-delay="200">
          <h4 style="text-align: center; background-color: #4B0000; height: 60px; color:#fff;">{{ $cms_anchoring_image_tiles7->title }}</h4>
          <div class="row">
            <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200" style="padding-right: 0px;padding-left: 5px;">
            @php $i = 0 @endphp
            @php $j = 0 @endphp
            @foreach($cms_anchoring_image_tiles7_details as $cms_anchoring_image_tiles7_detail)
              <img src="{{ url('/assets/images/anchoring_image_tile/' . $cms_anchoring_image_tiles7_detail->image ) }}" alt="Image" class="img-fluid" style="padding-top: 5px;">
            @php $i++ @endphp
            @php $j++ @endphp
            @if($i > 2)
            @php $i = 0 @endphp
            </div>
              @if($j < 8)
              <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="200" style="padding-right: 0px;padding-left: 5px;">
              @endif
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Modal -->
    <div class="modal fade podcastModal" id="podcastModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" style="max-width: 90%;">
        <div class="modal-content" style="background-color: rgba(252, 252, 252, 0.8);">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

          </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.portfolioModal -->
  <!-- Modal -->
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
@endsection
