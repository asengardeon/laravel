<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


  <title>Cadastro de Tarefa</title>
</head>
<body>
   <div class="container">
	  <form role="form" class="form-inline" action="{!!URL::route('tarefa.store')!!}" method="post">
		<div class="form-group">
		    <label for="titulo">Título:</label>
		    <input type="text"  class="form-control"  name="titulo">
		    <label for="corpo">Corpo:</label>
		    <input type="text"  class="form-control" name="corpo">
		    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
		</div>
	  	<button type="submit" class="btn btn-default">Submit</button>
	  </form>
   </div>
</body>
</html>
