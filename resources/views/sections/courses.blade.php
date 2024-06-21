<section class="section courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>Bizning kurslarimiz</h2>
                </div>
            </div>
        </div>
        <ul class="event_filter">
            <li>
                <a class="is_active" href="#!" data-filter="*">Barchasi</a>
            </li>
            @foreach ($categories as $category)
                <li>
                    <a href="#!" data-filter=".{{ $category->id }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
        <div class="row event_box">
            @foreach ($courses as $course)
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 {{ $course->category_id }}">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="{{ route('contact') }}"><img src="/images/courses/{{ $course->image }}" alt=""></a>
                            <span class="category">{{ $course->category->name }}</span>
                            <span class="price">
                                <h6><em>{{ $course->price }}</em></h6>
                            </span>
                        </div>
                        <div class="down-content">
                            <span class="author">O'qituvchi: {{ $course->teacher }}</span>
                            <h4>{{ $course->title }}</h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
