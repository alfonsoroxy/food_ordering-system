<x-guest-layout>
  <main class="fxt-template-animation fxt-template-layout3" data-bg-image="{{ url('frontend/access/img/figure/bg3-l.jpg') }}">
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
              <h2>Login</h2>
              <p>Login into your pages account</p>
              <x-jet-validation-errors class="mb-4" />
              <form method="post" action="{{ route('login') }}" name="frm-login">
                @csrf
                <div class="form-group">
                  <label for="email" class="input-label">Email Address</label>
                  <input type="email" id="email" class="form-control" name="email" required="required">
                </div>
                <div class="form-group">
                  <label for="password" class="input-label">Password</label>
                  <input id="password" type="password" class="form-control" name="password" required="required">
                  <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                </div>
                <div class="form-group">
                  <div class="fxt-checkbox-area">
                    <div class="checkbox">

                    </div>
                    <div class="checkbox">
                      <input id="checkbox1" type="checkbox">
                      <label for="checkbox1">{{ __('Remember me') }}</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="fxt-btn-fill">Log in</button>
                </div>
              </form>
            </div>

            <div class="fxt-footer">
              <p>Don't have an account?<a href="{{ url('register') }}" class="switcher-text2 inline-text">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</x-guest-layout>
