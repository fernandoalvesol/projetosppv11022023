@extends('Layout.app')

@section('content')

<div class="container row col-md-12">
	<div class="title-pag">
        <h2>DETALHES DO BLACKLISTS</h2>
        <h3>Informações do Lançamento de Blacklists</h3>
    </div>
</div>
<div class="container row col-md-12">
    <ul class="list-group col-md-12">
        <li class="list-group-item active" aria-current="true">DADOS DO PROVEDOR DE INTERNET</li>
        <li class="list-group-item">EMPRESA: SETTA TELECOM PROVEDOR DE INTERNET</li>
    </ul>
    <ul class="list-group col-md-12">
        <li class="list-group-item active" aria-current="true">DADOS DO CLIENTE</li>
        <li class="list-group-item">RAZÃO SOCIAL: {{$blacklist->razaosocial}}</li>
        <li class="list-group-item">CPF / CNPJ: {{$blacklist->cnpjcpf}}</li>
        <li class="list-group-item">RG: {{$blacklist->rg}}</li>
    </ul>
    <ul class="list-group col-md-12">
        <li class="list-group-item active" aria-current="true">ENDEREÇO DO CLIENTE</li>
        <li class="list-group-item">ENDEREÇO: {{$blacklist->endereco}}, {{$blacklist->bairro}}, {{$blacklist->cidade}}
            , {{$blacklist->cep}}, {{$blacklist->uf}},
        </li>
    </ul>
    <ul class="list-group col-md-12">
        <li class="list-group-item active" aria-current="true">CONTATO DO CLIENTE</li>
        <li class="list-group-item">EMAIL: {{$blacklist->email}}</li>
        <li class="list-group-item">FONE: {{$blacklist->fone}}</li>
        <li class="list-group-item">CELULAR: {{$blacklist->celular}}</li>
    </ul>
    <ul class="list-group col-md-12">
        <li class="list-group-item active" aria-current="true">DADOS DO CONTRATO</li>
        <li class="list-group-item">NUMERO DO CONTRATO: {{$blacklist->numcontrato}}</li>
        <li class="list-group-item">NATUREZA DA OPERAÇÃO: {{$blacklist->natoperacao}}</li>
        <li class="list-group-item">DATA DA OCORRENCIA: {{$blacklist->dtocorrencia}}</li>
        <li class="list-group-item">VALOR DO DÉBITO: R$ {{$blacklist->price}}</li>
    </ul>
    <ul class="list-group col-md-12">
        <li class="list-group-item active" aria-current="true">OBSERVAÇÕES</li>
        <li class="list-group-item">{{$blacklist->obs}}</li>
    </ul>
</div>
<div class="container row col-md-12">
    <footer class="container row col-md-12">
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