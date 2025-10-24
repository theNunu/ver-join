<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuOption extends Model
{
    protected $primaryKey = 'menu_option_id';
    protected $fillable = ['menu_id', 'nombre', 'precio'];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
