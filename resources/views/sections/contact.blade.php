@if (session('seccess'))
<div class="alert alert-primary" style="background-color: #7a6ad8; margin: 20px 0;">
    <div class="alert-title"><h3 style="text-align: center; color: white;">{{ session('seccess') }}</h3></div>
  </div>
@endif
<div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to contact us anytime</h2>
            <p>Thank you for choosing our templates. We provide you best CSS templates at absolutely 100% free of charge. You may support us by sharing our website to your friends.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="{{ route('contact_add') }}" method="POST">
                @csrf
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="name" id="name" placeholder="F.I.O" autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="contact" id="name" placeholder="Telefon raqam" autocomplete="on" required>
                    </fieldset>
                  </div>

                  <div class="col-lg-12 form-group">
                    <fieldset>
                    <label style="color: white; padding: 5px;">Kursni tanlang</label>
                    <fieldset>
                    <select style="background-color: rgba(249, 235, 255, 0.15); border: none; color: white; margin-bottom: 30px; padding: 10px 10px; border-radius: 20px;" id="contact-form input" name="category_id" autocomplete="on" class="form-control">
                        @foreach ($categories as $category)
                            <option style="color: black;" value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </fieldset>
                </div>

                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Xabar"></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Yuborish</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
