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
        //belongsTo indica que una menu_option pertenece a un menu. Con esto podemos hacer $option->menu->tipo.
        return $this->belongsTo(Menu::class, 'menu_id');
    }

}
