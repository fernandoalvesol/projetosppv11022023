@extends('Layout.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-12">
            <div class="title-pag">
                <h2>EDITAR O USUÁRIOS: {{ $user->name }}</h2>
                <h3>Edição do Usuário</h3>
            </div>
        </div>
    </div>
</div>

<table class="table table-striped">
    <form action="{{ route('user.update', $user->id) }} " method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('Painel.Usuarios._partials.form')
    </form>     
</table>


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