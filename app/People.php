<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'phone', 'message'];

}
