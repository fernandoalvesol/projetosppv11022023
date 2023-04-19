@extends('Layout.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-12">
            <div class="title-pag">
                <h2>DETALHES DO PROVEDOR: {{ $provedor->nomefantasia }}</h2>
                <h3>Informações do Provedor</h3>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body pageshow">
        <ul>
            <li>
                <strong>RAZÃO SOCIAL:</strong> {{ $provedor->razaosocial}}
            </li>
            <li>
                <strong>NOME FANTASIA:</strong> {{ $provedor->nomefantasia}}
            </li>
            <li>
                <strong>CNPJ:</strong> {{ $provedor->cnpj}}
            </li>
            <li>
                <strong>EMAIL:</strong> {{ $provedor->email}}
            </li>
            <li>
                <strong>SITE:</strong> {{ $provedor->site}}
            </li>
            <li>
                <strong>INSCRIÇÃO ESTADUAL:</strong> {{ $provedor->inestadual}}
            </li>
            <li>
                <strong>INSCRIÇÃO MUNICIPAL:</strong> {{ $provedor->inmunicipal}}
            </li>
            <li>
                <strong>ATO ANATEL:</strong> {{ $provedor->atoanatel}}
            </li>
            <li>
                <strong>SITE:</strong> {{ $provedor->site}}
            </li>
            <li>
                <strong>FONE:</strong> {{ $provedor->fone}}
            </li>
            <li>
                <strong>RESPONSÁVEL:</strong> {{ $provedor->contato}}
            </li>
        </ul>        
    </div>  
</div>
<div class="card">
    <footer>
            <section class="rodape">
                <div class="empresa">
                    ARAUJO ASSESSORIA - <span>Todos os direitos reservados - 2023</span>
                </div>
                <div class="contato-info">
                    <p class="fone">www.araujoassessoria.com.br</p>
                </div>
            </section>
    </footer>
</div>
@endsection