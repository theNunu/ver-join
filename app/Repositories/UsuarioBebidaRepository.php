<?php 

namespace App\Repositories;

use App\Models\UsuarioBebida;
use App\Models\MenuOption;
use App\Enums\MenuType;

class UsuarioBebidaRepository
{
    public function create(array $data)
    {
        $menuOption = MenuOption::with('menu')->find($data['menu_option_id']);

        if (!$menuOption) {
            throw new \Exception('La opción de menú no existe.');
        }

        // Validamos que sea una bebida
        if ($menuOption->menu->tipo !== MenuType::BEBIDA) {
            throw new \Exception('Solo se permiten bebidas.');
        }

        UsuarioBebida::create($data);

        // $menuOption = MenuOption::where('nombre', $data['menu_option_id'])->first();

        // dd($menuOption->nombre);

           return [
            'nombre del usuario' => $data['nombre_usuario'],
            'nombre del producto seleccionado' => $menuOption->nombre,
           ];

     
    }
}