<?php

namespace App\Models;

use App\Enums\MenuType;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'menus';
    protected $primaryKey = 'menu_id'; //Eloquent por defecto busca id. Aquí le decimos que la PK es menu_id.
    protected $fillable = ['nombre', 'tipo']; // $fillable: campos que se permiten asignar masivamente (Menu::create(...)).

    protected $casts = [
        'tipo' => MenuType::class,
    ];

    public function options() //hasMany porque un menu tiene muchas menu_options.
    {
        return $this->hasMany(MenuOption::class, 'menu_id');
    }
}
