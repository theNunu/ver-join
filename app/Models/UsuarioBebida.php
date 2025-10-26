<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioBebida extends Model
{

    protected $table = 'usuario_bebida';
    protected $primaryKey = 'usuario_bebida_id';
    protected $fillable = ['nombre_usuario', 'menu_option_id'];

    public function menuOption()
    {
        return $this->belongsTo(MenuOption::class, 'menu_option_id');
    }
}
