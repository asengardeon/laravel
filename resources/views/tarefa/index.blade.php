@extends('layouts.basico')

@section('title', 'Tarefas')


@section('conteudo')
  xpto
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
@stop
