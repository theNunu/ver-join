<?php 

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Services\UsuarioBebidaService;

// class UsuarioBebidaController extends Controller
// {
//     protected $service;

//     public function __construct(UsuarioBebidaService $service)
//     {
//         $this->service = $service;
//     }

//     public function waza()
//     {
//         return 'wazaaa!!!!!';
//     }   

//     public function store(Request $request)
//     {
//         try {
//             $data = $request->validate([
//                 'nombre_usuario' => 'required|string',
//                 'menu_option_id' => 'required|integer',
//             ]);

//             $usuarioBebida = $this->service->createUsuarioBebida($data);

//             return response()->json([
//                 'success' => true,
//                 'message' => 'Bebida registrada correctamente.',
//                 'data' => $usuarioBebida,
//             ]);
//         } catch (\Exception $e) {
//             return response()->json([
//                 'success' => false,
//                 'message' => $e->getMessage(),
//             ], 400);
//         }
//     }
// }