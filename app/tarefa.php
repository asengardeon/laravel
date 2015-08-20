<?php

namespace Stammcontrol;

use Illuminate\Database\Eloquent\Model;

class tarefa extends Model
{
    public $table = "Tarefa";
    protected $fillable = array('titulo', 'corpo');
}
