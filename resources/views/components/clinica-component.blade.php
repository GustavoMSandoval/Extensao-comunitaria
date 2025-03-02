<div class="col" style="padding:5px">
    <div class="card h-100 shadow border-0">
        <div id="demo_1" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#demo_1" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo_1" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo_1" data-bs-slide-to="2"></button>
            </div>       
            <!-- The slideshow/carousel -->
            <div class="carousel-inner cards_ajuste">
              <div class="carousel-item active">
                <img src="clinica_1.jpg" alt="Los Angeles" class="d-block w-100 cards_ajuste">
              </div>
              <div class="carousel-item">
                <img src="clinica_2.jpg" alt="Chicago" class="d-block w-100 cards_ajuste">
              </div>
              <div class="carousel-item">
                <img src="clinica_3.jpg" alt="New York" class="d-block w-100 cards_ajuste">
              </div>
            </div>     
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo_1" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo_1" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        
          <div class="card-body ">

            <h4 class="card-title fw-bold text-primary">{{ $nome }}</h4>                         
            <hr class="my-2">
            
            <p class="card-text">
                <i class="fa fa-home" aria-hidden="true"></i></i> <b> Endereço:</b> {{ $endereco }}
            </p>

            <p class="card-text">
                <i class="fa fa-phone" aria-hidden="true"></i> <b> Telefone:</b> {{ $telefone }}
            </p>

            <p class="card-text">
                <i class="fa fa-clock-o" aria-hidden="true"></i> <b> Horário:</b> {{ $horaAbertura }}hrs - {{ $horaFechamento }}hrs
            </p>
            <hr class="my-2">
            
            <div class="d-flex justify-content-center gap-2">
                <button class="btn btn-outline-primary" id="editarAgendamentos|1">
                    <i class="bi bi-pencil"></i> <b>Editar</b>
                </button>
                <button class="btn btn-outline-danger" id="CancelarAgendamento|1">
                    <i class="bi bi-x-circle"></i> <b>Inativar</b>
                </button>
            </div>
        </div>
    </div>
</div>