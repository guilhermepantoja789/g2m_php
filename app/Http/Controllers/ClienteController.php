<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\View\View;

class ClienteController extends Controller
{
    public function index(): View
    {
        // Pega todos os clientes do banco de dados
        // Equivalente a Cliente.objects.all()
        $clientes = Cliente::all();
        // Retorna a view 'home' e passa a variável 'clientes' para ela
        // Equivalente a render(request, 'home.html', {'clientes': clientes})
        return view('home', ['clientes' => $clientes]);
    }


    public function create(): View
    {
        return view('clientes.create'); // Vamos criar esta view agora
    }

    public function store(Request $request): RedirectResponse
    {
        // 1. Validação (muito importante!)
        $request->validate([
            'nome' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:png|max:2048', // opcional, deve ser imagem, png, max 2MB
        ]);

        $dados = $request->only('nome');
        $caminhoDoLogo = null;

        // 2. Verifica se um arquivo foi enviado
        if ($request->hasFile('logo')) {
            // 3. Salva o arquivo e pega o caminho
            // O arquivo será salvo em 'storage/app/public/logos/nome_aleatorio.png'
            $caminhoDoLogo = $request->file('logo')->store('logos', 'public');
            $dados['logo'] = $caminhoDoLogo;
        }

        // 4. Cria o cliente no banco de dados
        Cliente::create($dados);

        // 5. Redireciona para a página inicial com uma mensagem de sucesso
        return redirect()->route('clientes.index');
    }
}
