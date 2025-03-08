<div>
    <a href="#" class="whatsapp-icon" title="Chat no WhatsApp" onclick="aberturaChat()">
        <i class="fa fa-weixin" aria-hidden="true" style="font-size: 40px;"></i>
    </a>
    
    
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
</div>
@verbatim
    
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
            document.getElementById('botaoEnviarMsg').innerHTML = '<img src="../../assets/loading.gif" width="25px" alt="GIF">';
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
    document.addEventListener("DOMContentLoaded", function(event) {
        $("button").click(function() {
            console.log("cliquei")
            if (this.id.includes('editarAgendamentos')) {
                var idAgendamento = this.id.split('|');
                document.getElementById('idAgendamento').value = idAgendamento[1];
                $('#editarAgendamentoModal').modal('show');
            }
            if (this.id.includes('CancelarAgendamento')) {
                var idAgendamento = this.id.split('|');
                document.getElementById('idAgendamentoExcluir').value = idAgendamento[1];
                $('#CancelarAgendamentoModal').modal('show');
              }
        });  
      });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
@endverbatim