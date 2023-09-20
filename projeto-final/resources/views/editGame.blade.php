<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Indiana</title>
    <link rel="stylesheet" href="../../resources/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="body font-sans">
    <div class=" w-full">
        <div class="header w-full fixed flex items-center ">
            <div class="flex items-center w-full h-14 hover:scale-y-110 hover:h-16 transition-ease-in-out duration-500">
                <div class="w-4/12 sm:w-2/12 h-full flex items-center justify-center pl-2 ">
                    <a href="{{ url('/') }}">
                        <img class="w-32" src="../../storage/img/logo_nova.png" alt="Logo">
                    </a>
                </div>
                <div class="w-full sm:w-2/12 flex items-center justify-center pl-2 ">
                    @yield('search')
                </div>
                @auth
                    <div class="w-7/12 h-full flex items-center justify-end me-4 ">
                        <a href="{{ url('addGame') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Cadastrar
                            Jogo</a>
                        <a href="{{ url('profileGames') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Meus
                            Jogos</a>
                        <a href="{{ url('profile') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Perfil</a>
                        <a href="{{ route('logout') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white cursor-pointer ">Sair</a>
                    </div>
                @endauth
                @guest
                    <div class="w-10/12 h-full flex items-center justify-end me-4">
                        <a href="login"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Log
                            in</a>
                        <a href="register"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white ">Cadastrar</a>
                    </div>
                @endguest
            </div>
        </div>
        <main class="h-full">
          <div class="w-full h-screen">
            <div class="w-full h-1/4 flex items-center">
              <div class="w-full text-center">
                <span class="label-input text-2xl font-semibold text-slate-300 hover:text-gray-400 dark:text-gray-400 dark:hover:text-white">Atualizar o jogo: {{$game->title}}</span>
              </div>
            </div>
            <form action="{{$game->id}}" enctype="multipart/form-data" method="POST" class="w-full flex flex-col items-center">
              @csrf
              <div class="w-full h-5/6 flex flex-col sm:flex-row justify-center sm:space-x-4 space-y-4 sm:space-y-0">
                <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-8 space-y-10 rounded-lg pb-9">
                  <span class="label-input text-1xl font-semibold text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-white">Informações principais</span>
                  <input type="text" name="title" id="title" class="w-10/12 input-form py-4 px-4 rounded-full text-center outline-blue-700" placeholder="Título" required value="{{$game->title}}">
                  <input type="file" name="image" id="image" class="block w-full text-sm text-slate-400 ml-16
                    file:mr-4 file:py-3 file:px-5
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-sky-800 file:text-slate-300
                    hover:file:bg-sky-600
                "/>
                </div>
                <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-10 space-y-10 rounded-lg pb-4">
                  <span class="label-input text-1xl font-semibold text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-white">Descrição e detalhes</span>
                  <textarea class="w-10/12 rounded-lg h-14 outline-blue-700" name="description" id="description" cols="30" rows="2" placeholder="Descrição do jogo" required >{{$game->description}}</textarea>
                  <input type="text" name="official_link" id="official_link" class="w-10/12 input-form py-4 px-4 rounded-full text-center outline-blue-700" placeholder="Link Oficial" required value="{{$game->official_link}}">
                </div>
                <div class="w-full sm:w-3/12 h-full border border-slate-700 flex flex-col items-center pt-10 space-y-10 rounded-lg pb-4">
                  <span class="label-input text-1xl font-semibold text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-white">Mídia Externa</span>
                  <input type="text" name="tags" id="tags" class="w-10/12 input-form py-4 px-4 rounded-full text-center outline-blue-700" placeholder="Tags" required value="{{$game->tags}}">
                  <input type="text" name="video_yt" id="video_yt" class="w-10/12 input-form py-4 px-4 rounded-full text-center outline-blue-700" placeholder="Link Youtube (trecho após o sinal '=')" required value="{{$game->video_yt}}">
                </div>
              </div>
              <div class="w-9/12 mt-3 ">
                <input type="submit" name="Atualizar" value="Atualizar jogo" class="w-full input-form py-4 px-4 rounded-full text-center text-slate-200 font-bold bg-slate-700 hover:bg-slate-500 hover:cursor-pointer">
              </div>
            </form>
            </div>
        </main>
    </div>
    <div class="absolute">
        <div class="fixed bottom-0 w-full">
            <footer class="flex content-end sm:flex-row py-2">
                <div class="w-full sm:w-3/12 flex flex-col items-center border-r border-slate-700">
                    <span class="text-xs font-bold text-white">Nossas Redes</span>
                    <div class="flex mt-2 sm:mt-4 space-x-1.5 sm:space-x-4">
                        <a href="https://www.instagram.com/wm_magalhaes/" target="_blank"><img
                                class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="../../storage/img/instagram.png" alt="Instagram"></a>
                                <a href="https://www.facebook.com/" target="_blank"
                                rel="noopener noreferrer"><img
                                    class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                    src="../../storage/img/facebook.png" alt="Facebook"></a>
                        <a href="https://www.youtube.com/channel/UCk566-F4NdZcGkrlTdGDgew" target="_blank"
                            rel="noopener noreferrer"><img
                                class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="../../storage/img/youtube.png" alt="Youtube"></a>
                        <a href="https://www.linkedin.com/in/waleriano-magalh%C3%A3es-84b39219b/" target="_blank"
                            rel="noopener noreferrer"><img
                                class="w-8 h-8 hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="../../storage/img/linkedin (1).png" alt="Linkedin"></a>
                        <a href="https://github.com/MetzkerDeveloper" target="_blank" rel="noopener noreferrer"><img
                                class=" w-8 h-8 bg-white rounded-full border-transparent hover:scale-125 hover:cursor-pointer transition-all duration-500"
                                src="../../storage/img/github.png" alt="Github"></a>
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













