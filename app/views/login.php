<?=$cabecera?>
    
<div class="vh-100 d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-8 col-xs-10 mx-auto">
        <div id="loginFrame" class="position-relative">
            <div id="login" class="levelUp shadow bg-white card p-3">
            <h3 class="my-2">Iniciar Sesion</h3>
            <form method="post" action="<?=site_url('iniciar')?>" enctype="multipart/form-data" class='mx-3 my-3'>

              <div class="mb-3">
                <label for="user">Usuario</label>
                <input type="text" required value="<?=old('user')?>" class="mt-2 form-control" id="user" name="user" >
              </div>

              <div class="mb-2">
                <label for="pass">Contraseña</label>
                <input type="password" required class="mt-2 form-control" id="pass" name="pass">
              </div>
            
              <div class="mb-2">
                <button class="btn btn-lg btn-success w-100" type="submit">Iniciar Sesion</button>
              </div>
              
            </form>
            <p>No tienes cuenta? <a class="text-dark" href="<?=site_url('sigin') ?>" >Crea una</a></p> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?=$pie?>




