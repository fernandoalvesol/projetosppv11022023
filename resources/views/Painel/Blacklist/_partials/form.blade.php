<!-- Formulário de cadastro Blacklist -->
<div class="form-row form-floating col-md-12 formulario-cadblack">
        @csrf
        <div class="form-group col-md-2">
            <label for="inputTipo">Tipo de pessoa *:</label>
            <select class="form-select form-control form-control" name="tipo" id="tipo">
                <option value="Escolha">Escolha</option>
                <option value="fisica">fisica</option>
                <option value="juridica">juridica</option>
            </select>  
        </div>       

        <div class="form-group col-md-5">
            <label for="inputCnpjcpf">CPF/CNPJ *:</label><br>
            <input type="text" name="cnpjcpf" class="form-control" id="cnpjcpf" placeholder="CPF/CNPJ:">
        </div>
        <div class="form-group col-md-5">
            <label for="inputCpf">RG *:</label><br>
            <input type="text" name="rg" class="form-control" id="rg" placeholder="RG:">
        </div>
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-12">
            <label for="inputRazaosocial">RAZÃO SOCIAL*:</label><br>
            <input type="text" name="razaosocial" class="form-control" id="name" placeholder="Razão Social:">
        </div>
        
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-8">
            <label for="inputEndereco">ENDEREÇO *:</label><br>
            <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputComplemento">COMPLEMENTO *:</label><br>
            <input type="text" name="complemento" class="form-control" id="complemento" placeholder="Complemento:">
        </div>
        
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputBairro">BAIRRO *:</label><br>
            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputCidade">CIDADE *:</label><br>
            <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade:">
        </div>
        <div class="form-group col-md-2">
            <label for="inputCEP">CEP *:</label><br>
            <input type="text" name="cep" class="form-control" id="cep" placeholder="CEP:">
        </div>
        <div class="form-group col-md-2">
            <label for="inputUF">UF *:</label><br>
            <input type="text" name="uf" class="form-control" id="uf" placeholder="UF:">
        </div>         
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputEmail">EMAIL *:</label><br>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email:">
        </div>
        <div class="form-group col-md-2">
            <label for="inputFone">FONE *:</label><br>
            <input type="text" name="fone" class="form-control" id="fone" placeholder="Fone:">
        </div>
        <div class="form-group col-md-2">
            <label for="inputCelular">CELULAR *:</label><br>
            <input type="text" name="celular" class="form-control" id="celular" placeholder="CELULAR:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputOperação">NATUREZA DA OPERAÇÃO *:</label>
            <select class="form-control form-control" name="natoperacao" id="selectOperacao">
                <option value="Escolha uma natureza">Escolha uma natureza</option>
                <option value="Débito Plano de Internet">Débito Plano de Internet</option>
                <option value="Extravio de Equipamento">Extravio de Equipamento</option>
                <option value="Danificou equipamento em comodato">Danificou equipamento em comodato</option>
            </select>  
        </div>        
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputData">DATA DA OCORRÊNCIA *:</label><br>
            <input type="date" name="dtocorrencia" class="form-control" id="dtocorrencia" placeholder="Data da Ocorrência:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputNumero">NUMERO DO CONTRATO *:</label><br>
            <input type="text" name="numcontrato" class="form-control" id="contrato" placeholder="Número do Contrato:">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPrice">VALOR R$ *:</label><br>
            <input type="text" name="price" class="form-control" id="price" placeholder="VALOR R$:">
        </div>
                 
    </div>
    <div class="form-row form-floating col-md-12 formulario-cadblack">
        <div class="form-floating col-md-12">
            <label for="floatingObservacoes">Observações</label>
            <textarea class="form-control" name="obs" placeholder="Obsevações" id="floatingTextarea2" style="height: 100px"></textarea>
        </div>       
    </div> 
    <div class="form-row form-floating col-md-12 formulario-cadblack">
        <div class="form-floating col-auto">
            <button type="submit" class="btn btn-primary btn-enviar">ENVIAR</button>
        </div>       
    </div> 