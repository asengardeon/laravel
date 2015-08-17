<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin"  method="POST" action="/auth/register">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">Registro de usuário</h2>

		<label for="inputName" class="sr-only">Nome</label>
        <input type="text" id="inputNome" class="form-control" placeholder="Nome completo" required autofocus>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus  value="{{ old('email') }}">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>


		<label for="inputPasswordConfirm" class="sr-only">Password confirm</label>
        <input type="password" id="inputPasswordConfirm" class="form-control" placeholder="Password confirm" required>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
