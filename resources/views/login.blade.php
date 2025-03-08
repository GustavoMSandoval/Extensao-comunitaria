<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Login da Clinica</title>
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
    .bg-blue { --bs-bg-opacity: 1;background-color: #00ADBD  !important;}
</style>
<body>

    <div  class="d-flex justify-content-center align-items-center vh-100 shadow-lg">
        <div class="card div_login container_v2" >
            <div class="card-header bg-blue">

                <div class="div_img">
                    <img class="img-fluid_v2 mx-auto d-block" src="{{asset('assets/logo_clinica.PNG')}}">
                </div>
               
            </div>
                <div class="card-body align-items-center">
                    <form action="user-login" method="POST">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label"><b>Email:</b></label>
                            <div class="input-group">
                                <span class="input-group-text">@</span><input type="email" class="form-control" id="email" placeholder="Digite seu email..." name="email">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="pwd" class="form-label"><b>Senha:</b></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></span><input type="password" class="form-control" id="pwd" placeholder="Digite sua senha..." name="senha">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary botao_v2"><b>Avançar</b></button><hr>
                    </form>
                    
                    <div class="d-flex justify-content-center align-items-cente">  
                        <a href="cadastrar" class="btn-primary"><b>Não estou cadastrado</b></a>
                    </div>
                  
                </div>
                <div class="card-footer d-flex justify-content-center align-items-center" style="font-size: 12px;">
                    <ul class="list-group list-group-horizontal w-100 text-center fs-7">
                        <li class="list-group-item flex-grow-1">
                            <i class="fa fa-signal" aria-hidden="true"></i> <a class="status" href=""> Status do Sistema</a>
                        </li>
                        <li class="list-group-item flex-grow-1">
                            <i class="fa fa-info-circle" aria-hidden="true"></i> <a href="" style="pointer-events: none;"> Central de ajuda</a>
                        </li>
                        <li class="list-group-item flex-grow-1">
                            <i class="fa fa-github" aria-hidden="true"></i> <a href=""> Versão do Sistema 1.02 5</a>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
      
</body>
</html>
