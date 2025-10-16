@extends('layouts.app')

@section('title', 'Gerenciar Clientes')

@section('content')
    <main>
        <section class="container" style="padding-top: 4rem; padding-bottom: 4rem;">
            <div class="card">

                @if(session('sucesso'))
                    <div class="alert alert-success" style="background-color: #28a745; padding: 1rem; color: white; border-radius: 5px; margin-bottom: 1rem;">
                        {{ session('sucesso') }}
                    </div>
                @endif

                <a href="{{ route('clientes.create') }}" class="btn-primary" style="float: right; margin-bottom: 1rem;">Adicionar Novo</a>
                <h1 style="color: var(--primary-color);">Gerenciar Clientes</h1>

                <table style="width: 100%; border-collapse: collapse;">
                    <thead>
                    <tr style="border-bottom: 2px solid #ddd;">
                        <th style="padding: 12px; text-align: left;">Logo</th>
                        <th style="padding: 12px; text-align: left;">Nome</th>
                        <th style="padding: 12px; text-align: left;">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clientes as $cliente)
                        <tr style="border-bottom: 1px solid #eee;">
                            <td style="padding: 12px;">
                                @if ($cliente->logo)
                                    <img src="{{ asset('storage/' . $cliente->logo) }}" alt="Logo {{ $cliente->nome }}" width="50" style="border-radius: 50%;">
                                @endif
                            </td>
                            <td style="padding: 12px;">{{ $cliente->nome }}</td>
                            <td style="padding: 12px;">
                                <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" onsubmit="return confirm('Tem certeza?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="background: #dc3545; color: white; border: none; padding: 0.5rem 1rem; border-radius: 5px; cursor: pointer;">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
