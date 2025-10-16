@extends('layouts.app')

@section('title', 'G2M Tecnologia - Soluções em TI')

@section('content')
    <main>
        <section class="hero">
            <div class="container">
                <h1>Inovação e Eficiência em Tecnologia para o seu Negócio</h1>
                <p>Soluções completas em TI, Infraestrutura de Redes e SaaS.</p>
                <a href="#contato" class="btn-primary">Fale com um especialista</a>
            </div>
        </section>

        <section id="servicos" class="services">
            <div class="container">
                <h2>Nossos Serviços</h2>
                <div class="service-grid">
                    <div class="card">
                        <i class="fas fa-truck service-icon"></i>
                        <h3>Transportadoras de Cargas Líquidas</h3>
                        <p>Solução para o controle de transporte de petróleo e seus derivados, cobrindo todos os pontos do processo.</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-hard-hat service-icon"></i>
                        <h3>Administração de Obras</h3>
                        <p>Controle completo de obras com planilhas orçamentárias, ordens de compra e controle bancário.</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-clinic-medical service-icon"></i>
                        <h3>Administração de Clínicas</h3>
                        <p>Controle de horários, receitas, histórico do paciente, consulta a CIDs e requisições de exames.</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-file-invoice-dollar service-icon"></i>
                        <h3>Compras e Vendas (ERP)</h3>
                        <p>Software ERP com emissão de NFes, contas a pagar/receber, boletos e geração de orçamentos.</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-industry service-icon"></i>
                        <h3>Chão de Fábrica</h3>
                        <p>Controle de produção com emissão de OPs, geração de etiquetas, controle de turnos e de lotes produzidos.</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-folder-open service-icon"></i>
                        <h3>Gestão de Documentos</h3>
                        <p>Upload, armazenamento, metadados, organização, definição de sigilo, compartilhamento e envio.</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-landmark service-icon"></i>
                        <h3>Setor Público</h3>
                        <p>Controle de protocolo e processos, geração de documentos padronizados, controle de fluxo e aprovação.</p>
                    </div>
                    <div class="card">
                        <i class="fas fa-drafting-compass service-icon"></i>
                        <h3>Projetos Sob Medida</h3>
                        <p>Se procura uma solução customizada, nós podemos criar essa solução para você.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="sobre" class="about">
            <div class="container">
                <h2>30 Anos Entregando a Solução Certa</h2>
                <div class="about-features">
                    <div class="feature-card">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Visão de Negócio</h3>
                        <p>Entregamos a informação certa, da maneira certa. Do gestor ao operador, focamos na produtividade e em dados formatados para suas necessidades.</p>
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-cloud"></i>
                        <h3>Sua Infra Enxuta</h3>
                        <p>Nossas soluções rodam 100% na nuvem. Basta um navegador e internet para ter acesso ao seu sistema de qualquer lugar do mundo.</p>
                    </div>
                    <div class="feature-card">
                        <i class="fas fa-handshake"></i>
                        <h3>Experiência</h3>
                        <p>Nossa bagagem elimina o abismo entre as necessidades e as soluções. A G2M Tecnologia escuta você e entrega o que melhor vai lhe atender.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="clientes" class="clients">
            <div class="container">
                <h2>Nossos Clientes</h2>
                <p>Temos a honra de colaborar com empresas de diversos segmentos.</p>
                <div class="swiper client-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($clientes as $cliente)
                            <div class="swiper-slide">
                                <div class="client-item">
                                    @if ($cliente->logo)
                                        <img src="{{ asset('storage/' . $cliente->logo) }}" alt="Logo {{ $cliente->nome }}">
                                    @endif
                                    <p class="client-name">{{ $cliente->nome }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
    </main>
@endsection
