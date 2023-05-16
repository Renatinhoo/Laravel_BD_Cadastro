
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE AGENDAMENTOS CLIENTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" href="css/estilo.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/funcoes.js"></script>

  
    <!-- styles --> 
     @vite([
    'resources/css/app.css',
    'resources/js/app.js',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
    ])
   
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            

                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                            <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">SISTEMA WEB</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consulta">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <nav class="navbar ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
      
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <form class="row g-3" method="POST" id="form" action="{{route('agendamentos.store')}}" nome="form">
            @csrf
        <h3>Cadastrar - Agendamentos de Potenciais Clientes</h1>
        <h5>Sistema utilizado para agendamento de serviços</h5>

        
        <div class="row">
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        
                    <div class="form-row">    
                        <label for="validationCustom01">Nome</label>
                        <input value="{{ $agendamento->nome }}" type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Nome Completo" required>
                    </div>

                    <div>
                        <label for="validationCustom02">Telefone:</label>
                        <input value="{{ $agendamento->telefone }}" type="tel" name="telefone" class="form-control" id="validationCustom02" placeholder="(xx) xxxxx-xxxx"  required>
                    </div>

                    <div>
                            <label for="inputState" class="form-label">Origem</label>
                            <select class="form-select" name="origem" id="inlineFormCustomSelect" required>
                                <option {{ $agendamento->origem == "Celular" ? 'selected="selected"' : '' }} value="Celular">Celular</option>
                                <option {{ $agendamento->origem == "Telefone Fixo" ? 'selected="selected"' : '' }} value="Telefone Fixo">Telefone Fixo</option>
                                <option {{ $agendamento->origem == "Celular/Telefone Móvel" ? 'selected="selected"' : '' }} value="Celular/Telefone Móvel">Celular/Telefone Móvel</option>
                                <option {{ $agendamento->origem == "Ramal" ? 'selected="selected"' : '' }} value="Ramal">Ramal</option>
                                <option {{ $agendamento->origem == "Whatsapp" ? 'selected="selected"' : '' }} value="Whatsapp">Whatsapp</option>
                                <option {{ $agendamento->origem == "Telegram" ? 'selected="selected"' : '' }} value="Telegram">Telegram</option>
                                <option {{ $agendamento->origem == "Facebook" ? 'selected="selected"' : '' }} value="Facebook">Facebook</option>
                            </select>  
                    </div>
                        <label for="validationCustom03">Data do Contato:</label>
                        <input value="{{ $agendamento->data_contato }}" type="date" name="contato" class="form-control" id="validationCustom03" placeholder="dd/mm/aaaa" required></input>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Observação:</label>
                        <textarea class="form-control" name="observacao" placeholder="Digite uma observação" rows="3" required>{{ $agendamento->observacao }}</textarea>
                    </div>
     </br>
                            <div>
                            <button class="btn btn-primary" type="submit">Cadastrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>
</body>
</html>