<?php

namespace App\Models;

use App\Enums\MenuTypeEnum;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primaryKey = 'menu_id';
    protected $fillable = ['nombre', 'tipo'];

    protected $casts = [
        'tipo' => MenuTypeEnum::class,
    ];

    public function options()
    {
        return $this->hasMany(MenuOption::class, 'menu_id');
    }
}
