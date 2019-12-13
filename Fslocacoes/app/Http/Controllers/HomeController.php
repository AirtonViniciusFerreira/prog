<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function materias()
    {
        $registro = Produto::where([
            'ativo'=>'S'
            ])-> get();
        return view('home.materias', compact('registro'));
    }

    public function produto($id = null)
    {
        if(!empty($id))
        {
            $registro = Produto::where([
                'id' => $id,
                'ativo' => 'S'
            ])-> first();
            if(!empty($registro))
            {
                return view('home.produto', compact('regristro'));
            }
        }
        return redirect()->route('index');
    }
}