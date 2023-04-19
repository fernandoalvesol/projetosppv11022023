@extends('Layout.app')

@section('content')

<div class="row col-md-12">
@if( Session::has('sucess') )
        <div class="container">
            <div class="col-md-12">
                <div class="alert alert-success hide-msg" style="float: left; width: 100%; margin: 10px 0px;">
                    {{Session::get('sucess')}}
                </div>
            </div>

        </div>
@endif
    <div class="col-md-6">
        <div class="title-pag">
            <h2>PROVEDORES CADASTRADOS</h2>
            <h3>Relação de provedores cadastro</h3>
        </div>  
    </div>
    <div class="col-md-6 btn-cadprovedor">
        <a href="{{ route('provedor.create') }}" class="btn btn-dark">CADASTRAR</a>
    </div>       
</div>
<div class="row card">
        <div class="card">
            <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>RAZAO SOCIAL</th>
                            <th>NOME FANTASIA</th>
                            <th>CNPJ</th>
                            <th>ATO ANATEL</th>
                            <th>CONTATO</th>
                            <th width="250">Ações</th>
                        </tr>

                        @forelse($provedor as $provedores)
                            <tr>
                                <td>{{$provedores->razaosocial}}</td>
                                <td>{{$provedores->nomefantasia}}</td>
                                <td>{{$provedores->cnpj}}</td>
                                <td>{{$provedores->atoanatel}}</td>
                                <td>{{$provedores->contato}}</td>
                                <td>
                                    <a href="{{ route('provedor.edit', $provedores->id) }}" class="btn-exibir"> EDITAR</a>
                                    <a href="{{ route('provedor.show', $provedores->id) }}" class="btn-baixar"> EXIBIR</a>
                                    <!-- Botão para acionar modal -->
                                </td>
                            </tr>

                        @empty

                            <p>Nenhum Provedor Cadastrado</p>

                        @endforelse
                    </table>
                </div>
            </div>
            
</div>
<div class="row card">
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