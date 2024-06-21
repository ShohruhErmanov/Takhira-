<section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>Bizning amaliy darslarimizdan lavhalar</h2>
          </div>
        </div>
      </div>
      <div class="row event_box">

        @foreach ($news as $new)
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
            <div class="events_item">
              <div class="thumb">
                <a href="#"><img src="/images/news/{{ $new->image }}" alt=""></a>
              </div>
              <div class="down-content">
                <h4>{{ $new->title }}</h4>
                <p>{{ $new->text }}</p>
              </div>
            </div>
          </div>

        @endforeach

    </div>
  </section>
