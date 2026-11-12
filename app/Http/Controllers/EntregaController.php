<?php

namespace App\Http\Controllers;

class EntregaController extends Controller
{
    public function index()
    {
        $entregas = [
            [
                'destinatario' => 'Maria Silva',
                'cidade' => 'São Paulo'
            ],
            [
                'destinatario' => 'João Santos',
                'cidade' => 'Lorena'
            ],
            [
                'destinatario' => 'Ana Oliveira',
                'cidade' => 'Guaratinguetá'
            ]
        ];

        return view('entregas', [
            'entregas' => $entregas
        ]);
    }
}

