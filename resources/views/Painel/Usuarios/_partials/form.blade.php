<!-- Formulário de cadastro Blacklist -->
<div class="form-row form-floating col-md-12 formulario-cadblack">
        @csrf
    <div class="form-row col-md-12 formulario-cadblack">
        <div class="form-group col-md-6">
            <label for="inputName">NOME*:</label><br>
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Nome do Usuários" 
            value="{{ $user->name ?? old('name') }}" required>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail">EMAIL*:</label><br>
            <input type="text" name="email" class="form-control" id="email" placeholder="Seu melhor Email:"
            value="{{ $user->email ?? old('email') }}" required>
        </div>
                  
        <div class="form-group col-md-6">
            <label for="inputPassword">DIGITE UMA SENHA*:</label><br>
            <input type="password" name="password" class="form-control" id="password" placeholder="Digite uma Senha:" required>
        </div>  
        <div class="form-group col-md-6">
            <label for="inputConfirme">CONFIRME SUA SENHA*:</label><br>
            <input type="password" class="form-control" id="confirm_password" placeholder="Confirme sua Senha:" required>
        </div>       
    </div>
    
    <div class="form-row form-floating col-md-12 formulario-cadblack">
        <div class="form-floating col-auto">
            <button type="submit" class="btn btn-primary btn-enviar">ENVIAR</button>
        </div>       
    </div> 