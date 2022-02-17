<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculo extends Model
{
    use HasFactory;

    /**
     * this parameter returned the model name in database
     * @var string
     */
    protected $table = 'calculo';

    /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'numero1',
    'numero2',
    'calculo',
  ];
}
