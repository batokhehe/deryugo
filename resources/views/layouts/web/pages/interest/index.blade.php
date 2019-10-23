@extends('layouts.web.master.master')
@section('content')
<form class="login100-form validate-form" method="POST" action="{{ route('register.interest') }}">
    {{ csrf_field() }}
    <div class="site-section">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="site-section-heading">
            <h2>Hi social people, welcome aboard…</h2>
            </div>
            <h5 class="text-white" style="margin-bottom: 35px;">Before you step in to the next page, please choose your interest</h5>
        </div>
        </div>
        <div class="row">
            @php $i = 1; $j = 1; @endphp
            @foreach($interests as $interest)
            @if($i == 1)
            <div class="col-md-6 mt-5" data-aos="fade" data-aos-delay="200">
            <div class="row">
            @endif
            @if($i == 1 || $i == 4 || $i == 7)
            <div class="col-md-6 col-lg-4 mb-1 mb-lg-0" data-aos="fade" data-aos-delay="600" style="padding-right: 0px;padding-left: 5px;">
            @endif
            <div class="hovereffect nopad text-center">
                <label class="image-checkbox">
                <img src="{{ url('/assets/images/categories/' . $interest->image) }}" alt="Image" class="img-fluid img-responsive">
                <input type="checkbox" name="interest[]" value="{{ $interest->id }}" />
                <i class="fa fa-check hidden"></i>
                <div class="overlay">
                    <h2>{{ $interest->name }}</h2>
                </div>
                </label>
            </div>
            @if($j == 18)
            <button type="submit" class="btn-custom pull-right" data-aos="fade-up" data-aos-delay="500" style="margin-top: 30px;float: right;">
            <span>
                JOIN NOW
            </span>
            </button>
            @endif
            @if($i == 3 || $i == 6 || $i == 9)
            </div>
            @endif
            @if($i % 9 == 0)
            </div>
            </div>
            @php $i = 0 @endphp
            @endif
            @php $i++; $j++; @endphp
            @endforeach
        </div>
    </div>
    </div>
</form>
@endsection
