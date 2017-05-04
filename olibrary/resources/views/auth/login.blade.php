<div id="modal-login" class="modal">
  <div class="modal-content">
    <h4>Connexion</h4>
    <div class="container">
      <div class="row">
        <form class="col s12" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="input-field inputLogin col s12">
              <input id="login_email" type="email" class="validate" name="email" required autofocus>
              <label for="login_email">Adresse email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field inputLogin col s12">
              <input id="login_password" type="password" class="validate" name="password" required autofocus>
              <label for="login_password">Mot de passe</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary indigo darken-1">
            Login
          </button>
          <a class="btn btn-link indigo darken-1" href="{{ route('password.request') }}">
            Forgot Your Password?
          </a>
        </form>
      </div>
    </div>
  </div>
</div>
