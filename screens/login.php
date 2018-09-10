<section class="login">
  <div class="container">
    <div class="content">
      <h1>Log in</h1>
      <form action="/login" method="post">
        <label for="username">Username</label>
        <input class="default" type="text" name="username" value="" placeholder="Your username">
        <label for="password">Password</label>
        <input class="default" type="password" name="password" value="" placeholder="Your password">
        <button class="btn pretend-login-btn" type="button" name="login">
          Sign in <i class="fa fa-fw fa-angle-right"></i>
        </button>
      </form>
      <hr>
      <button class="btn facebook-btn pretend-login-btn" type="submit" name="login">
        Sign in with <i class="fab fa-fw fa-facebook-f"></i> Facebook
      </button>
    </div>
  </div>
</section>
