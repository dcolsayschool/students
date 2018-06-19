<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>Authentification</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="controller/authenticate.php">
      <span class="mb-4">S</span>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <!-- Recupération du login -->
      <label for="login" class="sr-only">Login</label>
      <input type="text" id="login" name="login" class="form-control" placeholder="Your Login" required autofocus>

      <!-- Récupération du mot de passe -->
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password"  name="password" class="form-control" placeholder="Password" required>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>
