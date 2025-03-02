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
        body {display: flex; flex-direction: column;  min-height: 100vh; margin: 0; padding: 0;}

        .div_login{width: 30%;}
        
        .container_v2{--bs-gutter-y: 0;padding-right: calc(var(--bs-gutter-x)* .5);padding-left: calc(var(--bs-gutter-x)* .5);margin-right: auto;margin-left: auto;}
        
        .div_img{display: flex;justify-content: center;}
        
        .botao_v2{width: 100%;}
        
        .img_formatar{width: 50%;height: 50%;}
        
        a.status {color:rgb(45 147 5);text-decoration: underline;}
        
        .img-fluid_v2 {max-width: 50%;height: auto;}
        
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

        .alert {max-width: 300px;word-wrap: break-word;}
      
    </style>
    
    <body>

        <x-descricao/>
        
        <x-nav/>
        
        <div class="background-principal">
            <div class="container" style="margin-right:25%">
                <div class="row justify-content-between"> <!-- Alinha os itens da linha -->
                    <div class="col-md-7 text-center">
                        <a class="navbar-brand" href="#" style="margin-top:60%">
                            <img class="img-fluid_v2" src="boneco_melhor.png" alt="Logo" style="margin-top:10%" width="100%" height="auto">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <div class="text-white text-center p-5">
                            <h3><b>Sistema para agendamentos e consultas!</b></h3>
                        </div>
        
                        <div class="text-white text-center p-5 background-div-destacado">
                            <h3><b>Encontre e marque com a clínica mais próxima!</b></h3>
                            <hr>
        
                            <div class="d-flex justify-content-center align-items-center">
                                <a type="button" class="btn btn-light btn-lg botao_v2" href="locais.html"><b>Buscar Centro de Clínicas</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <br>

        <div class="justify-content-center align-items-center text-white text-center w-100">
            <div class="card div_login container_v2 w-100">
                <div class="card-header">
                    <h4><b>Nesta Clínica você encontra</b></h4>
                </div>
                <div class="card-body align-items-center bg-blue-dark background-principal">
                    <div class="container text-white ">
                        <div class="row">
                            <div class="col-md-3 text-white ">
                                <i class="fa fa-file-pdf-o icone" aria-hidden="true"></i><br><b>Seus Agendamentos</b>
                            </div>
                            <div class="col-md-3 text-white ">
                                <i class="fa fa-clock-o icone" aria-hidden="true"></i><br><b>Suas Datas marcadas</b>
                            </div>
                            <div class="col-md-3 text-white ">
                                <i class="fa fa-commenting-o icone" aria-hidden="true"></i><br><b>Observações</b>
                            </div>
                            <div class="col-md-3 text-white ">
                                <i class="fa fa-info-circle icone" aria-hidden="true"></i><br><b>Informativos</b>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <a type="button" class="btn btn-light" href="agendamentos.html"><b>Seus Agendamentos</b></a>
                            </div>
                        </div>
                </div>
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
    </body>
</html>
