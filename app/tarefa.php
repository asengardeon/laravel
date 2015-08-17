<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarefa extends Model
{
    public $table = "Tarefa";
    protected $fillable = array('titulo', 'corpo');
}
