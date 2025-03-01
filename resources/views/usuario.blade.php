<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Seus dados</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <style>
        body {display: flex; flex-direction: column;  min-height: 100vh; margin: 0; padding: 0;}

        .div_login{width: 30%;}
        
        .container_v2{--bs-gutter-y: 0;padding-right: calc(var(--bs-gutter-x)* .5);padding-left: calc(var(--bs-gutter-x)* .5);margin-right: auto;margin-left: auto;}
        
        .div_img{display: flex;justify-content: center;}
        
        .botao_v2{width: 100%;}
        
        .img_formatar{width: 50%;height: 50%;}
        
        a.status {color:rgb(45 147 5);text-decoration: underline;}
        
        .img-fluid_v2 {max-width: 50%;height: auto;}

        .img-cards_ajuste {max-width: 20%;height: auto;}
        
        .div-fluid_v2 {max-width: 100%;height: auto;}
        
        .bg-blue { --bs-bg-opacity: 1;background-color: #00ADBD  !important;}
        
        .bg-blue-dark {--bs-bg-opacity: 1;background-color: #01838f  !important;}

        a{font-size: 14px;font-weight: bold;color: white;}
        
        .background-principal{ background-image: url(https://clinicadacidade.com.br/wp-content/uploads/2022/03/fundo-home-clinica-min-v2.png); background-position: top center; background-repeat: no-repeat; background-size: cover; }
        
        .background-div-destacado {background: #01838f;border-radius: 20px;padding: 20px;margin-top: 20px; }

        footer p { margin: 0;}
        
        footer h5 { margin-bottom: 10px; }

        footer { margin: 0; padding: 1rem 0;  }

        .icone { font-size: 50px; color: #ffffff; }

        .whatsapp-icon { position: fixed; bottom: 47px;  right: 20px;  background-color: #0905f8; color: white;  border-radius: 50%;  padding: 15px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);  text-align: center; z-index: 1000; transition: background-color 0.3s; }

        .whatsapp-icon:hover { background-color: #128c82; }

        .chat-box { position: fixed; bottom: 80px; right: 20px;  width: 300px; background-color: white;  border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);display: none;  z-index: 1000; }

        .chat-header { background-color: #0a22f8;  color: white;  padding: 10px; border-radius: 8px 8px 0 0;}

        .chat-history { height: 400px;  overflow-y: auto; padding: 10px; border: 1px solid #ccc;  border-top: none; }

        .chat-input { display: flex;  padding: 20px; }

        .chat-input input { flex: 1; margin-right: 10px;}

        .cards_ajuste {height: 250px; object-fit: cover; width: 100%; }
        
        .alert {max-width: 300px;word-wrap: break-word;}
      
    </style>
    
    <body>
        <div class="bg-blue-dark text-white text-center">
            <nav class="navbar navbar-expand-sm bg-blue-dark navbar-dark">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto" style="margin-left:15%"> <!-- Itens da esquerda -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><b>Quem somos nós</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><b>Informações do sistema</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><b>Objetivos da Clínica</b></a>
                        </li>
                    </ul>
        
                    <ul class="navbar-nav" style="margin-right:15%"> <!-- Itens das redes sociais -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fa fa-github-alt" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        
        <x-nav/>

        <div class="container-fluid py-4 ">  <!-- Ocupa toda a largura -->
            <div class="card p-3 shadow-lg">
                <div class="card text-center shadow-lg p-3 mb-4 bg-blue">
                    <h3 class="fw-bold text-white">Seus dados</h3>
                </div>
             
                    <div class="row">
                        <div class="col-md-7">
                            <form action="" method="POST">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card text-center shadow-lg p-3 mb-4 bg-blue">
                                        <h3 class="fw-bold text-white">Suas Informações</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">  
                                            <div class="row">
                                                <div class="col-md-12">
                                               
                                                    <label for="email" class="form-label"><b>Nome:</b></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Nome..." name="nome">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                  
                                                    <label for="email" class="form-label"><b>Email:</b></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa fa-google-plus-official" aria-hidden="true"></i></span>
                                                        <input type="email" class="form-control" placeholder="Email..." name="email">
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-12">
                                                    <label for="email" class="form-label"><b>CPF:</b></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa fa-id-card-o" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="CPF..." name="cpf"  oninput="mascaraCPF(this)">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email" class="form-label"><b>Número:</b></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Número..." name="numero">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email" class="form-label"><b>Data Nascimento:</b></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" placeholder="Enter password" name="data_nascimento">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="email" class="form-label"><b>Data de Cadastro:</b></label>
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" placeholder="Enter password" name="data_cadastro">
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>
                                        <div class="col-md-4">  
                                            <div class="card h-100 shadow border-0">
                                                <img class="card-img-top cards_ajuste" src="pessoa.jpg" alt="Card image ">
                                                <div class="card-body">
                                                    <label for="inputImagem1" class="form-label fw-bold">Atualizar Foto</label>
                                                    <input class="form-control" type="file" name="inputImagemPerfil" id="inputImagemPerfil" accept="image/*">
                
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success" data-bs-dismiss="modal"><b>Atualizar Seus Dados</b></button>
                                    </div>
             
                                    </form>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-5">
                            <form action="" method="POST">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card text-center shadow-lg p-3 mb-4 bg-blue">
                                        <h3 class="fw-bold text-white">Seu Endereço</h3>
                                    </div>

                                   
                                    <div class="row">
                                        <div class="col-md-12">            
                                            <label for="email" class="form-label"><b>CEP:</b></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="CEP..." name="cep"  onkeyup="setarCepMascara(event)" maxlength="9">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                           
                                            <label for="email" class="form-label"><b>Logradouro:</b></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-map" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Logradouro..." name="logradouro">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="form-label"><b>Bairro:</b></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-building" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Bairro..." name="bairro">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-12">
                                            <label for="email" class="form-label"><b>Complemento:</b></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-street-view" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Complemento..." name="complemento">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="form-label"><b>Numero:</b></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-map-pin" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Numero..." name="numero">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="form-label"><b>UF:</b></label>
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="UF..." name="uf">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-outline-success" data-bs-dismiss="modal"><b>Atualizar Endereço</b></button>
                                    </div>
                                </form>
                                </div>
                            </div>

                        </div>
                    </div>
                   
                  </form>
               
            </div>
        </div>

        <a href="#" class="whatsapp-icon" title="Chat no WhatsApp" onclick="aberturaChat()">
            <i class="fa fa-weixin" aria-hidden="true" style="font-size: 40px;"></i>
        </a>
        
        <br><br><br>
        <x-footer/> 

        <div class="chat-box" id="chatBox">
            <div class="chat-header">
                <strong>Chat Bot</strong>
                <button type="button" class="btn-close float-end" aria-label="Close" onclick="aberturaChat()"></button>
            </div>
            <div class="chat-history" id="chatHistory" style="color:black">
                <p class="alert alert-secondary  p-2 rounded-pill w3-card w3-left-align"><strong><i class="fa fa-android" aria-hidden="true"></i> BOT:</strong> Como posso ajudar?</p>
            </div>
            <div class="chat-input">
                <input type="text" class="form-control" id="userMessage" placeholder="Digite sua mensagem..." />
                <button class="btn btn-dark" onclick="chatEnvioMensagens()" id="botaoEnviarMsg">Enviar</button>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

        <script>
            function aberturaChat() {
                const chatBox = document.getElementById('chatBox');
                chatBox.style.display = chatBox.style.display === 'none' || chatBox.style.display === '' ? 'block' : 'none';
            }
        
            
            function chatEnvioMensagens() {
                const novaMensagemUsuario = document.getElementById('userMessage').value;
                if (novaMensagemUsuario.trim() !== '') {

                    const chatHistory = document.getElementById('chatHistory');

                    const CampoNovaMensagemUsuario = document.createElement('p');
                    CampoNovaMensagemUsuario.innerHTML = `<strong><i class="fa fa-user-circle" aria-hidden="true"></i> Você:</strong> ${novaMensagemUsuario}`;
                    CampoNovaMensagemUsuario.className = "alert alert-success p-2 rounded-pill w3-card w3-left-align";
                    
                    chatHistory.appendChild(CampoNovaMensagemUsuario);
                    //
                    document.getElementById('botaoEnviarMsg').innerHTML = '<img src="loading.gif" width="25px" alt="GIF">';
                    document.getElementById('botaoEnviarMsg').disabled = true;
                    //
                    document.getElementById('userMessage').value = ''; // Limpa o campo de input
                    chatHistory.scrollTop = chatHistory.scrollHeight; // Rola para baixo

                    var url = "http://185.123.250.254:81/";
                    var datas = {NovaMensagemUsuario: novaMensagemUsuario};
        
                    $.ajax({
                        url: url,
                        method: 'GET',
                        data: JSON.stringify(datas),
                        contentType: 'application/json',
                        success: function(responses) {
                            
                            const CampoNovaMensagemBot = document.createElement('p');
                            //
                            document.getElementById('botaoEnviarMsg').innerHTML = 'Enviar';
                            document.getElementById('botaoEnviarMsg').disabled = false;
                            //
                            CampoNovaMensagemBot.innerHTML = `<strong><i class="fa fa-android" aria-hidden="true"></i> BOT:</strong> Não entendi`;
                            CampoNovaMensagemBot.className = "alert alert-secondary  p-2 rounded-pill w3-card w3-left-align";
                            chatHistory.appendChild(CampoNovaMensagemBot);
                            document.getElementById('userMessage').value = ''; // Limpa o campo de input
                            chatHistory.scrollTop = chatHistory.scrollHeight; // Rola para baixo
                  
                        },
                        error: function(xhr, status, error) {
                            const CampoNovaMensagemBot = document.createElement('p');
                             //
                             document.getElementById('botaoEnviarMsg').innerHTML = 'Enviar';
                             document.getElementById('botaoEnviarMsg').disabled = false;
                             //
                            CampoNovaMensagemBot.innerHTML = `<strong><i class="fa fa-android" aria-hidden="true"></i> BOT:</strong> Não entendi`;
                            CampoNovaMensagemBot.className = "alert alert-secondary  p-2 rounded-pill w3-card w3-left-align";
                            chatHistory.appendChild(CampoNovaMensagemBot);
                            document.getElementById('userMessage').value = ''; // Limpa o campo de input
                            chatHistory.scrollTop = chatHistory.scrollHeight; // Rola para baixo

                        
                        }
                        });
                    
                }
            }


        </script>
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