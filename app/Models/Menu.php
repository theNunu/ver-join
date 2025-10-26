<?php

namespace App\Models;

use App\Enums\MenuType;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $table = 'menus';
    protected $primaryKey = 'menu_id';
    protected $fillable = ['nombre', 'tipo'];

    protected $casts = [
        'tipo' => MenuType::class,
    ];

    public function options()
    {
        return $this->hasMany(MenuOption::class, 'menu_id');
    }
}
