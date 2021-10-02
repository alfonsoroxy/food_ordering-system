<x-guest-layout>

</x-guest-layout>

<x-guest-layout>
  <div class="fxt-template-animation fxt-template-layout3" data-bg-image="img/figure/bg3-r.jpg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12 fxt-none-991">
          <div class="fxt-header">
            <div class="fxt-transformY-50 fxt-transition-delay-1">
              <a href="{{ url('/') }}" class="fxt-logo"><img src="{{ asset('frontend/images/logo.png') }}" alt="Logo"></a>
            </div>
            <div class="fxt-transformY-50 fxt-transition-delay-2">
              <h1>Welcome To EYBI SILOG</h1>
            </div>
            <div class="fxt-transformY-50 fxt-transition-delay-3">
              <p>We are group who lost job cause of pandemic build and start this Silugan.
                We start small bussiness and sell like Chicksilog compose of chicken , itlog (egg) and
                sinangag (fried rice). Also many more Tocilog , Tapasilog , Sisigsilog and etc.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 fxt-bg-color">
          <div class="fxt-content">
            <div class="fxt-form">
              <h2>Register</h2>
              <p>Create an account</p>
              <x-jet-validation-errors class="mb-4" />
              <form method="POST" action="{{ route('register') }}" name="frm-register">
                @csrf
                <div class="form-group">
                  <label for="name" class="input-label">Name</label>
                  <input type="text" id="name" class="form-control" name="name" placeholder="Name" required="required">
                </div>
                <div class="form-group">
                  <label for="email" class="input-label">Email Address</label>
                  <input type="email" id="email" class="form-control" name="email" placeholder="demo@gmail.com" required="required">
                </div>
                <div class="form-group">
                  <label for="password" class="input-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" placeholder="********" required autocomplete="new-password" />
                  <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                </div>
                <div class="form-group">
                  <label for="password" class="input-label">Confirm Password</label>
                  <input id="re-password" type="password" class="form-control" name="password_confirmation" placeholder="********" required autocomplete="new-password" />
                  <i toggle="#re-password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                </div>
                <div class="form-group">
                  <button type="submit" class="fxt-btn-fill">{{ __('Sign in') }}</button>
                </div>
              </form>
            </div>
            <div class="fxt-footer">
              <p>Have an account?<a href="{{ url('login') }}" class="switcher-text2 inline-text">{{ __('Login here') }}</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-guest-layout>
