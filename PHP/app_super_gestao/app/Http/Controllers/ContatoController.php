<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        /* echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('nome');
        echo '</br>';
        echo $request->input('email');

        $contato = new SiteContato();
        $contato->nome = $request->input('nome');
        $contato->telefone = $request->input('telefone');
        $contato->email = $request->input('email');
        $contato->motivo_contato = $request->input('motivo_contato');
        $contato->mensagem = $request->input('mensagem');

        //print_r($contato->getAttributes());
        $contato->save();

        $contato = new SiteContato();
        $contato->fill($request->all());

        //print_r($contato->getAttributes());

        $contato->save();

        $contato = new SiteContato();
        $contato->create($request->all());

        //print_r($contato->getAttributes()); */

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', ['titulo' => 'Contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {
        // Realizar a validação dos dados do formulário recebido no request
        $request->validate([
            'nome' => 'required|min:3|max:40', // nomes com no minimo 3 caracteres e no máximo 40
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000',
        ]);
        // SiteContato::create($request->all());
    }
}
