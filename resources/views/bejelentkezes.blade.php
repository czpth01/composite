@include("includes.head")
<div class="bg-contact3" style="background-image: url('images/bg-01.jpeg');">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Menü</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('')}}">Hibajegyek <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-contact3">
    <div class="wrap-contact3">
      @include('flash-message')
      <form action = "{{url('login')}}" method = "post" class="contact3-form validate-form" >
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <span class="contact3-form-title">
          Admin bejelentkezés
        </span>
        <div class="wrap-input3 validate-input">
          <input class="input3" type="text" name="nev" placeholder="Felhasználónev">
          <span class="focus-input3"></span>
        </div>
        <div class="wrap-input3 validate-input">
          <input class="input3" type="password" name="jelszo" placeholder="Jelszó">
          <span class="focus-input3"></span>
        </div>
        <div class="container-contact3-form-btn">
          <button class="contact3-form-btn">
          Bejelentkezés
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@include("includes.footer")