  <main>
    <div>
      <section class="section-header bg-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">
                <h1 class="text-capitalize mb-4 font-lg text-white">Get in Touch</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- contact form start -->
      <section class="contact-form-wrap section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center ">
              <span class="text-primary font-extra font-md">Contact us</span>
              <h2 class="mb-5">Get in touch </h2>
              @if(Session::has('message'))
              <!-- form message -->
              <div class="row" class="contact-form-wrap">
                <div class="col-12">
                  <div class="alert alert-success" role="alert">
                    <center><i class="icofont-check-circled"> </i>{{Session::get('message')}}</center>
                  </div>
                </div>
              </div>
              <!-- end message -->
              @endif
              <form id="contact-form" class="contact__form" method="post" wire:submit.prevent="addContact">
                @csrf
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input name="contact_name" type="text" class="form-control" placeholder="Name" wire:model.lazy="contact_name">
                    @error('contact_name') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                  <div class="form-group col-lg-6">
                    <input name="contact_email" type="email" class="form-control" placeholder="Email Address" wire:model.lazy="contact_email">
                    @error('contact_email') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input name="contact_number" type="number" class="form-control" placeholder="Phone Number" wire:model.lazy="contact_number">
                    @error('contact_number') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                  <div class="form-group col-lg-6">
                    <input name="contact_subject" type="text" class="form-control" placeholder="Subject" wire:model.lazy="contact_subject">
                    @error('contact_subject') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                </div>

                <div class="form-group-2 mb-4">
                  <textarea name="contact_message" class="form-control" rows="8" placeholder="Your Message" wire:model.lazy="contact_message"/></textarea>
                  @error('contact_message') <p class="text-danger">{{$message}}</p> @enderror
                </div>
                <button class="btn btn-main" name="Submit" type="submit" value="Submit">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="contact-form-wrap section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center ">
              <span class="text-primary font-extra font-md">Map</span>
              <h2 class="mb-5">Our Location</h2>
              <div class="map" id="map_canvas" >
                <div class="google-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7720.975734476112!2d121.02508967447315!3d14.628225509139485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b64b95e950b1%3A0xf3d314de2afb00!2sObrero%2C%20Diliman%2C%20Quezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1633153618793!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
    <!--Footer start -->
    @include('partials.footer')
    <!-- Footer  End -->
  </main>
