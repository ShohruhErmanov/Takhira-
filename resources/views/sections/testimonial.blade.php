<div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            @foreach ($about_adds as $about_add)
            <div class="item">
                <p>{{ $about_add->description }}</p>
                <div class="author">
                  <img src="/images/aboutadd/{{ $about_add->image }}" alt="">
                  <span class="category">{{ $about_add->job }}</span>
                  <h4>{{ $about_add->name }}</h4>
                </div>
              </div>
            @endforeach


          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p>You can search free CSS templates on Google using different keywords such as templatemo portfolio, templatemo gallery, templatemo blue color, etc.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
