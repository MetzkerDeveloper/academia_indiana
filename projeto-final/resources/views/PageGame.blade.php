<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Indiana</title>
    <link rel="stylesheet" href="../../resources/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">
    <div class="h-screen w-full fixed">
        <div class="header flex items-center hover:scale-y-110 transition-all duration-500 h-16">
            <div class="w-4/12 sm:w-2/12 h-full flex items-center justify-center pl-2 hover:scale-100">
                <a href="{{url('/')}}">
                    <img class="w-32 scale-100" src="../../storage/img/logo_nova.png"
                        alt="Logo">
                    </a>
            </div>
            @auth
            <div class="w-10/12 h-full flex items-center justify-end me-4 hover:scale-100">
                <a href="{{url('addGame')}}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Cadastrar Jogo</a>
                <a href="{{url('profileGames')}}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Meus Jogos</a>
                    <a href="{{url('profile')}}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Perfil</a>
                    <a href="{{route('logout')}}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white cursor-pointer ">Sair</a>
            </div>
            @endauth

            @guest
             <div class="w-10/12 h-full flex items-center justify-end me-4 hover:scale-100">
                <a href="login"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Log in</a>
                <a href="register"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Cadastrar</a>
            </div>
            @endguest
        </div>
        <main class="body h-screen">
          <div class="w-full flex items-center justify-center">
            <div class="w-full sm:w-6/12 sm:flex hidden">
              <div class="w-4/12 h-4/6 flex items-center justify-center">
                <div class="flex flex-col items-center ml-6 sm:ml-20 mb-8 sm:mb-20 hover:scale-125 transition-all duration-500">
                  <img class="w-64 h-48 mt-4" src="../../storage/img/games/{{$game->image}}" alt="Imagem Jogo">
              </div>
              </div>
                <div class="label-input w-8/12 flex flex-col mt-4 space-y-4 text-center text-xl text-white">
                  <span class="">
                    Título: {{$game->title}}
                  </span>
                  <span>
                    Data de Lançamento: {{date('d/m/Y', strtotime($game->created_at))}}
                  </span>
                  <span>
                    Tags: {{$game->tags}}
                  </span>
                  <span>
                    Cadastrado por: {{$autor->name}}
                  </span>
              </div>
              <div class="flex items-center justify-center">
                  <a href="{{$game->official_link}}" target="_blank" class="bg-slate-500 hover:bg-slate-400 rounded-full p-2 w-24 text-center">Jogar</a>
              </div>
            </div>
            <div class="w-full sm:w-6/12 flex flex-wrap sm:justify-center mb-4">
              <iframe width="650" height="300" src="https://www.youtube.com/embed/{{$game->video_yt}}" title="YouTube video player" 
              frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="mt-5"></iframe>
            </div>
          </div>
          <div class="flex flex-col items-center justify-center text-white">
            <span class="label-input text-xl text-center mb-4">Descrição</span>
            <div class="w-10/12">
            <span class="label-input text-xs">
            {{$game->description}}
            </span>
          </div>
          </div>
        </main>
    </div>
    <div class="relative" id="footer">
        <div class="fixed bottom-0 w-full">
            <footer class="flex sm:flex-row py-2">
                <div class="w-full sm:w-3/12 flex flex-col items-center border-r border-slate-700">
                    <span class="text-xs font-bold text-white">Nossas Redes</span>
                    <div class="flex mt-2 sm:mt-4 space-x-1.5 sm:space-x-4">
                        <a href="https://www.instagram.com/wm_magalhaes/" target="_blank"><img class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500" src="../../storage/img/instagram.png" alt="Instagram"></a>
                        <a href="https://github.com/MetzkerDeveloper" target="_blank" rel="noopener noreferrer"><img class=" w-8 h-8 bg-white rounded-full border-transparent hover:scale-125 hover:cursor-pointer transition-all duration-500" src="../../storage/img/github.png" alt="Github"></a>
                        <a href="https://www.youtube.com/channel/UCk566-F4NdZcGkrlTdGDgew" target="_blank" rel="noopener noreferrer"><img class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500" src="../../storage/img/youtube.png" alt="Youtube"></a>
                        <a href="https://www.linkedin.com/in/waleriano-magalh%C3%A3es-84b39219b/" target="_blank" rel="noopener noreferrer"><img class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500" src="../../storage/img/linkedin (1).png" alt="Linkedin"></a>
                    </div>
                </div>
                <div class="w-full sm:w-3/12 flex justify-center border-r border-slate-700">
                    <span class="text-xs font-bold text-white">Sobre Nós</span>
                </div>
                <div class="w-full sm:w-3/12 flex justify-center border-r border-slate-700">
                    <span class="text-xs font-bold text-white">Inf. Legais</span>
                </div>
                <div class="w-full sm:w-3/12 flex justify-center">
                    <span class="text-xs font-bold text-white">Criadores</span>
                </div>
            </footer>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
