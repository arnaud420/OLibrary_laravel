<div id="modal-register" class="modal">
  <div class="modal-content">
    <h4>Inscription</h4>
    <div class="container">
      <div class="row">
        <form class="col s12" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="input-field col s12">
              <input id="register_name" type="text" class="validate" name="name" required autofocus>
              <label for="register_name">Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="register_email" type="email" class="validate" name="email" required autofocus>
              <label for="register_email">Adresse email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="register_password" type="password" class="validate" name="password" required autofocus>
              <label for="register_password">Mot de passe</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="register_comfirm_password" type="password" class="validate" name="password_confirmation" required autofocus>
              <label for="register_comfirm_password">Comfirmer Mot de passe</label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary indigo darken-1">
            Inscription
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

