<?php

namespace App\Models;

use App\Enums\MenuType;
use Illuminate\Database\Eloquent\Model;

class MenuOption extends Model
{

    protected $table = 'menus_options';
    protected $primaryKey = 'menu_option_id';
    protected $fillable = ['menu_id', 'nombre', 'precio'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }

    // ayuda: método para preguntar si es bebida
    // public function isBebida(): bool
    // {
    //     return $this->type === MenuType::BEBIDA->value; // o 'bebida' directo
    // }
}
