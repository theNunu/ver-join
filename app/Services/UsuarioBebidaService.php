<?php 

namespace App\Services;

use App\Repositories\UsuarioBebidaRepository;

class UsuarioBebidaService
{
    protected $repository;

    public function __construct(UsuarioBebidaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createUsuarioBebida(array $data)
    {
        return $this->repository->create($data);
    }
}
