<div class="team section" id="team">
    <div class="container">
      <div class="row">
        @foreach ($teachers as $teacher)
        <div class="col-lg-3 col-md-6">
            <div class="team-member">
              <div class="main-content">
                <img src="/images/teachers/{{ $teacher->image }}" alt="">
                <span class="category">{{ $teacher->job }}</span>
                <h4>{{ $teacher->name }}</h4>
                <ul class="social-icons">
                  <li><a target="_blenk" href="{{ $teacher->telegram }}"><i class="fab fa-telegram"></i></a></li>
                  <li><a target="_blenk" href="{{ $teacher->instagram }}"><i class="fab fa-instagram"></i></a></li>
                  <li><a target="_blenk" href="{{ $teacher->facebook }}"><i class="fab fa-facebook"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
