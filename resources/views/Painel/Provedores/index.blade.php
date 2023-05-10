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
                        <p class="title-prov">CADASTRAR PROVEDORES
                            <a href="{{ route('provedor.create') }}" 
                                class="btn btn-cadprov">
                                <box-icon name='folder-plus' animation='tada' rotate='90' ></box-icon> 
                                CADASTRAR
                            </a>
                        </p>
                    </div>
                </div> 
                <div class="col-md-6 form-pesquisar">
                    <form action="{{ route('provedor.search') }}" method="get" class="row g-3">

                        <div class="col-auto">
                            <p class="subtitle-pesquisar">Digite a razão social ou cnpj para pesquisar</p>
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
                            <th>RAZAO SOCIAL</th>
                            <th>NOME FANTASIA</th>
                            <th>CNPJ</th>
                            <th>ATO ANATEL</th>
                            <th>FONE</th>
                            <th>CONTATO</th>
                            <th width="100">Ações</th>
                        </tr>

                        @forelse($provedor as $provedores)
                            <tr>
                                <td>{{$provedores->razaosocial}}</td>
                                <td>{{$provedores->nomefantasia}}</td>
                                <td>{{$provedores->cnpj}}</td>
                                <td>{{$provedores->atoanatel}}</td>
                                <td>{{$provedores->fone}}</td>
                                <td>{{$provedores->contato}}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Grupo de botões com dropdown aninhado">
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    OPÇÕES
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="{{ route('provedor.edit', $provedores->id) }}"><box-icon name='edit' type='solid' animation='tada' ></box-icon> EDITAR</a>
                                                <a class="dropdown-item" href="{{ route('provedor.show', $provedores->id) }}"><box-icon name='show' animation='tada' ></box-icon> DETALHES</a>
                                                <a class="dropdown-item" href="{{ route('provedor.delete', $provedores->id) }}"><box-icon name='trash' animation='tada' ></box-icon> DELETAR</a>
                                            </div>
                                    </div>
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


    </div>
    

</div>



@endsection