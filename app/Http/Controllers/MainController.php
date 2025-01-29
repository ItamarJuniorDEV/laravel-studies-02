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

    public function submitForm(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'country' => 'required|min:6'
        ]);

        echo 'Formulário submetido com sucesso!';
    }

    public function setSession(): View
    {
        session(['name' => 'John Doe']);
        return view('home');
    }

    public function clearSession(): View
    {
        session()->forget('name');
        return view('home');
    }
}
