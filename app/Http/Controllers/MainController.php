<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        $data = [
            'value' => 100,
            'cities' => [
                'Sao Paulo',
                'Rio de Janeiro',
                'Belo Horizonte'
            ],
            'names' => ['a', 'b'],
            'index' => 1

        ];

        return view('home', $data);
    }

    public function submitForm(): void
    {
        echo "formulário submetido";
    }
}
