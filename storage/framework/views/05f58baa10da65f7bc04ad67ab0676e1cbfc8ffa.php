
    <style>

    body {
      background: #E5E5E5;
      font-family: 'Open Sans', sans-serif;
    }

    .login {
      width: 400px;
      margin: 16px auto;
      font-size: 16px;
    }
    .logo {
      width: 400px;
      margin: 16px auto;
      text-align: center;
      background: #E5E5E5;
      padding: 12px;
      color: #7a9e9f;
      font-size: 40px;
    }

    /* Reset top and bottom margins from certain elements */
    .login-header,
    .login p {
      margin-top: 0;
      margin-bottom: 0;
    }

    /* The triangle form is achieved by a CSS hack */
    .login-triangle {
      width: 0;
      margin-right: auto;
      margin-left: auto;
      border: 12px solid transparent;
      border-bottom-color: #28d;
    }

    .login-header {
      background: #7a9e9f;
      padding: 20px;
      font-size: 1.4em;
      font-weight: normal;
      text-align: center;
      text-transform: uppercase;
      color: #fff;
    }

    .login-container {
      background: #FFF;
      padding: 12px;
    }

    /* Every row inside .login-container is defined with p tags */
    .login p {
      padding: 12px;
    }

    .login input {
      box-sizing: border-box;
      display: block;
      width: 100%;
      border-width: 1px;
      border-style: solid;
      padding: 16px;
      outline: 0;
      font-family: inherit;
      font-size: 0.95em;
    }

    .login input[type="email"],
    .login input[type="password"] {
      background: #fff;
      border-color: #bbb;
      color: #555;
    }

    /* Text fields' focus effect */
    .login input[type="email"]:focus,
    .login input[type="password"]:focus {
      border-color: #888;
    }

    .login input[type="submit"] {
      background: #7a9e9f;
      border-color: transparent;
      color: #fff;
      cursor: pointer;
    }

    .login input[type="submit"]:hover {
      background: #F3BBBB;
    }

    /* Buttons' focus effect */
    .login input[type="submit"]:focus {
      border-color: #05a;
    }
          </style>
          <div class="container">
            <div class="logo">
              <div class="row">
                <br><br>
                  <img style="margin: auto; display: block;" height="150px" width="350px" src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="LOGO">
              </div>
              
            </div>
              <div class="row">
          <div class="login">
    

    <h2 class="login-header">Taiba Center</h2>

    <form class="login-container" method="POST" action="<?php echo e(url('/login')); ?>" >
      <?php echo e(csrf_field()); ?>

      <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
          <p><input type="email"  placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required autofocus></p>
          <?php if($errors->has('email')): ?>
              <span class="help-block">
                  <strong><?php echo e($errors->first('email')); ?></strong>
              </span>
          <?php endif; ?>
      </div>
      <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
        <p><input placeholder="Password" type="password" name="password" required></p>

        <?php if($errors->has('password')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
    <p><input type="submit" value="Log in"></p>
    <p><a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a></p>
    </form>
    </div>

    <a class="btn btn-link" target="blank" href="http://www.obaaa.sd" style="margin: auto; display: block; height: 95px; width: 50px; " >
    <img
    height="95px" width="50px" src="<?php echo e(asset('assets/img/taiba.png')); ?>" alt="obaaa" href="obaaa.sd">
    </a>
    <br>
    <div style=" text-align: center;"><b>TAIBA-CLINICS version: 0.8</b></div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </div>
</div>
