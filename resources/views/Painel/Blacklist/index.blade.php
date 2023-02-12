@extends('Layout.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-12">
            <div class="title-pag">
                <h2>NEGATIVAÇÃO DE CLIENTES DOS PROVEDORES</h2>
                <h3>Preencha o formulário para negativar</h3>
            </div>
        </div>
    </div>
</div>

<table class="table table-striped">
        <form action="{{ route('blacklist.store')}}" method="post" enctype="multipart/form-data">
            @include('Painel.Blacklist._partials.form')
        </form>     
</table>

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

@endsection

