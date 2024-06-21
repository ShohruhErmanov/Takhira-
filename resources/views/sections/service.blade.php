<div class="services section" id="services">
    <div class="container">
      <div class="row">
        <h1 style="text-align: center; margin: 0 0 100px 0;">Bizning xizmatlar</h1>
        @foreach ($services as $service)
        <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <div class="icon">
                <i style="color: white;" class="{{  $service->icon }} fa-5x"></i>
              </div>
              <div class="main-content">
                <h4>{{ $service->title }}</h4>
                <p>  {!!\Str::limit($service['text'],100)!!}</p>
                <div class="main-button">
                  <a href="{{ route('service') }}">Ko'proq</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
