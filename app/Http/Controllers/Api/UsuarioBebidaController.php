<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UsuarioBebidaService;

class UsuarioBebidaController extends Controller
{
    protected $usuarioBebidaService;

    public function __construct(UsuarioBebidaService $usuarioBebidaService)
    {
        $this->usuarioBebidaService = $usuarioBebidaService;
    }

    public function waza()
    {
        // dd('llego');
        return 'wazaaa!!!!!';
    }   

    public function store(Request $request)
    {
        
        try {
            $data = $request->validate([
                'nombre_usuario' => 'required|string',
                'menu_option_id' => 'required|integer',
            ]);

            $usuarioBebida = $this->usuarioBebidaService->createUsuarioBebida($data);

            return response()->json([
                'success' => true,
                'message' => 'Bebida registrada correctamente.',
                'data' => $usuarioBebida,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }
}