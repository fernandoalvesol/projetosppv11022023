@extends('Layout.app')

@section('content')

<div class="container">
	<div class="row">
        <div class="col-md">
            <div class="title-pag">
                <h2>NEGATIVAÇÃO DE CLIENTES DOS PROVEDORES</h2>
            </div>
        </div>
    </div>
</div>
<!-- Formulário de cadastro Blacklist -->
<form>    
    <div class="form-row form-floating col-md-12 formulario-cadblack">
        <div class="form-group col-md-2">
            <label for="inputTipo">Tipo de pessoa *:</label>
            <select class="form-select form-control form-control" id="selectTipo">
                <option value="">Escolha</option>
                <option value="">Física</option>
                <option value="">Jurídica</option>
            </select>  
        </div>       

        <div class="form-group col-md-5">
            <label for="inputCpf">CPF *:</label><br>
            <input type="text" class="form-control" id="cpf" placeholder="CPF:">
        </div>
        <div class="form-group col-md-5">
            <label for="inputCpf">RG *:</label><br>
            <input type="text" class="form-control" id="rg" placeholder="RG:">
        </div>
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-12">
            <label for="inputName">RAZÃO SOCIAL*:</label><br>
            <input type="text" class="form-control" id="name" placeholder="Razão Social:">
        </div>
        
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-8">
            <label for="inputEndereco">ENDEREÇO *:</label><br>
            <input type="text" class="form-control" id="endereco" placeholder="Endereço:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputComplemento">COMPLEMENTO *:</label><br>
            <input type="text" class="form-control" id="complemento" placeholder="Complemento:">
        </div>
        
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputBairro">BAIRRO *:</label><br>
            <input type="text" class="form-control" id="bairro" placeholder="Bairro:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputCidade">CIDADE *:</label><br>
            <input type="text" class="form-control" id="cidade" placeholder="Cidade:">
        </div>
        <div class="form-group col-md-2">
            <label for="inputCEP">CEP *:</label><br>
            <input type="text" class="form-control" id="cep" placeholder="CEP:">
        </div>
        <div class="form-group col-md-2">
            <label for="inputUF">UF *:</label><br>
            <input type="text" class="form-control" id="uf" placeholder="UF:">
        </div>         
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputEmail">EMAIL *:</label><br>
            <input type="text" class="form-control" id="email" placeholder="Email:">
        </div>
        <div class="form-group col-md-2">
            <label for="inputFone">FONE *:</label><br>
            <input type="text" class="form-control" id="fone" placeholder="Fone:">
        </div>
        <div class="form-group col-md-2">
            <label for="inputCelular">CELULAR *:</label><br>
            <input type="text" class="form-control" id="celular" placeholder="CELULAR:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputOperação">NATUREZA DA OPERAÇÃO *:</label>
            <select class="form-control form-control" id="selectOperacao">
                <option value="">Escolha uma natureza</option>
                <option value="">Débito Plano de Internet</option>
                <option value="">Extravio de Equipamento</option>
                <option value="">Danificou equipamento em comodato</option>
            </select>  
        </div>        
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputData">DATA DA OCORRÊNCIA *:</label><br>
            <input type="date" class="form-control" id="dtocorrencia" placeholder="Data da Ocorrência:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputFone">NUMERO DO CONTRATO *:</label><br>
            <input type="text" class="form-control" id="contrato" placeholder="Número do Contrato:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputValor">VALOR R$ *:</label><br>
            <input type="text" class="form-control" id="valor" placeholder="VALOR R$:">
        </div>
                 
    </div>
    <div class="form-row form-floating col-md-12 formulario-cadblack">
        <div class="form-floating col-md-12">
            <label for="floatingObservacoes">Observações</label>
            <textarea class="form-control" placeholder="Obsevações" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>       
    </div> 
    <div class="form-row form-floating col-md-12 formulario-cadblack">
        <div class="form-floating col-auto">
            <button type="submit" class="btn btn-primary btn-enviar">ENVIAR</button>
        </div>       
    </div>                  
</form>









@endsection