@extends('Layout.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-12">
            <div class="title-pag">
                <h2>DETALHES DO USUARIO: {{ $user->name }}</h2>
                <h3>Informações do USUARIO</h3>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body pageshow">
        <ul>
            <li>
                <strong>NAME:</strong> {{ $user->name}}
            </li>
            <li>
                <strong>EMAIL:</strong> {{ $user->email}}
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