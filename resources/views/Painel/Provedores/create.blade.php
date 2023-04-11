@extends('Layout.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-12">
            <div class="title-pag">
                <h2>CADASTRO DE PROVEDORES</h2>
                <h3>Preencha o formulário para cadastrar um novo provedor</h3>
            </div>
        </div>
    </div>
</div>

@if( Session::has('sucess') )
<div class="container">
    <div class="col-md-12">
        <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
            {{Session::get('sucess')}}
        </div>
    </div>

</div>    
@endif

@if($errors->any())
<div class="container">
        <div class="col-md-12">
            <div class="alert alert-danger">
                <ul>
                    @foreach ( $errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
<table class="table table-striped">
        <form action="#" method="post" enctype="multipart/form-data">
            @include('Painel.Provedores._partials.form')
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

