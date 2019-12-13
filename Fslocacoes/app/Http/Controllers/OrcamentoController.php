<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Produto;
use App\Orcamento;
use App\Http\Requests\OrcamentoRequest;


class OrcamentoController extends Controller
{
    //
    public function index(){
        $produtos = Produto::All();
        $user = Auth::user();
        $orcamento = Orcamento::where('user_id', '=', $user->id)->get();
        //dd($orcamento);
        if(isset($orcamento))
        {
            return view('orcamentos.listarorcamento', compact('orcamento'));
            //return view('orcamentos.novoOrcamento');
            
        }
        return view('orcamentos.novoOrcamento');
        //return view('orcamentos.listarorcamento', compact('orcamento'));
        
    }

    public function newbudget(){
        return view('orcamentos.novoOrcamento');
    }

    public function budget(OrcamentoRequest $request){
        
        $data = $request->validated();
        $user = Auth::user();
        $data['user_id'] = $user['id'];
        //dd($data);
        dd(Orcamento::create($data));
        $orcamento = Orcamento::create($data);
    }
    
    public function product(){
        $produtos = Produto::All();
        return view('orcamentos.listarProdutos', compact('produtos'));
    }

    public function order($id, $amount){
        $produto = Produto::find($id);
        dd($produto);
    }
    
    public function destroy($id)
    {
        $orcamento = Orcamento::find($id);
        if (!isset($orcamento))
        {
            redirect('/orcamento', 'Error');
        }
        $orcamento->delete();
        return redirect('/orcamento');
    }
}
