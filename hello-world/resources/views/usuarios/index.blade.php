<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Usuarios Laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">WM | Laravel List</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href='{{url("usuarios")}}'>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='{{url("cadastrar")}}'>Cadastrar</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="btn btn-danger" href='{{url("sair")}}'>Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="alert alert-primary text-center" role="alert">
      <h1>Listando Usuários com Laravel:</h1>
      <h2>Quantidade de usuários :  {{$qtd_users}}</h2>
    </div>
    <table class="table table-striped text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Criação</th>
          <th scope="col">Atualização</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->created_at}}</td>
          <td>{{$user->updated_at}}</td>
          <td><a href='{{url("usuarios/$user->id")}}'><ion-icon name="create-outline"></ion-icon></a>
            <a href='{{url("delete/$user->id")}}'><ion-icon name="trash-outline" style="color: #ff0000;"></ion-icon></a></td>
        </tr>
        </tr>
        @endforeach
      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item">
          <a class="page-link" href="{{$users->previousPageUrl()}}">Previous</a>
        </li>
        <li class="page-item"><a class="page-link">{{$users->currentPage()}}</a></li>
        <li class="page-item"><a class="page-link">{{$users->lastPage()}}</a></li>
        <li class="page-item">
          <a class="page-link" href="{{$users->nextPageUrl()}}">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="card-footer text-muted text-center">
    &copy; WM | DEV 2023
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>