<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UsuarioBebidaService;

class BasuraController extends Controller
{
    // protected $service;

    // public function __construct(UsuarioBebidaService $service)
    // {
    //     $this->service = $service;
    // }

 public function index(){
    return "Hola desde BasuraController";
 }

}