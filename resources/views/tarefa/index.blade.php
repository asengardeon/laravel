<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Lista de Tarefas</title>
</head>
<body>
  <ul>
  <?php foreach ($tarefa as $tar): ?>
    <li>
        Id: <?php echo $tar->id ?>
        <br/>
        Título: <?php echo $tar->titulo ?>
        <br/>
        Corpo: <?php echo $tar->corpo ?>
    </li>
  <?php endforeach ?>
  </ul>
  <a href="{!!URL::route('tarefa.create')!!}">Cadastro</a>
</body>
</html>
