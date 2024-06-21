@extends('layouts.site')
@section('title')
 Bizning xizmatlar
@endsection

@section('content')
<div class="main-banner" id="top">
    <h1 style="text-align: center; color: #fff">Bizning xizmatlar</h1>
</div>

<div class="services section" id="services">
    <div class="container">
      <div class="row">

        @foreach ($services as $service)
        <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon">
                <i style="color: white;" class="{{  $service->icon }} fa-5x"></i>
              </div>
              <div class="main-content">
                <h4>{{ $service->title }}</h4>
                <p>{{ $service->text }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>


@endsection
