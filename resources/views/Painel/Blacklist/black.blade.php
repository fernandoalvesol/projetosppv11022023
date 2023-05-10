@extends('Layout.app')

@section('content')
<div class="row col-md-12">
<div class="row">
    <div class="col-md-12">    
    <div class="row card">        
        <div class="card">
            <div class="row col-md-12">
                <div class="col-md-6">
                    <div class="title-pag">                
                        <p class="title-prov">REALIZAR BAIXA</p>
                            
                    </div>
                </div> 
                <div class="col-md-6 form-pesquisar">
                    <form action="{{ route('blacklist.search') }}" method="get" class="row g-3">

                        <div class="col-auto">
                            <p class="subtitle-pesquisar">Digite a razão social ou cpf/cnpj para pesquisar</p>
                            <input type="text" class="form-control" id="query" name="query" placeholder="Pesquisar">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3"><box-icon name='search-alt' animation='tada' ></box-icon></button>
                        </div>
                    </form>            
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
        <div class="col-md-12 table-responsive tabela-cad">
            <table class="table">
                <tr>
                    <th>NUMERO</th>
                    <th>RAZAO SOCIAL</th>
                    <th>TIPO</th>
                    <th>CPF/CNPJ</th>
                    <th>FONE</th>
                    <th>DATA OCORRENCIA</th>
                    <th>NATUREZA</th>
                    <th>VALOR</th>
                    <th width="150">Ações</th>
                </tr>

                    @forelse($blacklist as $blacklists)
                        <tr>
                            <td>11552</td>
                            <td>{{$blacklists->razaosocial}}</td>
                            <td>{{$blacklists->tipo}}</td>
                            <td>{{$blacklists->cnpjcpf}}</td>
                            <td>{{$blacklists->fone}}</td>
                            <td>{{$blacklists->dtocorrencia}}</td>
                            <td>{{$blacklists->natoperacao}}</td>
                            <td>R$ &nbsp;{{$blacklists->price}}</td>

                            <td>
                                    <div class="btn-group" role="group" aria-label="Grupo de botões com dropdown aninhado">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    OPÇÕES
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="{{ route('blacklist.edit', $blacklists->id) }}"><box-icon name='edit' type='solid' animation='tada' ></box-icon> EDITAR</a>
                                                <a class="dropdown-item" href="{{ route('blacklist.show', $blacklists->id) }}"><box-icon name='show' animation='tada' ></box-icon> EXIBIR</a>
                                                <a class="dropdown-item" href=""><box-icon name='trash' animation='tada' ></box-icon> BAIXAR</a>
                                            </div>
                                    </div>
                                    <!-- Botão para acionar modal -->
                            </td>
                        </tr>

                    @empty

                        <p>Nenhuma Cobrança Cadastrada</p>

                    @endforelse
            </table>
        </div>
    </div>
    
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