@extends('Layout.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-12">
            <div class="title-pag">
                <h2>PROVEDORES CADASTRADOS</h2>
                <h3>Pesquise para realizar a baixa</h3>
            </div>
        </div>
    </div>
</div>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-default">
                    <div class="bloco-home box box-primary">
                        <table class="tabela table table-striped">
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
                                    <a href="" class="btn-exibir"><i class="fa fa-eye" aria-hidden="true"></i>
 EXCLUIR</a>
                                    <a href="" class="btn-baixar"><span class=""></span> EXIBIR</a>
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
</div>

@endsection