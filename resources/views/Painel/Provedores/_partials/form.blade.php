<!-- Formulário de cadastro Blacklist -->
<div class="form-row form-floating col-md-12 formulario-cadblack">
        @csrf
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-6">
            <label for="inputRazaosocial">RAZÃO SOCIAL*:</label><br>
            <input type="text" name="razaosocial" class="form-control" id="razaosocial" placeholder="Razão Social:"
            value="{{ $provedor->razaosocial ?? old('razaosocial') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputNomefantasia">NOME FANTASIA*:</label><br>
            <input type="text" name="nomefantasia" class="form-control" id="nomefantasia" placeholder="NOME FANTASIA:"
            value="{{ $provedor->nomefantasia ?? old('nomefantasia') }}">
        </div>         
    </div>
    <div class="form-row col-md-12">
        <div class="form-group col-md-2">
            <label for="inputTipo">Tipo de pessoa *:</label>
                <select class="form-select form-control form-control" name="tipo" id="tipo">
                    <option value="Escolha" id="tipo">Escolha</option>
                    <option value="fisica" id="tipo">fisica</option>
                    <option value="juridica" id="tipo">juridica</option>
                </select>
    </div>            
        <div class="form-group col-md-4">
            <label for="inputCpf">CNPJ *:</label><br>
            <input type="text" name="cnpj" class="form-control" id="cnpj" placeholder="CNPJ:" value="{{ $provedor->cnpj ?? old('cnpj') }}">
        </div>
        <div class="form-group col-md-3">
            <label for="inputInscricao">IE *:</label><br>
            <input type="text" name="inestadual" class="form-control" id="inestadual" placeholder="Inscrição Estadual:" value="{{ $provedor->inestadual ?? old('inestadual') }}">
        </div>
        <div class="form-group col-md-3">
            <label for="inputInmunicipal">IM:</label><br>
            <input type="text" name="inmunicipal" class="form-control" id="inmunicipal" placeholder="Inscrição Municipal:"
            value="{{ $provedor->inmunicipal ?? old('inmunicipal') }}">
        </div>   
    </div> 
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-4">
            <label for="inputAtoanatel">ATO ANATEL:</label><br>
            <input type="text" name="atoanatel" class="form-control" id="atoanatel" placeholder="ATO ANATEL:"
            value="{{ $provedor->atoanatel ?? old('atoanatel') }}">
        </div>
        <div class="form-group col-md-4">
            <label for="inputContato">RESPONSÁVEL *:</label><br>
            <input type="text" name="contato" class="form-control" id="contato" placeholder="RESPONSÁVEL:"
            value="{{ $provedor->contato ?? old('contato') }}">
        </div>
        <div class="form-group col-md-4">
            <label for="inputFone">FONE *:</label><br>
            <input type="text" name="fone" class="form-control" id="fone" placeholder="Fone:"
            value="{{ $provedor->fone ?? old('fone') }}">
        </div>
    </div>
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-6">
            <label for="inputEmail">EMAIL *:</label><br>
            <input type="text" name="email" class="form-control" id="email" placeholder="Email:"
            value="{{ $provedor->email ?? old('email') }}">
        </div>
        <div class="form-group col-md-6">
            <label for="inputSite">SITE :</label><br>
            <input type="text" name="site" class="form-control" id="site" placeholder="Site:"
            value="{{ $provedor->site ?? old('site') }}">
        </div> 
    </div>                    
    </div>
    <div class="form-row form-floating col-md-12 formulario-cadblack">
        <div class="form-floating col-auto">
            <button type="submit" class="btn btn-primary btn-enviar">ENVIAR</button>
        </div>       
    </div> 