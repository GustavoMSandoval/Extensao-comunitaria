<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Locais</title>
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
        <x-descricao/>
        
        <x-nav/>

        <div class="container-fluid py-4 ">  <!-- Ocupa toda a largura -->
            <div class="card p-3 shadow-lg">
                <div class="card text-center shadow-lg p-3 mb-4 bg-blue">
                    <h3 class="fw-bold text-white">Clinícas Perto De Você</h3>
                </div>

                <div class="d-flex justify-content-end mb-4" style="margin-right:1%">
                    <button class="btn bg-blue text-white" id="InserirLocal|">
                        <b><i class="fa fa-plus" aria-hidden="true"></i></b>
                    </button>
                </div>
                
                <div class="row row-cols-1 row-cols-md-4 g-0 w-100"> 
                    @isset($clinicas)
                        @foreach ($clinicas as $item)
                                <x-clinica-component 
                                id="{{$item->id}}"
                                nome="{{$item->nome_clinica}}"
                                endereco="{{ $item->rua_clinica }}" 
                                telefone="{{ $item->telefone_clinica }}" 
                                horaAbertura="{{ \Carbon\Carbon::parse($item->hora_abertura_clinica)->format('H:i') }}" 
                                horaFechamento="{{ \Carbon\Carbon::parse($item->hora_fechamento_clinica)->format('H:i') }}"/>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>

        <a href="#" class="whatsapp-icon" title="Chat no WhatsApp" onclick="aberturaChat()">
            <i class="fa fa-weixin" aria-hidden="true" style="font-size: 40px;"></i>
        </a>
        
        <br><br><br>
        <x-footer/> 

        <x-chatbox/>

        <!-- The Modal Editar -->
        <div class="modal" id="InserirLocalModal">
            <div class="modal-dialog">
                    <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-header bg-blue-dark text-white">
                        <h4 class="modal-title">Solicitar Inserção da Clínica</h4>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                    </div>
            
                    <!-- body -->
                    <div class="modal-body">
                        <form action="register-clinica" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
    
                                    <label for="primeira_imagem" class="form-label fw-bold">Escolha a Primeira Imagem</label>
                                        <input class="form-control" type="file" name="primeira_imagem" id="primeira_imagem" accept="image/*">
    
                                    <label for="segunda_imagem" class="form-label fw-bold">Escolha a Segunda Imagem</label>
                                        <input class="form-control" type="file"  name="segunda_imagem" id="segunda_imagem" accept="image/*">
    
                                    <label for="terceira_imagem" class="form-label fw-bold">Escolha a Terceira Imagem</label>
                                        <input class="form-control" type="file" name="terceira_imagem" id="terceira_imagem" accept="image/*">
    
                                    <label for="email"><b>Nome da Clinica </b></label>
                                        <input class="form-control" type="text" name="nome_clinica" placeholder="Nome da clínica...">
                                    
                                    <label for="email"><b>Rua</b></label>
                                        <input class="form-control" type="text" name="rua_clinica" placeholder="Rua..." >
    
                                    <label for="email"><b>Telefone</b></label>
                                        <input class="form-control" type="text" name="telefone_clinica"  placeholder="Telefone...">
    
                                    <label for="email"><b>Hora de Abertura</b></label>
                                        <input class="form-control"  type="time" name="hora_abertura_clinica"  placeholder="Hora de Abertura...">
    
                                    <label for="email"><b>Hora de Fechamento</b></label>
                                        <input class="form-control"  type="time" name="hora_fechamento_clinica"  placeholder="Hora de Fechamento...">
    
                                    <label for="email"><b>Situação</b></label>
                                    <select class="form-select form-select-sm" name="situacao_clinica">
                                        <option value="aberto">Aberta</option>
                                        <option value="finalizado">Fechada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-outline-success" ><b>Enviar</b></button>
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><b>Fechar</b></button>
                            </div>
                        </form>
                    </div>
                    <!-- footer -->
                </div>
            </div>
        </div>
        <!-- The Modal Editar -->

        <!-- The Modal Editar -->
        <div class="modal" id="editarAgendamentoModal">
        <div class="modal-dialog">
                <div class="modal-content">
                <!-- Header -->
                <div class="modal-header bg-blue-dark text-white">
                    <h4 class="modal-title">Solicitar Edição da Clinica</h4>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                </div>
        
                <!-- body -->
                <div class="modal-body">
                    <form action="edit-clinica" method="POST">~
                        @csrf
                        <div class="row">
                            <div class="col-md-12">

                                <label for="inputImagem1" class="form-label fw-bold">Escolha a Primeira Imagem</label>
                                    <input class="form-control" type="file" name="inputImagem1" id="inputImagem1" accept="image/*">

                                <label for="inputImagem1" class="form-label fw-bold">Escolha a Segunda Imagem</label>
                                    <input class="form-control" type="file" name="inputImagem2" id="inputImagem2" accept="image/*">

                                <label for="inputImagem1" class="form-label fw-bold">Escolha a Terceira Imagem</label>
                                    <input class="form-control" type="file" name="inputImagem3" id="inputImagem3" accept="image/*">

                                <label for="email"><b>Nome da Clinica </b></label>
                                    <input class="form-control" type="text" name="nome_clinica" value="{{}}">
                                
                                <label for="email"><b>Rua</b></label>
                                    <input class="form-control" type="text" name="rua_clinica" value="R. Barão do Rio Branco, 303">

                                <label for="email"><b>Telefone</b></label>
                                    <input class="form-control" type="text" name="telefone_clinica" value=" (11) 97257-7291">

                                <label for="email"><b>Hora de Abertura</b></label>
                                    <input class="form-control"  type="time" name="hora_abertura_clinica" value="18:00">

                                <label for="email"><b>Hora de Fechamento</b></label>
                                    <input class="form-control"  type="time" name="hora_fechamento_clinica" value="18:00">

                                <label for="email"><b>Situação</b></label>
                                <select class="form-select form-select-sm" name="situacao_clinica">
                                    <option value="aberto">Aberta</option>
                                    <option value="finalizado">Fechada</option>
                                </select>
                                <input type="hidden" id="editarClinicaInput">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal"><b>Enviar</b></button>
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><b>Fechar</b></button>
                        </div>
                    </form>
                </div>
        
                <!-- footer -->
    
            </div>
        </div>
    </div>
    <!-- The Modal Editar -->
    
    <!-- The Modal Cancelar -->
        <div class="modal fade" id="CancelarAgendamentoModal" tabindex="-1" aria-labelledby="CancelarAgendamentoLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Header -->
                    <div class="modal-header bg-danger text-white">
                        <h4 class="modal-title"><i class="bi bi-exclamation-triangle-fill"></i> Solicitar Cancelamento</h4>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Body -->
                    <div class="modal-body">
                        <form action="" method="POST">
                            <!-- Mensagem de aviso -->
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <i class="bi bi-info-circle-fill me-2"></i>
                                <div>
                                    Tem certeza que deseja cancelar este agendamento? Essa ação não pode ser desfeita.
                                </div>
                            </div>

                            <!-- Campo para justificativa -->
                            <div class="mb-3">
                                <label for="justificativa" class="form-label fw-bold">Justifique o cancelamento (opcional)</label>
                                <textarea class="form-control" name="justificativa" id="justificativa" rows="3" placeholder="Digite sua justificativa..."></textarea>
                                <input type="hidden" id="CancelarClinicaInput">
                            </div>
                        </form>
                    </div>

                    <!-- Footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-danger">
                            <i class="bi bi-send-fill"></i> Enviar Cancelamento
                        </button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle-fill"></i> Fechar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- The Modal Cancelar -->


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

       
    </body>
</html>