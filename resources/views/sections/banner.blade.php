<div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            @foreach ($banners as $banner)
            <div style="background-image: url('/images/banners/{{ $banner->image }}')" class="item item-1">
                <div class="header-text">
                  <span class="category">Bizning kurslar</span>
                  <h2>{{ $banner->title }}</h2>
                  <p>{{ $banner->text }}</p>
                  <div class="buttons">
                    <div class="main-button">
                      <a href="{{ route('courses') }}">Kurslar</a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
