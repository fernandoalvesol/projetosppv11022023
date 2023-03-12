@extends('Layout.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md-12">
            <div class="title-pag">
                <h2>REALIZAR BAIXA DE NEGATIVADOS</h2>
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
                                <th>TIPO</th>
                                <th>CPF/CNPJ</th>
                                <th>FONE</th>
                                <th>DATA OCORRENCIA</th>
                                <th>NATUREZA</th>
                                <th>VALOR</th>
                                <th width="250">Ações</th>
                            </tr>

                            @forelse($blacklist as $blacklists)
                            <tr>
                                <td>{{$blacklists->razaosocial}}</td>
                                <td>{{$blacklists->tipo}}</td>
                                <td>{{$blacklists->cpf}}</td>
                                <td>{{$blacklists->fone}}</td>
                                <td>{{$blacklists->dtocorrencia}}</td>
                                <td>{{$blacklists->natoperacao}}</td>
                                <td>R$ &nbsp;{{$blacklists->valor}}</td>

                                <td>
                                    <a href="" class="btn-exibir"><i class="fa fa-eye" aria-hidden="true"></i>
 EXIBIR</a>
                                    <a href="" class="btn-baixar"><span class=""></span> BAIXAR</a>
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