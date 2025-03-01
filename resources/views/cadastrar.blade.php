<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro da Clinica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {background-image: linear-gradient(to top, rgba(252, 251, 251, 0.5), rgba(2, 204, 255, 0.5));background-repeat: no-repeat;background-attachment: fixed;background-size: cover;}
    .div_login{width: 30%;}
    .container_v2{--bs-gutter-y: 0;padding-right: calc(var(--bs-gutter-x)* .5);padding-left: calc(var(--bs-gutter-x)* .5);margin-right: auto;margin-left: auto;}
    .div_img{height: 45%;padding: 8px 0;display: flex;justify-content: center;}
    .botao_v2{width: 100%;}
    .img_formatar{width: 50%;height: 50%;}
    a.status {color:rgb(45 147 5);text-decoration: underline;}
    .img-fluid_v2 {max-width: 50%;height: auto;}
    .div-fluid_v2 {max-width: 100%;height: auto;}
    .bg-blue { --bs-bg-opacity: 1;background-color: #00ADBD  !important;}
</style>
<body>

    <div  class="d-flex justify-content-center align-items-center vh-100 shadow-lg">
        <div class="card div_login container_v2" >
            <div class="card-header bg-blue">

                <div class="div_img">
                    <img class="img-fluid_v2 mx-auto d-block" src="logo_clinica.png">
                </div>
               
            </div>
                <div class="card-body align-items-center">
                    <form action="user-register" method="POST">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label"><b>Nome:</b></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span><input type="text" class="form-control" id="text" placeholder="Digite seu nome..." name="nome">
                            </div>
                            @error('nome')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label"><b>Email:</b></label>
                            <div class="input-group">
                                <span class="input-group-text">@</span><input type="email" class="form-control" id="email" placeholder="Digite seu email..." name="email">
                            </div>
                            @error('email')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label"><b>CPF:</b></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-hand-o-right" aria-hidden="true"></i></span><input  oninput="mascaraCPF(this)" type="text" class="form-control" id="text" placeholder="Digite seu cpf..." name="cpf">
                            </div>
                            @error('cpf')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label"><b>CEP:</b></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-home" aria-hidden="true"></i></span><input onkeyup="setarCepMascara(event)"  maxlength="9" type="text" class="form-control" id="text" placeholder="Digite seu cep..." name="cep">
                            </div>
                            @error('cep')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        <div class="mb-3">
                            <label for="pwd" class="form-label"><b>Senha:</b></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span><input type="password" class="form-control" id="pwd" placeholder="Digite sua senha..." name="senha">
                            </div>
                            @error('senha')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label"><b>Confirmar senha:</b></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span><input type="password" class="form-control" id="pwd" placeholder="Digite sua senha novamente..." name="confirmed_senha">
                            </div>
                            @error('confirmed_senha')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary botao_v2"><b>Cadastrar</b></button><hr>
                    </form>
                    <div class="d-flex justify-content-center align-items-cente">  
                        <a href="login" class="btn-primary"><b>Estou cadastrado</b></a>
                    </div>

                </div>
                <div class="card-footer d-flex justify-content-center align-items-center div-fluid_v2" style="font-size: 12px;">
                    <ul class="list-group list-group-horizontal w-100 text-center fs-7 div-fluid_v2">
                        <li class="list-group-item flex-grow-1 div-fluid_v2">
                            <i class="fa fa-signal" aria-hidden="true"></i> <a class="status" href=""> Status do Sistema</a>
                        </li>
                        <li class="list-group-item flex-grow-1 div-fluid_v2">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> <a href=""  style="pointer-events: none;"> Central de ajuda</a>
                        </li>
                        <li class="list-group-item flex-grow-1 div-fluid_v2">
                            <i class="fa fa-github" aria-hidden="true"></i> <a href=""> Versão do Sistema 1.02 5</a>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
      <script>
        const setarCepMascara = (event) => {
            let input = event.target
            input.value = cepMascara(input.value)
          }
          
          const cepMascara = (value) => {
            if (!value) return ""
            value = value.replace(/\D/g,'')
            value = value.replace(/(\d{5})(\d)/,'$1-$2')
            return value
          }    
          function mascaraCPF(cpf) {
            // Remove caracteres não numéricos
            const valor = cpf.value.replace(/\D/g, '');

            // Aplica a máscara
            if (valor.length <= 11) {
                cpf.value = valor
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            } else {
                cpf.value = valor.substring(0, 11)
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d)/, '$1.$2')
                    .replace(/(\d{3})(\d{1,2})$/, '$1-$2');
            }
        }
        
      </script>
</body>
</html>
