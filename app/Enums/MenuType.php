<?php

namespace App\Enums;

enum MenuType: string
{
    // Aquí definimos los valores permitidos para tipo.
    case BEBIDA = 'bebida';
    case COMIDA = 'comida';
    case POSTRE = 'postre';
    case HAMBURGUESA = 'hamburguesa';
    // case DESAYUNO = 'desayuno';
}